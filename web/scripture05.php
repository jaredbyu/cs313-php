<?php
$db = NULL;
	try {
		
		$dbUrl = getenv('DATABASE_URL');
		if (!isset($dbUrl) || empty($dbUrl)) {
			
			$dbUrl = "postgres://ta_user:ta_pass@localhost:5432/scripture_ta";
			
		}
		// Get the various parts of the DB Connection from the URL
		$dbopts = parse_url($dbUrl);
		$dbHost = $dbopts["host"];
		$dbPort = $dbopts["port"];
		$dbUser = $dbopts["user"];
		$dbPassword = $dbopts["pass"];
		$dbName = ltrim($dbopts["path"],'/');
		// Create the PDO connection
		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
		
		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
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
<head>Scripture Resources</head>

<body>
  <p>
<?php foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row)
       {
           echo '<b>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse']. '</b>';
           echo ' - "' . $row['content'] . '"';            
           echo '<br/>';
       }
       
       ?>
  </p>
</body>
</html>