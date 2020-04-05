# Query 1: Show all the information for all drivers associated with a particular rescue organization

<!DOCTYPE html>

<html>
<head>
<link href="index.css" rel="stylesheet">
</head>
<body>

<h1>Number of Animals</h1>

<table>

<?php

$hostname="localhost";
$db="SaveTheAnimalsP1Final"; #Change to your database name
$username="root";
$password="";

$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password); 


#Show how many animals were rescued during 2018 (by any rescue organization)
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