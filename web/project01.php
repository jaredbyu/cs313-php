<?php


$dbUrl = getenv('DATABASE_URL');
echo $dbUrl . "<br>";
    
$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"],'/');

    echo "Host " . $dbHost . "<br> User " . $dbUser . "<br>Pass: " . dbPassword;
    echo "Db name: " . $dbName . "<br>";
    
    
    
$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);


$db = mysql_connect();

if(is_reasource($db)){
    echo "Connected";
}else
    echo "Not connected";
    

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