<?php

require("password.php");


$username = $_POST['txtUser'];
$password = $_POST['txtPassword'];
if (!isset($username) || $username == ""
	|| !isset($password) || $password == "")
{
	header("Location: project01P2.php");
	die(); // we always include a die after redirects.
}

$username = htmlspecialchars($username);
// Get the hashed password.
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
// Connect to the database
require("dbConnect.php");
$db = get_db();
$query = 'INSERT INTO users(username, password) VALUES(:username, :password)';
$statement = $db->prepare($query);
$statement->bindValue(':username', $username);

$statement->bindValue(':password', $hashedPassword);
$statement->execute();

header("Location: project01SignIn.php");
die(); 
?>