# Query 3: Show the total amount donated for 2018 to a selected organization

<!DOCTYPE html>

<html>
<head>
<link href="index.css" rel="stylesheet">
</head>
<body>

<h1>Query 3: Donations</h1>

<?php

$hostname="localhost";
$db="SaveTheAnimalsP1Final"; #Change to your database name
$username="root";
$password="";

$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password); 

$rescueOrganizationID=$_POST["rescueOrganizationID"];

$sqlQuery="SELECT SUM(valueDonated), organizationName FROM donatesTo JOIN organization WHERE orgPhoneNumber = $rescueOrganizationID AND orgPhoneNumber = phoneNumber AND year(dateDonated) = 2018 group by orgPhoneNumber";

#Show the total amount donated for 2018 to a selected organization
$result = $dbh->query($sqlQuery);

if (is_array($result) || is_object($result)) {
    foreach ($result as $row) {
        echo "<h2>The total amount donated to ".$row[1]." in 2018 was $".$row[0]."</h2>";
    }
}

$dbh = null

?>

<br>

<a href="/cisc332-project">
    <button>Back</button>
</a>

</body>
</html> 