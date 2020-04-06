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
$db="SaveTheAnimalsP1Final"; #Change to your database name
$username="root";
$password="";

$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);

$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];

$sqlQuery="SELECT organizationName, SUM(valueDonated) FROM donatesTo JOIN organization WHERE orgPhoneNumber = phoneNumber AND (donorFirstName = \"$firstName\" AND donorLastName = \"$lastName\") GROUP BY orgPhoneNumber";

#For a particular donor, show which organizations they donated to and the total amount donated (over their lifetime)
$result = $dbh->query($sqlQuery);

echo "<h2>Donations Made by <resultValue>$firstName $lastName</resultValue></h2>";

if ($result->rowCount() < 1) {
    echo "<br><h2>No results found.</h2>";
}

else if (is_array($result) || is_object($result)) {
    echo "<tr><th>Organization Name</th><th>Total Amount Donated</th></tr>";
    foreach ($result as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
}

$dbh = null

?>

</table>
<br>

<a href="/cisc332-project">
    <button>Back</button>
</a>

</body>
</html> 