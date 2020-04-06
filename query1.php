<!DOCTYPE html>

<html>
<head>
<link href="index.css" rel="stylesheet">
</head>
<body>

<h1>Driver Information</h1>

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

echo "<h2>All Drivers for Rescue Organization <resultValue>$rescueOrganizationID</resultValue></h2>";

if ($result->rowCount() < 1) {
    echo "<br><h2>No results found.</h2>";
}

else if (is_array($result) || is_object($result)) {
    echo "<tr><th>First Name</th><th>Last Name</th><th>Phone Number</th><th>Plate Number</th><th>License Number</th></tr>";
    foreach ($result as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
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