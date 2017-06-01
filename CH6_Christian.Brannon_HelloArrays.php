<?php

//Written by Christian Brannon

/*
Christian Brannon
ITSE 1306
2017.05.30
Chapter 6 PHP code assignment - Arrays
*/

echo '<pre>';

//-------Favorite Quote
$MyFavQuote = "What're you gonna do, stab me? --Man who was stabbed";
echo "Favorite Quote: " . $MyFavQuote . PHP_EOL;

//-------Array Creation
//----Indexed Array
$user[0] = "Cbrannon";
$user[1] = "Christian Brannon";
$user[2] = "p455w0rd";
$user[2] = "903-555-1212";
$user[3] = "cabrannon54955@mymail.tstc.edu";
$user[4] = "2650 S East End Blvd., Marshall, TX 75670";
echo "Indexed Array: " . PHP_EOL;
print_r($user);

//----Associative Array
$class['ClassName'] = "ITSE 1306";
$class['ClassSubject'] = "PHP Programming";
$class['InstructorName'] = "Will Winans";
echo "Associative Array: " . PHP_EOL;
print_r($class);

//----Multidimensional Array
$grocery_list = array(
    'Meats' => array(
        'Three Ribeye Steaks',
        'One 10 lb chub of 90/10 Ground Beef Pkg',
        'One 12 lb Pork Loin'),
    'Dairy' => array(
        '1 gal Whole Milk',
        '5 lbs Shredded Cheese',
        'Two 12 dozen Eggs'),
    'Produce' => array(
        '2 lbs of Strawberries',
        '3 lbs of Asparagus',
        '2 lbs of Oranges'));
echo "Multidimensional Array: " . PHP_EOL;
print_r($grocery_list);

//-------For loops and sorting
echo "For loop of User Info" . PHP_EOL;
for($i = 0; $i < count($user); $i++)
{
	echo '$user[' . $i . '] = ' . $user[$i] . '<br>' . PHP_EOL;
}
echo "For loop for class info of the User" . PHP_EOL;
$j = 0;
foreach($class as $item)
{
	echo '$class[' . $j . '] = ' . $item . '<br>' . PHP_EOL;
	$j++;
}
echo "Nested foreach loop to display the grocery_list array" . PHP_EOL;
foreach($grocery_list as $label => $department)
{
	echo '$department = ' . $label . '<br>' . PHP_EOL;
	$j++;
	foreach($department as $item)
	{
		echo '$item = ' . $item . '<br>' . PHP_EOL;
	}
}
asort($grocery_list, SORT_REGULAR);
echo "Nested foreach loop to display the grocery_list array after it has been sorted" . PHP_EOL;
foreach($grocery_list as $label => $department)
{
	echo '$department = ' . $label . '<br>' . PHP_EOL;
	$j++;
	foreach($department as $item)
	{
		echo '$item = ' . $item . '<br>' . PHP_EOL;
	}
}

//-------Explode function
$MyFavQuote = explode('--', $MyFavQuote);
print_r($MyFavQuote);

echo '</pre>';
?>
