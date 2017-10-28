<?php

session_start();
if (isset($_SESSION['username']))
{
	$customer = $_SESSION['username'];
}
else
{
     $customer = "Guest";
	
}


$pizzaName = $_POST['Pizza'];
$cost = 8;
$dateofsale = date("Y-m-d");

echo $pizzaName. ' '. $cost .' '.$dateofsale.' '.$customer;

require("dbConnect.php");
$db = get_db();

$query = 'INSERT INTO sales(pizzaName, cost, customer, dateofsale) VALUES(:pizzaName, :cost :customer, :dateofsale)';
$statement = $db->prepare($query);
$statement->bindValue(':customer', $customer);
$statement->bindValue(':cost', $cost);
$statement->bindValue(':pizzaName', $pizzaName);
$statement->bindValue(':dateofsale', $dateOfSale);
$statement->execute();

header("Location: project01OrderComplete.php");
die(); 
?>