<!doctype html>

<html lang="en">
<head>
    <title>Birthstone Challenge Sign Up</title>
    <meta charset="utf-8">
</head>
<body>


</body>
</html>

<?php
//this uses the global $_GET to determine if the first or last name fields are empty and if so, sends a message to the user to enter the data
if (empty($_GET['first_name']) || empty($_GET['last_name']))
    die("<p>You must enter your first and last name!  Click your back button to return to the Birthstone Challenge page. 
form.</p>");

//this function and statement formats the date entered into a YYYY-mm-dd format and validates that it's entered correctly
function checkDateTime($data) {
    if (date('Y-m-d', strtotime($data)) == $data) {
        return true;
    } else {
        return false;
    }
}
//this uses the global $_GET to determine if the date of birth field is empty and if so, sends a message to the user to enter the data
//it also validates that the information was entered in the correct format
if (empty($_GET['dob']))
    die("<p>You must enter your date of birth (YYYY-MM-DD)!  Click your back button to return to the Birthstone Challenge page.</p>");

if (isset($_GET['submit'])) {
    if (!checkDateTime($_GET['dob']))
        die ("<p>Please input YYYY-MM-DD. Click your back button to return to the Birthstone Challenge page.</p>");

    else {
        $dob = $_GET['dob'];
        $valid_dob = str_replace("-", "", $dob);
        $valid_dob = str_replace(" ", "", $valid_dob);
        $valid_dob = str_replace("/", "", $valid_dob);
        if (strlen($valid_dob) !== 8)
            echo "<br>Please enter a valid birthdate. Click your back button to return to the Birthstone Challenge page.";

    }

    //this statement uses $_GET to pull the phone number from the form entry and validates it or sends a message
    //asking the user to enter the number, using the correct format
    if (empty($_GET['pnumber']))
        die ("<br>Please enter your mobile phone number. Click your back button to return to the Birthstone Challenge page.");
    else {

       $phone = $_GET['pnumber'];

        if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)) {
            die ("<br>Please enter your mobile phone number in 999-999-9999 format.  Click your back button to return to the Birthstone Challenge page.");
        }
    }
}

//These statements connect to MySql.
$DBConnect = @mysqli_connect("localhost", "root", "root" )
Or die("<p>Unable to connect to the database server.</p>"
    . "<p>Error code " . mysqli_connect_errno()
    . ": " . mysqli_connect_error()) . "</p>";

//this connects to the JaxonJewelry database
$DBName = "JaxonJewelry";
if(!@mysqli_select_db($DBConnect, $DBName)) {
    $SQLstring = "CREATE DATABASE $DBName";
    $QueryResult = @mysqli_query($DBConnect, $SQLstring)
    Or die("<p>Unable to execute the query.</p>"
        . "<p>Error code " . mysqli_errno($DBConnect)
        . ": " . mysqli_error($DBConnect)) . "</p>";
    echo "<p>You are the first visitor!</p>";
    mysqli_select_db($DBConnect, $DBName);
}

//this selects all the records from the participants table or creates one if it doesn't exist, and prints a message if there are no entries or an error.
$TableName = "participants";
$SQLstring = "SELECT * FROM $TableName";
$QueryResult = @mysqli_query($DBConnect, $SQLstring);
if (!$QueryResult) {
    $SQLstring = "CREATE TABLE $TableName (countID SMALLINT
NOT NULL AUTO_INCREMENT PRIMARY KEY,
last_name VARCHAR(40), first_name VARCHAR(40), dob DATE, phone_number VARCHAR(30))";
    $QueryResult = @mysqli_query($DBConnect, $SQLstring)
    or die("<p>Unable to create the table.</p>"
        . "<p>Error code " . mysqli_errno($DBConnect)
        . ": " . mysqli_error($DBConnect)) . "</p>";
}

//these statements add the data to the database or sends an error message, and the last statement closes the database connection.
$Lastname = addslashes($_GET['last_name']);
$Firstname = addslashes($_GET['first_name']);
$Birthdate = addslashes($_GET['dob']);
$Phonenumber = addslashes($_GET['pnumber']);
$SQLstring = "INSERT INTO $TableName VALUES(NULL, '$Lastname', '$Firstname', '$Birthdate', '$Phonenumber')";
$QueryResult = @mysqli_query($DBConnect, $SQLstring)
or die("<p>Unable to execute the query.</p>"
    . "<p>Error code " . mysqli_errno($DBConnect)
    . ": " . mysqli_error($DBConnect)) . "</p>";
echo "<h1>Hello $Firstname! Thank you for signing up for the Birthstone Challenge!</h1>";
mysqli_close($DBConnect);

?>