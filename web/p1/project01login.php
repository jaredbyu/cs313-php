<?php


require "dbConnect.php";
$db = get_db();

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$middleName = $_POST['middlename'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$street = $_POST['street'];
$password = $_POST['password'];
$date = date_default_timezone_get();
$city = $_POST['city'];

try
{
	$query = 'INSERT INTO users(first_name, middle_name, last_name, creation_date, user_password, city, state_province, postal_code, street_address) VALUES(:firstName, :middleName, :lastName, :date, :password, :city, :state, :zip, :street)';
	$statement = $db->prepare($query);
	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
	$statement->bindValue(':firstName', $firstName);
	$statement->bindValue(':middleName', $middleName);
	$statement->bindValue(':lastName', $lastName);
	$statement->bindValue(':date', $date);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':zip', $zip);
    $statement->bindValue(':street', $street);
	$statement->execute();
	// get the new id
	//$scriptureId = $db->lastInsertId("scripture_id_seq");
	// Now go through each topic id in the list from the user's checkboxes
	
}
catch (Exception $ex)
{
	
	echo "Error with DB. Details: $ex";
	die();
}

header("project01.php");
die(); 
?>