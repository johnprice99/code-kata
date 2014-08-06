<?php

require_once('./classes/RomanNumerals.php');

class RomanNumeralsTest extends \PHPUnit_Framework_TestCase {

	public function testRomanToInt() {
		$rn = new Kata\RomanNumerals();

		$this->assertEquals(1, $rn->romanToInt('I'));
		$this->assertEquals(2, $rn->romanToInt('II'));
		$this->assertEquals(3, $rn->romanToInt('III'));
		$this->assertEquals(4, $rn->romanToInt('IV'));
		$this->assertEquals(5, $rn->romanToInt('V'));
		$this->assertEquals(6, $rn->romanToInt('VI'));
		$this->assertEquals(7, $rn->romanToInt('VII'));
		$this->assertEquals(8, $rn->romanToInt('VIII'));
		$this->assertEquals(9, $rn->romanToInt('IX'));
		$this->assertEquals(10, $rn->romanToInt('X'));

		$this->assertEquals(2000, $rn->romanToInt('MM'));
		$this->assertEquals(1984, $rn->romanToInt('MCMLXXXIV'));
		$this->assertEquals(500, $rn->romanToInt('D'));
		$this->assertEquals(501, $rn->romanToInt('DI'));
		$this->assertEquals(2005, $rn->romanToInt('MMV'));
		$this->assertEquals(59, $rn->romanToInt('LIX'));
		$this->assertEquals(357, $rn->romanToInt('CCCLVII'));
	}

	public function testIntToRoman() {
		$rn = new Kata\RomanNumerals();

		$this->assertEquals('I', $rn->intToRoman(1));
		$this->assertEquals('II', $rn->intToRoman(2));
		$this->assertEquals('III', $rn->intToRoman(3));
		$this->assertEquals('IV', $rn->intToRoman(4));
		$this->assertEquals('V', $rn->intToRoman(5));
		$this->assertEquals('VI', $rn->intToRoman(6));
		$this->assertEquals('VII', $rn->intToRoman(7));
		$this->assertEquals('VIII', $rn->intToRoman(8));
		$this->assertEquals('IX', $rn->intToRoman(9));
		$this->assertEquals('X', $rn->intToRoman(10));

		$this->assertEquals('MM', $rn->intToRoman(2000));
		$this->assertEquals('MCMLXXXIV', $rn->intToRoman(1984));
		$this->assertEquals('D', $rn->intToRoman(500));
		$this->assertEquals('DI', $rn->intToRoman(501));
		$this->assertEquals('MMV', $rn->intToRoman(2005));
		$this->assertEquals('LIX', $rn->intToRoman(59));
		$this->assertEquals('CCCLVII', $rn->intToRoman(357));
	}


	public function testCalculations() {
		$rn = new Kata\RomanNumerals();

		$this->assertEquals('XLVII', $rn->intToRoman(2+45));
		$this->assertEquals('CLXXX', $rn->intToRoman(36*5));
		$this->assertEquals('XCVIII', $rn->intToRoman((8 / 2 * 24) + 2));
		$this->assertEquals('XLVIII', $rn->intToRoman((52 - 100) * -1));
		$this->assertEquals('LXXXIV', $rn->intToRoman($rn->romanToInt('XII') * $rn->romanToInt('VII')));
		$this->assertEquals('CV', $rn->intToRoman(($rn->romanToInt('I') + ($rn->romanToInt('VI') * $rn->romanToInt('III')) + ($rn->romanToInt('C') * $rn->romanToInt('III')) - $rn->romanToInt('IV')) / $rn->romanToInt('III')));
	}
}