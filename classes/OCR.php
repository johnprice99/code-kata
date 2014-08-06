<?php

namespace Kata;

class OCR {



}
/*

    _  _     _  _  _  _  _  _
  | _| _||_||_ |_   ||_||_|| |
  ||_  _|  | _||_|  ||_| _||_|

    _  _     _  _  _  _  _  _
  | _| _||_||_ |_ | ||_||_|| |
  ||_  _|  | _||_||_||_| _||_|

line 1 - only numbers without underscore are 1 and 4
line 2 - only 5 and 6 do not use right line, 1,2,3 and 7 do not use left line. 1 and 7 and 0 do not have the underscore
line 3 - only 1, 4 and 7 do not have the underscore. only 2 doesn't have the right line, 2, 6, 8 and 0 are the only digits with the left line

*/

$accountNumberLength = 9;

$accountNumber = array();
for ($i=1;$i<=$accountNumberLength;$i++) {
	$accountNumber[] = array(0,1,2,3,4,5,6,7,8,9);
}

$handle = fopen('../files/accounts.txt', 'r');

$lineNumber = 1;
while (($line = fgets($handle)) !== false) {
	$digit = 0;
	$line = str_replace("\r\n", "", $line);

	for($i=0;$i<=strlen($line)-1;$i+=3) {
		$char1 = $line[$i];
		$char2 = $line[$i+1];
		$char3 = $line[$i+2];

		switch ($lineNumber) {
			case 1:
				if ($char2 !== '_' ) {
					unset($accountNumber[$digit][0]);
					unset($accountNumber[$digit][2]);
					unset($accountNumber[$digit][3]);
					unset($accountNumber[$digit][5]);
					unset($accountNumber[$digit][6]);
					unset($accountNumber[$digit][7]);
					unset($accountNumber[$digit][8]);
					unset($accountNumber[$digit][9]);
				}
				else {
					unset($accountNumber[$digit][1]);
					unset($accountNumber[$digit][4]);
				}
				break;
			case 2:
				if ($char2 !== '_' ) {
					unset($accountNumber[$digit][2]);
					unset($accountNumber[$digit][3]);
					unset($accountNumber[$digit][4]);
					unset($accountNumber[$digit][5]);
					unset($accountNumber[$digit][6]);
					unset($accountNumber[$digit][8]);
					unset($accountNumber[$digit][9]);
				}
				else {
					unset($accountNumber[$digit][0]);
					unset($accountNumber[$digit][1]);
					unset($accountNumber[$digit][7]);
				}

				if ($char3 !== '|') {
					unset($accountNumber[$digit][0]);
					unset($accountNumber[$digit][1]);
					unset($accountNumber[$digit][2]);
					unset($accountNumber[$digit][3]);
					unset($accountNumber[$digit][4]);
					unset($accountNumber[$digit][7]);
					unset($accountNumber[$digit][8]);
					unset($accountNumber[$digit][9]);
				}
				else {
					unset($accountNumber[$digit][5]);
					unset($accountNumber[$digit][6]);
				}

				if ($char1 !== '|') {
					unset($accountNumber[$digit][0]);
					unset($accountNumber[$digit][4]);
					unset($accountNumber[$digit][5]);
					unset($accountNumber[$digit][6]);
					unset($accountNumber[$digit][8]);
					unset($accountNumber[$digit][9]);
				}
				else {
					unset($accountNumber[$digit][1]);
					unset($accountNumber[$digit][2]);
					unset($accountNumber[$digit][3]);
					unset($accountNumber[$digit][7]);
				}
				break;
			case 3:
				if ($char3 !== '|' ) {
					unset($accountNumber[$digit][3]);
				}
				else {
					unset($accountNumber[$digit][2]);
				}

				if ($char1 !== '|') {
					unset($accountNumber[$digit][6]);
					unset($accountNumber[$digit][8]);
				}
				else {
					unset($accountNumber[$digit][5]);
					unset($accountNumber[$digit][9]);
				}
				break;
			case 4:
				echo 'read line 4'."\n\n";
				//$lineNumber = 1;
				break;

		}

		$digit++;
	}
	$lineNumber++;
}

foreach ($accountNumber as $i => $value) {
	$accountNumber[$i] = reset($value);
}
echo implode('', $accountNumber);