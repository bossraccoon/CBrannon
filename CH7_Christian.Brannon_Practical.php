<?php
/*
Christian Brannon
ITSE 1306
2017.05.30
Chapter 6 PHP code assignment - Arrays
*/

//------Creating and initializing variables
$text_contents = "";
$ExampleNumber = 5000 / 98;
$timestamp = mktime(11, 45, 00, 07, 04, 1976);
$timestamp2 = mktime(1, 45, 00, 4, 35, 2016);
$string = "My ExampleNumber variable is aa with the bb specifier";
//----I was gonna do an associative array, and use the
//----keys and values, but I couldn't get it to work
$dataSpecifier = array('%b','%c','%d','%e','%o','s','%u','%x','%X');
$dataText = array("binary integer","ASCII Char","signed decimal",
                "scientific notation","octal integer","string specifier",
                "unsigned decimal","lowercase hexadecimal","uppercase hexadecimal");
$text_contents = "<pre>";

/* ABANDONED
$date = date_create('1976-07-04 11:45');
date_time_set($date, 11, 45);
echo date_format($date, 'Y-m-d H:i:s') . "\n";
*/

//-------For loops for specifiers applied to $ExampleNumber
for ($i = 0; $i < count($dataSpecifier); $i++)
    {
        $greeting = str_replace(["aa" , "bb"], [array_values($dataSpecifier)[$i], array_values($dataText)[$i]], $string);
        $text_contents .= sprintf($greeting . "\n", $ExampleNumber);
        echo sprintf($greeting, $ExampleNumber) . '<br>' . PHP_EOL;
    }
for ($i = 0; $i < 6; $i++)
    {
        $greeting = str_replace(["aa" , "bb"], [("'$%010." . $i . "f'"), ($i . " decimal precision")], $string);
        $text_contents .= sprintf($greeting . "\n", $ExampleNumber);
        echo sprintf($greeting, $ExampleNumber) . '<br>' . PHP_EOL;
    }

//-------Three formats for displaying dates
$text_contents .= date("l F jS, Y - g:ia", $timestamp) . "\n";
$text_contents .= date("W", $timestamp) . "\n";
$text_contents .= date("Y.m.d", $timestamp) . "\n";

//-------Checing the timestamps validity
if (checkdate(date("n", $timestamp2), date("j", $timestamp2), date("Y", $timestamp2)) == TRUE)
{
	$text_contents .= "\$timestamp2 ($timestamp2) is a valid date.\n";
	$text_contents .= "mktime will push the extra values (in this case, 5 extra days) to the next possible/legal date\n";
}
else
{
	$text_contents .= "$timestamp2 is NOT a valid date.";
}

$text_contents .= "</pre>";
echo $text_contents;

//-------Creating the HTML file
$file_handle = fopen("CH7_Christian.Brannon_Practical.html", "w") or die("Failed to create file.");
fwrite($file_handle, $text_contents) or die("Could not write to file");
fclose($file_handle);

//-------Pushing commands to the command prompt in Windows to look at the current directory
$cmd = "dir";  //--Could I Do a shutdown command from here?
exec(escapeshellcmd($cmd), $output, $status);

if ($status)
{
	echo "Exec command FAILED";
}
else
{
	$file_handle = fopen("CH7_Christian.Brannon_Practical.html", "a") or die("Failed to create file.");
	echo "<pre>";
	fwrite($file_handle, "<pre>") or die("Could not write to file");
	foreach ($output as $line)
	{
		echo htmlspecialchars("$line\n");
		fwrite($file_handle, htmlspecialchars("$line\n")) or die("Could not write to file");
	}
	echo "</pre>";
	fwrite($file_handle, "</pre>") or die("Could not write to file");
	fclose($file_handle);
}
?>
