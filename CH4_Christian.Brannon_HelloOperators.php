<?php
//Written by Christian Brannon

/*
Christian Brannon
ITSE 1306
2017.05.22
Chapter 4 PHP code assignment - Operators
*/
	
echo '<pre>';

/*
I realize I basically say everything 
twice in comments and echos, but Im 
unsure what would be best
*/

//-------Assigning and echoing to browser
echo 'Assigning and echo-ing to browser' . PHP_EOL;
$StudentName = 'Christian Brannon';
echo '$StudentName = ' . $StudentName . '' . PHP_EOL;

//-------Testing and recieving different boolean expressions
echo PHP_EOL . 'Testing and recieving different boolean expressions' . PHP_EOL;
echo "Boolean Expression #1: " . (7 > 16) . PHP_EOL;
echo "Boolean Expression #2: " . (7 == 6) . PHP_EOL;
echo "Boolean Expression #3: " . (6 == 7) . PHP_EOL;
echo "Boolean Expression #4: " . (7 == 7) . PHP_EOL;

//-------Echo-ing a literal and varaible expression
echo PHP_EOL . 'Echo-ing a literal and varaible expression' . PHP_EOL;
echo "Literal expression (True): " . TRUE . PHP_EOL;
echo "Literal expression (False): " . FALSE . PHP_EOL;
echo "Variable expression: " . $StudentName . PHP_EOL;

//-------Generating three arithmetic numbers
echo PHP_EOL . 'Generating three arithmetic numbers' . PHP_EOL;
$x = (rand(1,100));
$y = (rand(1,100));
while ($y == $x);
	$y = (rand(1,100));
$z = (rand(1,100));
while ($z == $x or $z == $y)
	$z = (rand(1,100));
echo "And your lucky numbers are: " . PHP_EOL . "X = " . $x . PHP_EOL . "Y = " . $y . PHP_EOL . "z = " . $z . PHP_EOL;

//-------Applying the three numbers from before
echo PHP_EOL . 'Applying the three numbers from before' . PHP_EOL;
echo "The three numbers to be used in in PHP operators: X = " . $x . ", Y = " . $y . ", Z = " . $z . PHP_EOL;
echo "Arithmetic (X + Y - Z): " . ($x + $y - $z) . PHP_EOL;
echo "Assignment (X = Y + Z): " . ($x = $y + $z) . PHP_EOL;
echo "Comparison (Z > Y): " . ($z > $y) . PHP_EOL;
echo "Increment And Decrement (++X, --Y): " . ++$x . " / " . --$y . PHP_EOL;
echo "Logical: " . (($x and $y) == ($x + $y)) . PHP_EOL;
echo "String: " . $x . $y . $z . PHP_EOL;

//-------Using relation operators on generated numbers
echo PHP_EOL . 'Using relation operators on generated numbers' . PHP_EOL;

//----X == Y
if ($x == $y)
	echo '$x == $y is TRUE' . PHP_EOL;
else
	echo '$x == $y is FALSE' . PHP_EOL;

//---- Y == Z
if ($y === $z)
	echo '$y === $z is TRUE' . PHP_EOL;
else
	echo '$y === $z is FALSE' . PHP_EOL;

//----
if ($x != $y)
	echo '$x != $y is TRUE' . PHP_EOL;
else
	echo '$x != $y is FALSE' . PHP_EOL;

//----
if ($y !== $z)
	echo '$y !== $z is TRUE' . PHP_EOL;
else
	echo '$y !== $z is FALSE' . PHP_EOL;

//----
if ($x > $y)
	echo '$x > $y is TRUE' . PHP_EOL;
else
	echo '$x > $y is FALSE' . PHP_EOL;

//----
if ($y >= $z)
	echo '$y >= $z is TRUE' . PHP_EOL;
else
	echo '$y >= $z is FALSE' . PHP_EOL;

//----
if ($x < $y)
	echo '$x < $y is TRUE' . PHP_EOL;
else
	echo '$x < $y is FALSE' . PHP_EOL;

//----
if ($y <= $z)
	echo '$y <= $z is TRUE' . PHP_EOL;
else
	echo '$y <= $z is FALSE' . PHP_EOL;

echo '</pre>';
?>