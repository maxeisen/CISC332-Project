# Query 3: Show the total amount donated for 2018 to a selected organization

<!DOCTYPE html>

<html>
<head>
<link href="index.css" rel="stylesheet">
</head>
<body>

<h1>Query 3: Donations</h1>

<table>

<?php

$hostname="localhost";
$db="SaveTheAnimalsP1Final"; #Change to your database name
$username="root";
$password="";

$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password); 


#Show the total amount donated for 2018 to a selected organization
$rows = $dbh->query("");

echo "<h2>2018 Donations</h2>";

foreach ($rows as $row) {
	echo "<tr><td>".$row[0]."</td></tr>";
}
$dbh = null

?>

</table>

</body>
</html> 