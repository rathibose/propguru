--------------------------------------------------------------------------------------------
Project	:	FizzBuzz
Version	:	1.2
Author	:	Pandi Rathi
Date	:	21-Nov-2012
--------------------------------------------------------------------------------------------
Pre-Requisites:
---------------

1. Install web server (LAMP/WAMP)
2. Copy fizzbuzz.php and ajax.php to the document root

Features common to version 1.0
--------------------------------
1. Gets input range from the user
2. Displays all numbers between the specified range but with "Fizz" for multiples of 3 and "Buzz" for multiples of 5

New Features in Version 1.1
-----------------------------
1. Validations for the input range
	a. Input are integers and not any other characters
	b. Integers are positive
	c. Range is ascending ( Range end > Range Begin)
	
2. Displays "FizzBuzz" replacing numbers which are both multiples of 3 and 5

Bugs Fixed in Version 1.2
---------------------------

1. Remove leading zeroes in the input field
2. Restrict number of digits in the input field

Assumptions:
-------------

1. Webserver and Mysql are running with no issues
2. Browser is made to view fizzbuzz.php in the document root