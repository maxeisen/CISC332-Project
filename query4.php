# Query 4: Show the animals that went from the SPCA directly to a shelter (ie. they did not go through the rescue organization)

<!DOCTYPE html>

<html>
<head>
<link href="index.css" rel="stylesheet">
</head>
<body>

<h1>Query 4: Direct Animals</h1>

<table>

<?php

$hostname="localhost";
$db="SaveTheAnimalsP1Final"; #Change to your database name
$username="root";
$password="";

$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password); 


#Show the animals that went from the SPCA directly to a shelter (ie. they did not go through the rescue organization)
$rows = $dbh->query("");

echo "<h2>Animals SPCA->Shelter</h2>";

foreach ($rows as $row) {
	echo "<tr><td>".$row[0]."</td></tr>";
}
$dbh = null

?>

</table>

</body>
</html> 