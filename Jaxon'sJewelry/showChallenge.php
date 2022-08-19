<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Participants List</title>

</head>
<body>

</body>
</html>

<?php
//These statements connect to MySql.
$DBConnect = @mysqli_connect("localhost", "root", "root")
Or die("<p>Unable to connect to the database server.</p>"
    . "<p>Error code " . mysqli_connect_errno() . ": " . mysqli_connect_error()) . "</p>";

//this connects to the JaxonJewelry database
$DBName = "JaxonJewelry";
if(!@mysqli_select_db($DBConnect, $DBName))
    die("<p>There are no entries in the guest book!</p>");

//this selects all the records from the participants table and prints a message if there are no entries.
$TableName = "participants";
$SQLstring = "SELECT * FROM $TableName";
$QueryResult = @mysqli_query($DBConnect, $SQLstring);
if (mysqli_num_rows($QueryResult) == 0)
    die("<p>There are no entries in the guest book!</p>");

//this sets a current date as a variable that automatically updates and a corresponding message
$todayDate = date ('m/d/Y');

echo "<p>As of today, $todayDate, the following participants have registered:</p>";

//this formats the table header and prints the records returned from the participant table
echo "<table width='100%' border='1'>";
echo "<tr><th>Name</th><th>Phone</th><th>DOB</th><th>Area Code</th><th>Eligible</th><th>Birth Month</th><th>Birth Stone</th></tr>";
$Row = mysqli_fetch_assoc($QueryResult);

//this is a two-dimensional array that indexes the month with the corresponding birthstone.
$JanuaryRow = array("January", "Garnet");
$FebruaryRow = array("February", "Amethyst");
$MarchRow = array("March", "Aquamarine");
$AprilRow = array("April", "Diamond");
$MayRow = array("May", "Emerald");
$JuneRow = array("June", "Pearl");
$JulyRow = array("July", "Ruby");
$AugustRow = array("August", "Peridot");
$SeptemberRow = array("September", "Sapphire");
$OctoberRow = array("October", "Opal");
$NovemberRow = array("November", "Topaz");
$DecemberRow = array("December", "Tanzanite");

$Birthstone = array($JanuaryRow, $FebruaryRow, $MarchRow, $AprilRow, $MayRow, $JuneRow, $JulyRow, $AugustRow, $SeptemberRow, $OctoberRow, $NovemberRow, $DecemberRow);

//this is a do loop that includes variables that pull substrings from both the phone number for the area code and the dob for the birth month.
//the loop takes the query result in a $Row variable and inserts it into a table with appropriate row headers.
do {
    $phone = $Row['phone_number'];
    $phone = substr($phone, 0, 3);
    $birthdate = $Row['dob'];
    $month = substr($birthdate, 5, 2);

    echo "<tr><td>{$Row['first_name']} {$Row['last_name']}</td>";
    echo "<td>{$Row['phone_number']}</td>";
    echo "<td>{$Row ['dob']}</td>";
    echo "<td>$phone</td>";
    //this statement uses the substring pulled from phone_number area code and echo's yes or no if == 325, indicating eligibility.
    if ($phone == '325') {
       echo "<td>Yes</td>";
    }
      else {
          echo "<td>No</td>";
    }
    //the $Birthstone variable subtracts one from the $month variable to make the array rows correspond with the month numbers (makes it start at 1 instead of 0, so that January corresponds with 1 rather than 0).
    echo "<td>";
    echo $Birthstone [$month -1] [0];
    echo "</td><td>";
    echo $Birthstone [$month -1] [1];
    echo "</td></tr>";

    $Row = mysqli_fetch_assoc($QueryResult);
} while ($Row);

//statements that close the database connection and the result pointer
mysqli_free_result($QueryResult);
mysqli_close($DBConnect);

?>

