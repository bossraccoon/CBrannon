<?php
//Written by Christian Brannon
/*
Christian Brannon
ITSE 1306
2017.05.30
Chapter 5 PHP code assignment - Classes
*/
echo '<pre>';
//-------Proper casing for a variable
function properizer($x)
{
	$x = ucwords(strtolower($x));
	echo "Running Properizer Function.... Returned Variable: " . $x . PHP_EOL;
}

//-------Classes for creating a student

//----The class that initializes the object of a student with basic info
class PotentialUser
{
	//--Public variables of the object
	public $username 		= 'Username';
	public $password		= 'Password';
	public $firstName		= 'First Name';
	public $lastName		= 'Last Name';
	public $emailAddress	= 'Email Address';
	public $phoneNumber		= 'Phone Number';
	public $physicalAddress = 'Physical Address';

	//--Constructor method for object
	function __construct($username, $password, $firstName, $lastName, $emailAddress, $phoneNumber, $physicalAddress)
	{
		$this->username 	   = $username;
		$this->password		   = $password;
		$this->firstName 	   = $firstName;
		$this->lastName 	   = $lastName;
		$this->emailAddress    = $emailAddress;
		$this->phoneNumber 	   = $phoneNumber;
		$this->physicalAddress = $physicalAddress;
	}
}

//----An extension of the PotentianUser class to include school class info
class EnrolledUser extends PotentialUser
{
	//--Public variables of the object
	public $className	   = 'Class Name';
	public $classSubject   = 'Class Subject';
	public $InstructorName = 'Instructors Name';

	//--Constructor method for the object
	function __construct($className, $classSubject, $InstructorName, $username, $password, $firstName, $lastName, $phoneNumber, $emailAddress, $physicalAddress)
	{
		$this ->className 	   = $className;
		$this ->classSubject   = $classSubject;
		$this ->InstructorName = $InstructorName;
		//--Using the parent class constructor
		parent::__construct($username, $password, $firstName, $lastName, $phoneNumber, $emailAddress, $physicalAddress);
	}
}
echo '</pre>';
?>
