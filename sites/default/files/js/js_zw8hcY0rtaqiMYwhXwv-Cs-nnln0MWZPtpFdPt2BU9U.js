/**
 * @file
 * Provides JavaScript additions to the managed file field type.
 *
 * This file provides progress bar support (if available), popup windows for
 * file previews, and disabling of other file fields during Ajax uploads (which
 * prevents separate file fields from accidentally uploading files).
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Attach behaviors to the file fields passed in the settings.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches validation for file extensions.
   * @prop {Drupal~behaviorDetach} detach
   *   Detaches validation for file extensions.
   */
  Drupal.behaviors.fileValidateAutoAttach = {
    attach: function (context, settings) {
      var $context = $(context);
      var elements;

      function initFileValidation(selector) {
        $context.find(selector)
          .once('fileValidate')
          .on('change.fileValidate', {extensions: elements[selector]}, Drupal.file.validateExtension);
      }

      if (settings.file && settings.file.elements) {
        elements = settings.file.elements;
        Object.keys(elements).forEach(initFileValidation);
      }
    },
    detach: function (context, settings, trigger) {
      var $context = $(context);
      var elements;

      function removeFileValidation(selector) {
        $context.find(selector)
          .removeOnce('fileValidate')
          .off('change.fileValidate', Drupal.file.validateExtension);
      }

      if (trigger === 'unload' && settings.file && settings.file.elements) {
        elements = settings.file.elements;
        Object.keys(elements).forEach(removeFileValidation);
      }
    }
  };

  /**
   * Attach behaviors to file element auto upload.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches triggers for the upload button.
   * @prop {Drupal~behaviorDetach} detach
   *   Detaches auto file upload trigger.
   */
  Drupal.behaviors.fileAutoUpload = {
    attach: function (context) {
      $(context).find('input[type="file"]').once('auto-file-upload').on('change.autoFileUpload', Drupal.file.triggerUploadButton);
    },
    detach: function (context, setting, trigger) {
      if (trigger === 'unload') {
        $(context).find('input[type="file"]').removeOnce('auto-file-upload').off('.autoFileUpload');
      }
    }
  };

  /**
   * Attach behaviors to the file upload and remove buttons.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches form submit events.
   * @prop {Drupal~behaviorDetach} detach
   *   Detaches form submit events.
   */
  Drupal.behaviors.fileButtons = {
    attach: function (context) {
      var $context = $(context);
      $context.find('.js-form-submit').on('mousedown', Drupal.file.disableFields);
      $context.find('.js-form-managed-file .js-form-submit').on('mousedown', Drupal.file.progressBar);
    },
    detach: function (context) {
      var $context = $(context);
      $context.find('.js-form-submit').off('mousedown', Drupal.file.disableFields);
      $context.find('.js-form-managed-file .js-form-submit').off('mousedown', Drupal.file.progressBar);
    }
  };

  /**
   * Attach behaviors to links within managed file elements for preview windows.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches triggers.
   * @prop {Drupal~behaviorDetach} detach
   *   Detaches triggers.
   */
  Drupal.behaviors.filePreviewLinks = {
    attach: function (context) {
      $(context).find('div.js-form-managed-file .file a').on('click', Drupal.file.openInNewWindow);
    },
    detach: function (context) {
      $(context).find('div.js-form-managed-file .file a').off('click', Drupal.file.openInNewWindow);
    }
  };

  /**
   * File upload utility functions.
   *
   * @namespace
   */
  Drupal.file = Drupal.file || {

    /**
     * Client-side file input validation of file extensions.
     *
     * @name Drupal.file.validateExtension
     *
     * @param {jQuery.Event} event
     *   The event triggered. For example `change.fileValidate`.
     */
    validateExtension: function (event) {
      event.preventDefault();
      // Remove any previous errors.
      $('.file-upload-js-error').remove();

      // Add client side validation for the input[type=file].
      var extensionPattern = event.data.extensions.replace(/,\s*/g, '|');
      if (extensionPattern.length > 1 && this.value.length > 0) {
        var acceptableMatch = new RegExp('\\.(' + extensionPattern + ')$', 'gi');
        if (!acceptableMatch.test(this.value)) {
          var error = Drupal.t('The selected file %filename cannot be uploaded. Only files with the following extensions are allowed: %extensions.', {
            // According to the specifications of HTML5, a file upload control
            // should not reveal the real local path to the file that a user
            // has selected. Some web browsers implement this restriction by
            // replacing the local path with "C:\fakepath\", which can cause
            // confusion by leaving the user thinking perhaps Drupal could not
            // find the file because it messed up the file path. To avoid this
            // confusion, therefore, we strip out the bogus fakepath string.
            '%filename': this.value.replace('C:\\fakepath\\', ''),
            '%extensions': extensionPattern.replace(/\|/g, ', ')
          });
          $(this).closest('div.js-form-managed-file').prepend('<div class="messages messages--error file-upload-js-error" aria-live="polite">' + error + '</div>');
          this.value = '';
          // Cancel all other change event handlers.
          event.stopImmediatePropagation();
        }
      }
    },

    /**
     * Trigger the upload_button mouse event to auto-upload as a managed file.
     *
     * @name Drupal.file.triggerUploadButton
     *
     * @param {jQuery.Event} event
     *   The event triggered. For example `change.autoFileUpload`.
     */
    triggerUploadButton: function (event) {
      $(event.target).closest('.js-form-managed-file').find('.js-form-submit').trigger('mousedown');
    },

    /**
     * Prevent file uploads when using buttons not intended to upload.
     *
     * @name Drupal.file.disableFields
     *
     * @param {jQuery.Event} event
     *   The event triggered, most likely a `mousedown` event.
     */
    disableFields: function (event) {
      var $clickedButton = $(this).findOnce('ajax');

      // Only disable upload fields for Ajax buttons.
      if (!$clickedButton.length) {
        return;
      }

      // Check if we're working with an "Upload" button.
      var $enabledFields = [];
      if ($clickedButton.closest('div.js-form-managed-file').length > 0) {
        $enabledFields = $clickedButton.closest('div.js-form-managed-file').find('input.js-form-file');
      }

      // Temporarily disable upload fields other than the one we're currently
      // working with. Filter out fields that are already disabled so that they
      // do not get enabled when we re-enable these fields at the end of
      // behavior processing. Re-enable in a setTimeout set to a relatively
      // short amount of time (1 second). All the other mousedown handlers
      // (like Drupal's Ajax behaviors) are executed before any timeout
      // functions are called, so we don't have to worry about the fields being
      // re-enabled too soon. @todo If the previous sentence is true, why not
      // set the timeout to 0?
      var $fieldsToTemporarilyDisable = $('div.js-form-managed-file input.js-form-file').not($enabledFields).not(':disabled');
      $fieldsToTemporarilyDisable.prop('disabled', true);
      setTimeout(function () {
        $fieldsToTemporarilyDisable.prop('disabled', false);
      }, 1000);
    },

    /**
     * Add progress bar support if possible.
     *
     * @name Drupal.file.progressBar
     *
     * @param {jQuery.Event} event
     *   The event triggered, most likely a `mousedown` event.
     */
    progressBar: function (event) {
      var $clickedButton = $(this);
      var $progressId = $clickedButton.closest('div.js-form-managed-file').find('input.file-progress');
      if ($progressId.length) {
        var originalName = $progressId.attr('name');

        // Replace the name with the required identifier.
        $progressId.attr('name', originalName.match(/APC_UPLOAD_PROGRESS|UPLOAD_IDENTIFIER/)[0]);

        // Restore the original name after the upload begins.
        setTimeout(function () {
          $progressId.attr('name', originalName);
        }, 1000);
      }
      // Show the progress bar if the upload takes longer than half a second.
      setTimeout(function () {
        $clickedButton.closest('div.js-form-managed-file').find('div.ajax-progress-bar').slideDown();
      }, 500);
    },

    /**
     * Open links to files within forms in a new window.
     *
     * @name Drupal.file.openInNewWindow
     *
     * @param {jQuery.Event} event
     *   The event triggered, most likely a `click` event.
     */
    openInNewWindow: function (event) {
      event.preventDefault();
      $(this).attr('target', '_blank');
      window.open(this.href, 'filePreview', 'toolbar=0,scrollbars=1,location=1,statusbar=1,menubar=0,resizable=1,width=500,height=550');
    }
  };

})(jQuery, Drupal);
;
/**
 * @file
 * Javascript functionality for the focal point widget.
 */

