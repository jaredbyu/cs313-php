<?php

session_start();
$badLogin = false;

if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
{
	// they have submitted a username and password for us to check
	$username = $_POST['txtUser'];
	$password = $_POST['txtPassword'];
	// Connect to the DB
	require("dbConnect.php");
	$db = get_db();
	$query = 'SELECT password FROM users WHERE username=:username';
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$result = $statement->execute();
	if ($result)
	{
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['password'];
		
		if (password_verify($password, $hashedPasswordFromDB))
		{
			
			$_SESSION['username'] = $username;
			header("Location: project01.php");
			die(); 
		}
		else
		{
			$badLogin = true;
		}
	}
	else
	{
		$badLogin = true;
	}
}

?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="project01.css">
<head>
	<div class="headerC">

    <div class="dropdown">
  <button class="dropbtn">Menu &darr;</button>
  <div class="dropdown-content">
    <a href="project01pizzap.php">Pizza</a>
        </div>
        
    
</div>
</head>

<body>
<div>


<div class="container">
<h1>Please sign in below:</h1>

<form id="mainForm" action="project01SignIn.php" method="POST">
<?php
if ($badLogin)
{
	echo "Incorrect username or password!<br /><br />\n";
}
?>
	<input type="text" id="txtUser" name="txtUser" placeholder="Username">
	<label for="txtUser">Username</label>
	<br /><br />

	<input type="password" id="txtPassword" name="txtPassword" placeholder="Password">
	<label for="txtPassword">Password</label>
	<br /><br />

	<input type="submit" value="Sign In" />
<br /><br />

Or <a href="project01P2.php">Sign up</a> for a new account.
</form>
    </div>


</div>

</body>
</html>