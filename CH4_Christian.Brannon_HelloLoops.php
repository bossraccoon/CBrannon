<?php
//Written by Christian Brannon

/*
Christian Brannon
ITSE 1306
2017.05.22
Chapter 4 PHP code assignment - Loops
*/
	
echo '<pre>';

//-------Assinging and echoing a variable
$studentName = 'Christian Brannon';
echo '$studentName = ' . $studentName . PHP_EOL;

//-------Multiplication tables

//----Muliplying '5' twenty times, increasing by one from zero
$count = 0;
while ($count <= 20){
	echo "$count * 5 = " . $count * 5 . PHP_EOL;
	$count++;}

//----Muliplying '10' twenty times, increasing by one from zero
$count = 0;
do{
	echo "$count * 10 = " . $count * 10 . PHP_EOL;
	$count++;	
}while ($count <= 20);

//----Muliplying '20' twenty times, increasing by one from zero
for ($count = 0; $count <= 20; $count++)
	echo "$count * 20 = " . $count * 20 . PHP_EOL;

echo '</pre>';

?>