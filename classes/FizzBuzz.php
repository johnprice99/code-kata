<?php

namespace Kata;

class FizzBuzz {

	public function output($input) {

		if ($input%15 === 0) {
			return 'fizzbuzz';
		}
		elseif ($input%5 === 0) {
			return 'buzz';
		}
		elseif ($input%3 === 0) {
			return 'fizz';
		}

		return $input;
	}

}