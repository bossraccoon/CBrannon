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
$MyFavQuote = "What're you gonna do, stab me? -- Man who was stabbed";
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
        '3 Ribeye Steaks' => "$31.43 for 3.5lbs @ 8.98 per lbs",
        '1 90/10 Ground Beef Pkg' => "$16.99 for 5.7lbs @ $2.98 per lbs",
        '1 Pork Loin' => "$22.56 for 12lbs @ $1.88 per lbs"),
    'Dairy' => array(
        'Whole Milk' => "1 gal for $2.46",
        'Shredded Cheese' => "5lbs for $11.98",
        'Eggs' => "15 Dozen for $9.57"),
    'Produce' => array(
        'Strawberries' => "2lbs for $2.98",
        'Asparagus' => "2lbs for $6.48",
        'Oranges' => "10lbs for $9.48"));
echo "Multidimensional Array: " . PHP_EOL;
print_r($grocery_list);

echo '</pre>';
?>
