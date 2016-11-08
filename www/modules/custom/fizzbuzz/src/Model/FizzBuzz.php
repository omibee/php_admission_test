<?php
/**
 * @file
 * Contains \Drupal\fizzbuzz\Model\FizzBuzz.
 */

namespace Drupal\fizzbuzz\Model;


/**
 * Implements the fizzbuzz.
 */
class FizzBuzz {

  /**
   * Number to start FizzBuzz from.
   */
  const START_NUMBER = 1;

  /**
   * Last number in FizzBuzz.
   */
  const FINAL_NUMBER = 100;

  /**
   * Performs a FizzBuzz permutation.
   *
   * @param int $number
   *   FizzBuzz number.
   *
   * @return string
   *   FizzBuzz number (or string) to show.
   */
  protected static function parseFizzBuzzNumber($number) {
    // TODO: Make this work.
    if($number%3 == 0 && $number%5==0)
    {
       return "FizzBuzz";    
    }

    else if($number%3 == 0)
    {
       return "Fizz";    
    }
    else if($number%5 == 0)
    {
       return "Buzz";    
    }
    else{
      return $number;
    }
  }

  /**
   * Creates a FizzBuzz number array.
   *
   * @return array
   *   Fizzbuzz numbers.
   */
  public static function generate() {
    return array_map(function($value) {
      return self::parseFizzBuzzNumber($value);
    }, range(self::START_NUMBER, self::FINAL_NUMBER));
  }

}
