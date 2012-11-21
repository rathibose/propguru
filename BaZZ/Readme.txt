--------------------------------------------------------------------------------------------
Project	:	Bazz
Version	:	1.1
Author	:	Pandi Rathi
Date	:	21-Nov-2012
--------------------------------------------------------------------------------------------
Installation Notes:
------------------

1. Install web server (LAMP/WAMP)
2. Copy Bazz.php and ajax_bazz.php to the document root
3. Use browser to view Bazz.php

Features common to Version 1.0 
---------------------------------
1. Gets input range from the user
2. Displays all numbers between the specified range but with "Fizz" for multiples of 3 and "Buzz" for multiples of 5
3. Displays "FizzBuzz" replacing numbers which are both multiples of 3 and 5
4. Validations for the input range
	a. Input are integers and not any other characters
	b. Integers are positive
	c. Range is ascending ( Range end > Range Begin)
5. Displays "Bazz" instead of an integer after consecutive Fizzes/Buzzes

Bugs Fixed in Version 1.1
---------------------------

1. Remove leading zeroes in the input field
2. Restrict number of digits in the input field

Assumptions
-------------

1. Webserver and MySQL are running with no issues