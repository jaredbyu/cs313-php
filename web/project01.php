<?php

try{
$dbUrl = getenv('DATABASE_URL');
echo $dbUrl + "<br>";
    
$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

    echo "Other stuff" + $dbHost + " " + $dbUser + " " + dbPassword;
    echo "Db name: " + $dbName;
    
    
    
$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
}
catch (PDOException $ex) {
		// If this were in production, you would not want to echo
		// the details of the exception.
		echo "Error connecting to DB. Details: $ex";
		die();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Virgil's Pizza</title>
</head>

<body>
<div>

<h1>Pizza</h1>

<?php
$sql = $db->prepare("SELECT Name FROM pizza");
$sql->execute();

    echo "Current Pizza";
while ($row = $sql->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	echo '<p>';
    
	echo '<strong>' . $row['Name'];
	echo '</p>';
}

?>


</div>

</body>
</html>