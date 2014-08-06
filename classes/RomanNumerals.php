<?php

namespace Kata;

class RomanNumerals {

	private $_matrix = array(
		'IV' => 4,
		'IX' => 9,
		'XL' => 40,
		'XC' => 90,
		'CD' => 400,
		'CM' => 900,
		'I' => 1,
		'V' => 5,
		'X' => 10,
		'L' => 50,
		'C' => 100,
		'D' => 500,
		'M' => 1000,
	);

	public function romanToInt($numeral) {
		$total = 0;

		foreach ($this->_matrix as $code => $result) {
			$numeral = str_replace($code, '', $numeral, $count);

			if ($count) {
				$total += $result*$count;
			}
		}

		return $total;
	}

	public function intToRoman($int) {
		$reversedMatrix = array_flip($this->_matrix);
		krsort($reversedMatrix);

		$output = '';

		foreach ($reversedMatrix as $number => $result) {
			$hasDivisible = true;
			while ($hasDivisible) {
				if ($int / $number >= 1) {
					$output .= $result;
					$int -= $number;
				}
				else {
					$hasDivisible = false;
				}
			}
			if (!$int) break;
		}
		return $output;
	}

}