(function($, Drupal) {
  'use strict';

  /**
   * Focal Point indicator.
   */
  Drupal.behaviors.focalPointIndicator = {
    attach: function(context, settings) {
      $(".focal-point", context).once('focal-point-hide-field').each(function() {
        // Hide the focal_point form item. We do this with js so that a non-js
        // user can still set the focal point values. Also, add functionality so
        // that if the indicator is double clicked, the form item is displayed.
        if (!$(this).hasClass('error')) {
          $(this).closest('.form-item').hide();
        }
      });

      $(".focal-point-indicator", context).once('focal-point-indicator').each(function() {
        // Set some variables for the different pieces at play.
        var $indicator = $(this);
        var $img = $(this).siblings('img');
        var $previewLink = $(this).siblings('.focal-point-preview-link');
        var $field = $("." + $(this).attr('data-selector'));
        var fp = new Drupal.FocalPoint($indicator, $img, $field, $previewLink);

        // Set the position of the indicator on image load and any time the
        // field value changes. We use a bit of hackery to make certain that the
        // image is loaded before moving the crosshair. See http://goo.gl/B02vFO
        // The setTimeout was added to ensure the focal point is set properly on
        // modal windows. See http://goo.gl/s73ge.
        setTimeout(function() {
          $img.one('load', function(){
            fp.setIndicator();
          }).each(function() {
            if (this.complete) $(this).load();
          });
        }, 0);

      });
    }

  };

  /**
   * Object representing the focal point for a given image.
   *
   * @param $indicator object
   *   The indicator jQuery object whose position should be set.
   * @param $img object
   *   The image jQuery object to which the indicator is attached.
   * @param $field array
   *   The field jQuery object where the position can be found.
   * @param $previewLink object
   *   The previewLink jQuery object.
   */
  Drupal.FocalPoint = function($indicator, $img, $field, $previewLink) {
    var self = this;

    this.$indicator = $indicator;
    this.$img = $img;
    this.$field = $field;
    this.$previewLink = $previewLink;

    // Make the focal point indicator draggable and tell it to update the
    // appropriate field when it is moved by the user.
    this.$indicator.draggable({
      containment: self.$img,
      stop: function() {
        var imgOffset = self.$img.offset();
        var focalPointOffset = self.$indicator.offset();

        var leftDelta = focalPointOffset.left - imgOffset.left;
        var topDelta = focalPointOffset.top - imgOffset.top;

        self.set(leftDelta, topDelta);
      }
    });

    // Allow users to double-click the indicator to reveal the focal point form
    // element.
    this.$indicator.on('dblclick', function() {
      self.$field.closest('.form-item').toggle();
    });

    // Allow users to click on the image preview in order to set the focal_point
    // and set a cursor.
    this.$img.on('click', function(event) {
      self.set(event.offsetX, event.offsetY);
    });
    this.$img.css('cursor', 'crosshair');

    // Add a change event to the focal point field so it will properly update
    // the indicator position.
    this.$field.on('change', function() {
      // Update the indicator position in case someone has typed in a value.
      self.setIndicator();

      // Update the href of the preview link.
      self.updatePreviewLink($(this).attr('data-selector'), $(this).val());
    });

    // Wrap the focal point indicator and thumbnail image in a div so that
    // everything still works with RTL languages.
    this.$indicator.add(this.$img).add(this.$previewLink).wrapAll("<div class='focal-point-wrapper' />");
  };

  /**
   * Set the focal point.
   *
   * @param offsetX int
   *   Left offset in pixels.
   * @param offsetY int
   *   Top offset in pixels.
   */
  Drupal.FocalPoint.prototype.set = function(offsetX, offsetY) {
    var focalPoint = this.calculate(offsetX, offsetY);
    this.$field.val(focalPoint.x + ',' + focalPoint.y).trigger('change');
    this.setIndicator();
  };

  /**
   * Change the position of the focal point indicator. This may not work in IE7.
   */
  Drupal.FocalPoint.prototype.setIndicator = function() {
    var coordinates = this.$field.val() !== '' && this.$field.val() !== undefined ? this.$field.val().split(',') : [50,50];

    var left = Math.min(this.$img.width(), (parseInt(coordinates[0], 10) / 100) * this.$img.width());
    var top = Math.min(this.$img.height(), (parseInt(coordinates[1], 10) / 100) * this.$img.height());

    this.$indicator.css('left', Math.max(0, left));
    this.$indicator.css('top', Math.max(0,top));
    this.$field.val(coordinates[0] + ',' + coordinates[1]);
  };

  /**
   * Calculate the focal point for the given image.
   *
   * @param offsetX int
   *   Left offset in pixels.
   * @param offsetY int
   *   Top offset in pixels.
   *
   * @returns object
   */
  Drupal.FocalPoint.prototype.calculate = function(offsetX, offsetY) {
    var focalPoint = {};
    focalPoint.x = this.round(100 * offsetX / this.$img.width(), 0, 100);
    focalPoint.y = this.round(100 * offsetY / this.$img.height(), 0, 100);

    return focalPoint;
  };

  /**
   * Rounds the given value to the nearest integer within the given bounds.
   *
   * @param value float
   *   The value to round.
   * @param min int
   *   The lower bound.
   * @param max int
   *   The upper bound.
   *
   * @returns int
   */
  Drupal.FocalPoint.prototype.round = function(value, min, max){
    var roundedVal = Math.max(Math.round(value), min);
    roundedVal = Math.min(roundedVal, max);

    return roundedVal;
  };

  /**
   * Updates the preview link to include the correct focal point value.
   *
   * @param selector string
   *   The data-selector value for the preview link.
   * @param value string
   *   The new focal point value in the form x,y where x and y are integers from
   *   0 to 100.
   */
  Drupal.FocalPoint.prototype.updatePreviewLink = function (selector, value) {
    var $previewLink = $('a.focal-point-preview-link[data-selector=' + selector + ']');
    if ($previewLink.length > 0) {
      var href = $previewLink.attr('href').split('/');
      href.pop();
      // The search property contains the query string which in some cases
      // includes the focal_point_token which is used to determine access.
      href.push(value.replace(',', 'x').concat($previewLink[0].search ? $previewLink[0].search : ''));
      $previewLink.attr('href', href.join('/'));
    }
  }

})(jQuery, Drupal);
;
