<!DOCTYPE html>

<html>
<head>
<link href="index.css" rel="stylesheet">
</head>
<body>

<h1>Hello, friend.</h1>
<p>Hi there. Welcome to Animal Rescue, bitch!</p>
<body>
<h1> Max hates me </h1>
</body>

<table>
<tr><th>Number of Animals</th></tr>

<?php

$hostname="localhost";
$db="SaveTheAnimalsP1Final"; #Change to your database name
$username="root";
$password="";

$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password); 

$rows = $dbh->query("SELECT count(animalID) FROM animalTransport WHERE destination IN (SELECT phoneNumber FROM rescueOrganization) AND year(transportDate) = 2018");

echo "<h2>2018 Animals</h2>";

foreach ($rows as $row) {
	echo "<tr><td>".$row[0]."</td></tr>";
}
$dbh = null

?>

</table>

</body>
</html> 