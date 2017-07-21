<?php

namespace Drupal\drd_agent\Controller;

use Drupal\Core\Config\ImmutableConfig;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class Default.
 *
 * @package Drupal\drd_agent\Controller
 */
class Agent extends ControllerBase {

  /**
   * @var ImmutableConfig
   */
  protected $config;

  /**
   * @inheritDoc
   */
  public function __construct() {
    $this->config = \Drupal::configFactory()->get('drd_agent.settings');
  }

  public function get() {
    \Drupal::service('drd_agent.library')->load();
    return $this->deliver(\Drupal\drd\Agent\Action\Base::run(8, $this->config->get('debug_mode')));
  }

  public function getCryptMethods() {
    \Drupal::service('drd_agent.library')->load();
    return $this->deliver(base64_encode(serialize(\Drupal\drd\Crypt\Base::getMethods())));
  }

  /**
   * Callback to deliver the result of the action in json format.
   *
   * @param $data
   * @return JsonResponse
   */
  function deliver($data) {
    return new JsonResponse($data, 200, [
      'Content-Type' => 'text/plain; charset=utf-8',
      'X-DRD-Agent' => $_SERVER['HTTP_X_DRD_VERSION'],
    ]);
  }

}
