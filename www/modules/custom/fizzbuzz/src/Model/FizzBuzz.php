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
    return $number;
  }

  /**
   * Creates a FizzBuzz number array.
   *
   * @return array
   *   Fizzbuzz numbers.
   */
  public static function generate() {
    return array_map(function($value) {
      $multithree = $value % 3;
      $multifive = $value % 5;
      if($multithree == 0 && $multifive == 0){
        return "FizzBuzz";
      } elseif ($multithree == 0){
        return "Fizz";
      } elseif ($multifive == 0){
        return "Buzz";
      } else {
        return self::parseFizzBuzzNumber($value);
      }
    }, range(self::START_NUMBER, self::FINAL_NUMBER));
  }

}
