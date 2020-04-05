# Query 1: Show all the information for all drivers associated with a particular rescue organization

<!DOCTYPE html>

<html>
<head>
<link href="index.css" rel="stylesheet">
</head>
<body>

<h1>Query 1: Drivers</h1>

<table>

<?php

$hostname="localhost";
$db="SaveTheAnimalsP1Final"; #Change to your database name
$username="root";
$password="";

$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password); 

$rescueOrganizationID=$_POST["rescueOrganizationID"];

$sqlQuery="SELECT * FROM Driver WHERE rescueOrgID = $rescueOrganizationID";

#Show all the information for all drivers associated with a particular rescue organization
$result = $dbh->query($sqlQuery);

echo "<h2>All drivers for rescue organization ".$rescueOrganizationID."</h2>";
echo "<tr><th>First Name</th><th>Last Name</th><th>Phone Number</th><th>Plate Number</th><th>License Number</th></tr>";

foreach ($result as $row) {
    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
}
$dbh = null

?>

</table>

</body>
</html> 