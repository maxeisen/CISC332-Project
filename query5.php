<!DOCTYPE html>

<html>
<head>
<link href="index.css" rel="stylesheet">
</head>
<body>

<h1>2018 Rescued Animals</h1>

<?php

$hostname="localhost";
$db="SaveTheAnimalsP1Final"; #Change to your database name
$username="root";
$password="";

$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password); 


#Show how many animals were rescued during 2018 (by any rescue organization)
$result = $dbh->query("SELECT count(animalID) FROM animalTransport WHERE destination IN (SELECT phoneNumber FROM rescueOrganization) AND year(transportDate) = 2018");

if ($result->rowCount() < 1) {
    echo "<h2>No results found.</h2>";
}

if (is_array($result) || is_object($result)) {
    foreach ($result as $row) {
        echo "<h2>There were <resultValue>".$row[0]."</resultValue> animals rescued in 2018.</h2>";
    }
}
$dbh = null

?>

<a href="/cisc332-project">
    <button>Back</button>
</a>

</body>
</html> 