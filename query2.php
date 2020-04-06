<!DOCTYPE html>

<html>
<head>
<link href="index.css" rel="stylesheet">
</head>
<body>

<h1>All Donations Made by Specific Donor</h1>

<table>

<?php

$hostname="localhost";
$db="MAHAnimalServices"; #Must be MAHAnimalServices
$username="root";
$password="";

$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);

$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];

$sqlQuery="SELECT organizationName, SUM(valueDonated) FROM donatesTo JOIN organization WHERE orgPhoneNumber = phoneNumber AND (donorFirstName = \"$firstName\" AND donorLastName = \"$lastName\") GROUP BY orgPhoneNumber";

#For a particular donor, show which organizations they donated to and the total amount donated (over their lifetime)
$result = $dbh->query($sqlQuery);

if (!$result || $result->rowCount() < 1) {
    echo "<br><h2>No results found.</h2>";
}

else if (is_array($result) || is_object($result)) {
    echo "<h2>Donations Made by <resultValue>$firstName $lastName</resultValue></h2>";
    echo "<tr><th>Organization Name</th><th>Total Amount Donated</th></tr>";
    foreach ($result as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
}

$dbh = null

?>

</table>
<br>

<div align="center">
    <a href="/cisc332-project">
        <button>Back</button>
    </a>
</div>

</body>
</html> 