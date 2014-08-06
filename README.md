code-kata
=========

A group of Coding Kata that I have worked on from a TDD perspective:

[Roman Numerals](classes/RomanNumerals.php) - A small class to convert a string of roman numerals into digits, digits to roman numerals and can act as a Numeral Calculator [PHPUnit Test Class](tests/RomanNumeralsTest.php)

[OCR](classes/OCR.php) - A class to read in a file of [ASCII numbers](files/accounts.txt) and return them in digits

[FizzBuzz](classes/FizzBuzz.php) - Simple FizzBuzz kata [PHPUnit Test Class](tests/FizzBuzzTest.php)





==============
Roman Numerals
==============

The Romans wrote numbers using the following letters:

I = 1

V = 5

X = 10

L = 50

C = 100

D = 500

M = 1000


Roman numerals are written with each digit seperately starting with the left most digit and combined into a string of characters (for example 3 is expressed as III), however some numbers are represented as a given value before the next number with a letter (for example 9 is 1 before 10 - therefore IX, or 90 is 10 before 100 - therefore XC)

Using the above information, and any other information you have on Roman numerals, complete the tasks below.

1. Create a PHP class "RomanNumerals" that has the function "intToRoman()" to convert any given Roman Numeral string into it's corresponding decimal number. Use the following test cases to make sure that your code is correct.

intToRoman(1) = I

intToRoman(3) = III

intToRoman(8) = VIII

intToRoman(9) = IX

intToRoman(1984) = MCMLXXXIV

intToRoman(59) = LIX

intToRoman(357) = CCCLVII


2. Add another function "romanToInt()" to convert a given decimal number to a Roman Numeral. Use the following test cases to make sure that your code is correct.

romanToInt('VII') = 7

romanToInt('X') = 10

romanToInt('MMV') = 2005

romanToInt('CLXXX') = 180

romanToInt('DI') = 501

3. Finally, create a function "calculate()" that will take in a string containing a calculation of roman numerals and will output the result. Use the following test cases to make sure that your code is correct.

calculate('I + I') = II

calculate('XII * VII') = LXXXIV

calculate('(I + (VI * III) + (C * III) - IV) / III') = CV





==========
OCR Reader
==========

Imagine that you are creating a new machine to assist reading letters and faxes containing digitally printed numbers. These numbers are account numbers, and this machine scans the document to handle some task with the given account number. Each account number is 9 numbers long, and will range from 0-9.

Each entry is 4 lines long, and has 27 characters. The first 3 lines contain the account number written using pipes and underscores, the forth line is blank. A normal file can hold up to 500 entries.

Use the following accounts for testing your code:
    _  _     _  _  _  _  _ 
  | _| _||_||_ |_   ||_||_|
  ||_  _|  | _||_|  ||_| _|

          _        _     _
  |  |  | _|  |  |  |  || |
  |  |  | _|  |  |  |  ||_|
  
    _  _  _  _  _  _     _ 
|_||_|| || ||_   |  |  ||_ 
  | _||_||_||_|  |  |  | _|
  
 _  _  _  _  _  _  _  _  _ 
 _|| || || || || ||_||_|| |
|_ |_||_||_||_||_||_||_||_|
  
    _  _  _  _  _  _     _ 
|_||_|| ||_||_   |  |  ||_ 
  | _||_||_||_|  |  |  | _|
  
Write a PHP Class that will read in a plain text file of the above account numbers and output all lines to the web browser.
