<?php

try{
$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

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
$sql = "SELECT Name FROM pizza";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["Name"]. "<br>";
    }
} else {
    echo "0 results";
}

?>


</div>

</body>
</html>