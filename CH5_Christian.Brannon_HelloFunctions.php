<?php
//Written by Christian Brannon
/*
Christian Brannon
ITSE 1306
2017.05.30
Chapter 5 PHP code assignment - Functions
*/

//-------Importing the HelloClasses file
include_once("CH5_Christian.Brannon_HelloClasses.php");
echo '<pre>';

//-------Using a function made in another file
$studentName = 'CHRistiAN BrAnNOn';
echo 'Student Name = ' . $studentName . PHP_EOL;
echo properizer($studentName) . PHP_EOL;

//-------Creating an object based on classes of different file
$UserObject = new PotentialUser("takua", "p455w0rd", "Christian", "Brannon", "867-5309", "email@address.com", "1600 Pennsylvania Ave NW, Washington, DC 20006");
$EnrolledUserObj = new EnrolledUser("ITSE 1306", "PHP Programming", "William Winans", $UserObject->username, $UserObject->password, $UserObject->firstName, $UserObject->lastName, $UserObject->phoneNumber, $UserObject->emailAddress, $UserObject->physicalAddress);

//----Printing object info
print_r($UserObject);
print_r($EnrolledUserObj);
echo '</pre>';
?>
