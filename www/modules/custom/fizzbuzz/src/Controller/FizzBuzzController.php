<?php
/**
 * @file
 * Contains \Drupal\fizzbuzz\Controller\FizzBuzzController.
 */

namespace Drupal\fizzbuzz\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\fizzbuzz\Model\FizzBuzz;

/**
 * Controller for FizzBuzz.
 */
class FizzBuzzController extends ControllerBase {

  /**
   * Displays the FizzBuzz.
   *
   * @return array
   *   rendering info.
   */
  public function content() {
    return [
      '#theme'   => 'fizzbuzz',
      '#numbers' => FizzBuzz::generate(),
    ];
  }

}
