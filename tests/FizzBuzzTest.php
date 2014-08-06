<?php

require_once('./classes/FizzBuzz.php');

// “fizz” if the number is dividable by 3
// “buzz” if the number is dividable by 5
// “fizzbuzz” if the number is dividable by 15

class FizzBuzzTest extends \PHPUnit_Framework_TestCase {
	public function testFizzBuzz() {
		$fb = new Kata\FizzBuzz();
		$this->assertEquals(1, $fb->output(1));
		$this->assertEquals(2, $fb->output(2));
		$this->assertEquals('fizz', $fb->output(3));
		$this->assertEquals(4, $fb->output(4));
		$this->assertEquals('buzz', $fb->output(5));
		$this->assertEquals('fizz', $fb->output(6));
		$this->assertEquals('buzz', $fb->output(10));
		$this->assertEquals('fizzbuzz', $fb->output(15));
		$this->assertEquals('fizzbuzz', $fb->output(45));
		$this->assertEquals('fizz', $fb->output(33));
	}
}