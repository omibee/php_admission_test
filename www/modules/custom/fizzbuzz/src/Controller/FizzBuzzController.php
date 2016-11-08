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
    
    // $numbers = FizzBuzz::generate();

    // 	if(($i % 3) == 0 && ($i % 5) == 0){
    // 		echo 'FizzBuzz';
    // 	} else if(($i % 5) == 0){
    // 		echo 'Buzz';
    // 	} else if(($i % 3) == 0){
    // 		echo 'Fizz';
    // 	} else {
    // 	  echo $i.'<br>';
    // 	}

    return [
      '#theme'   => 'fizzbuzz',
      '#numbers' => FizzBuzz::generate(),
    ];
  }

}
