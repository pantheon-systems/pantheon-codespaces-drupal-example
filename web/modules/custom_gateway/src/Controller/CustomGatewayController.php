<?php

namespace Drupal\custom_gateway\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Custom Gateway routes.
 */
class CustomGatewayController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
