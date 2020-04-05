# Query 2: For a particular donor, show which organizations they donated to and the total amount donated (over their lifetime)

<!DOCTYPE html>

<html>
<head>
<link href="index.css" rel="stylesheet">
</head>
<body>

<h1>Query 2: Donors</h1>

<table>

<?php

$hostname="localhost";
$db="SaveTheAnimalsP1Final"; #Change to your database name
$username="root";
$password="";

$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);

$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];

$sqlQuery="SELECT organizationName, SUM(valueDonated) AS totalDonated FROM donatesTo JOIN organization WHERE orgPhoneNumber = phoneNumber AND (donorFirstName = \"$firstName\" AND donorLastName = \"$lastName\") GROUP BY orgPhoneNumber";

#For a particular donor, show which organizations they donated to and the total amount donated (over their lifetime)
$result = $dbh->query($sqlQuery);

echo "<h2>Donations</h2>";
echo "<tr><th>Organization Name</th><th>Total Amount Donated</th></tr>";

if (is_array($result) || is_object($result)) {
    foreach ($result as $row) {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
}
$dbh = null

?>

</table>

</body>
</html> 