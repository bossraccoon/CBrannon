<?php
//Written by Christian Brannon
/*
Christian Brannon
ITSE 1306
2017.05.18
Chapter 3 PHP code assignment
*/
echo '<pre>';

//------- Echo "Hello World" to browser.

echo 'Hello World' . PHP_EOL;

//------- Creating, and echoing a 3 dimensional array.

$array3x3 = array(array(1994, 1995, 1996),
				  array(1997, 1998, 1999),
				  array(2000, 2001, 1002));
				  
echo '$Array3x3[1][1] = ' . $array3x3[1][1] . PHP_EOL;

//------- Creating and echoing a double quote variable.

$DoubleQuoteVar = "String in double quotes.";

echo '$DoubleQuoteVar = ' . $DoubleQuoteVar . PHP_EOL;

//------- Creating and echoing a variable and using "substr()" function.

$studentName = 'Christian Brannon';

echo "Student Name: " . $studentName . PHP_EOL;

echo 'substr($studentName, 0, 5) = ' . substr($studentName, 0, 5) . PHP_EOL;

//------- Creating variables, echoing variables, and applying math to those variables.

$num1 = 17;

$num2 = 25;

echo '$num1 = ' . $num1 . PHP_EOL;

echo '$num2 = ' . $num2 . PHP_EOL;

echo $num1 . ' / ' . $num2 . ' = ' . ($num1 / $num2) . PHP_EOL;

//------- Echoing the current time in "ISO 8601 date" formatting.

echo 'date("r", time()) = ' . date("r", time()) .PHP_EOL;

echo '</pre>';
?>
