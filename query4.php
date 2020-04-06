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

$sqlQuery="SELECT animalID, origin, destination FROM animalTransport WHERE (origin IN (SELECT phoneNumber FROM spcaBranch)) AND (destination IN (SELECT phoneNumber FROM shelter))";

#Show the animals that went from the SPCA directly to a shelter (ie. they did not go through the rescue organization)
$result = $dbh->query($sqlQuery);

echo "<h2>Animals Transported From an SPCA Branch Directly to a Shelter</h2>";
echo "<tr><th>Animal ID</th><th>Origin (SPCA)</th><th>Destination (Shelter)</th></tr>";

if (is_array($result) || is_object($result)) {
    foreach ($result as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
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