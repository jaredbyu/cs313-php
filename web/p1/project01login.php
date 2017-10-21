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
$city = $_POST['city'];

echo $firstName . $lastName . ' ' . $state . ' ' . $street. $password. "    ";

try
{
	$query = 'INSERT INTO users(first_name, middle_name, last_name, user_password, city, state_province, postal_code, street_address) VALUES(:firstName, :middleName, :lastName, :password, :city, :state, :zip, :street)';
	$statement = $db->prepare($query);
	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
	$statement->bindParam(':first_name', $firstName);
	$statement->bindParam(':middle_name', $middleName);
	$statement->bindParam(':last_name', $lastName);
    $statement->bindParam(':user_password', $password);
    $statement->bindParam(':city', $city);
    $statement->bindParam(':postal_code', $zip);
    $statement->bindParam(':street_address', $street);
	$statement->execute();
	// get the new id
	//$scriptureId = $db->lastInsertId("scripture_id_seq");
	// Now go through each topic id in the list from the user's checkboxes
	echo $firstName . $lastName . ' ' . $state . ' ' . $street. $password. "    ";
}
catch (Exception $ex)
{
	
	echo "Error with DB. Details: $ex";
	die();
}

//header("project01.php");
//die(); 
echo "  End of php  ";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Virgil's Pizza</title>
    <link rel="stylesheet" type="text/css" href="project01.css">
    
</head>

<body>
<div class="headerC">

<h1>Virgil's Pizza</h1>
    <div class="dropdown">
  <button class="dropbtn">Menu &darr;</button>
  <div class="dropdown-content">
    <a href="project01pizzap.php">Pizza</a>
    <a href="project01drinksp.php">Drinks</a>
    <a href="project01dessertp.php">Desserts</a>
        </div>
        
    
</div>
    
    <input type="button" onclick="location.href='project01.php';" class="home" value="Home"/>
    
    <hr>

<strong>Thankyou for creating an account with us today</strong>
 

<footer class="footerBot">
        
        Posted by: Jared Brown
        <strong> NOTE: This Webpage is A fake Pizza Ordering Service</strong>
        
    </footer>
</body>
</html>