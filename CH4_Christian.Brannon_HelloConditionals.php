<?php
//Written by Christian Brannon

/*
Christian Brannon
ITSE 1306
2017.05.22
Chapter 4 PHP code assignment - Conditionals
*/
	
echo '<pre>';

//-------Assinging and echoing a variable
$studentName = 'Christian Brannon';
echo '$studentName = ' . $studentName . PHP_EOL;

//-------Using the date function and comparing the returned value against a string
$month = date("F");
if ($month == "May")
	echo "We're in the month of May!" . PHP_EOL;
elseif ($month == "June")
	echo "Now we're in the month of June!" . PHP_EOL;
else
	echo "It is neither May, nor June." . PHP_EOL;

//-------Rock, Paper, Scissors game
$handArray = array('Rock', 'Paper', 'Scissors');
shuffle($handArray);
$randHand1 = array_rand($handArray);
$randHand2 = array_rand($handArray);
echo "Let's play a game of Rock, Paper, Scissors! I'll pick for you." . PHP_EOL;
if ($randHand2 == 0)
    echo 'Your play is: Rock' . PHP_EOL;
elseif ($randHand2 == 1)
	echo 'Your play is: Paper' . PHP_EOL;
else
	echo 'Your play is: Scissors' . PHP_EOL;
switch ($randHand1){
	case "0": //Rock
	echo 'Your opponent\'s play is: Rock' . PHP_EOL;
		if ($randHand2 == 0)
			echo '*You bash your rock against your opponents rock. Did you expect something to happen?* (tie)' . PHP_EOL;
		elseif ($randHand2 == 1)
			echo '*You cover the rock with paper as you tell yourself, "Out of sight, out of mind!".* (you win)' . PHP_EOL;
		else
			echo '*You stab the rock in vain, breaking the scissors.* (you lost)' .PHP_EOL;
		break;
	case "1": //Paper
	echo 'Your opponent\'s play is: Paper' . PHP_EOL;
		if ($randHand2 == 0)
			echo '*Your opponent carefully covers your rock in paper, you look at him oddly.* (you lost)' . PHP_EOL;
		elseif ($randHand2 == 1)
			echo '*You both throw the sheets of paper at each other, only to make a mess of paper on the ground* (tie)' . PHP_EOL;
		else
			echo '*You cut up you opponent\'s sheet of paper, now he has to pick up a mess. (you won)*' . PHP_EOL;
		break;
	case "2": //Scissors
	echo 'Your opponent\'s play is: Scissors' . PHP_EOL;
		if ($randHand2 == 0)
			echo '*You smash your opponent\'s favorite scissors. You regrettably feel like a monster* (you win)' . PHP_EOL;
		elseif ($randHand2 == 1)
			echo '*Your opponent cuts your paper into a snowflake. You don\'t like snowflakes.* (you lost)' . PHP_EOL;
		else
			echo '*Stabbing each other with scissors is probably bad.  You play a safe game of scrabble instead* (tie)' . PHP_EOL;
		break;
	default:
		echo "Somehow you broke the program!" . PHP_EOL;
		break;
}
echo '</pre>';

?>