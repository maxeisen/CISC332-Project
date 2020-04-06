<!DOCTYPE html>

<html>
<head>
<link href="index.css" rel="stylesheet">
</head>
<body>

<h1>SPCA->Shelter Animals</h1>

<table>

<?php

$hostname="localhost";
$db="MAHAnimalServices"; #Must be MAHAnimalServices
$username="root";
$password="";

$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password); 

$sqlQuery="SELECT animalID, origin, destination FROM animalTransport WHERE (origin IN (SELECT phoneNumber FROM spcaBranch)) AND (destination IN (SELECT phoneNumber FROM shelter))";

#Show the animals that went from the SPCA directly to a shelter (ie. they did not go through the rescue organization)
$result = $dbh->query($sqlQuery);

if ($result->rowCount() < 1) {
    echo "<br><h2>No results found.</h2>";
}

else if (is_array($result) || is_object($result)) {
    echo "<h2>Animals Transported From an SPCA Branch Directly to a Shelter</h2>";
    echo "<tr><th>Animal ID</th><th>Origin (SPCA)</th><th>Destination (Shelter)</th></tr>";
    foreach ($result as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
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