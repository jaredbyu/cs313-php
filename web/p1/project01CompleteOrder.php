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


$pizzaname = $_POST['Pizza'];
$cost = 8.00;
$dateofsale = date("Y-m-d");

echo $pizzaname. ' '. $cost .' '.$dateofsale.' '.$customer;

require("dbConnect.php");
$db = get_db();

$query = 'INSERT INTO sales(pizzaname, cost, customer, dateofsale) VALUES(:pizzaname, :cost :customer, :dateofsale)';
$statement = $db->prepare($query);
$statement->bindValue(':pizzaname', $pizzzaname);
$statement->bindValue(':cost', $cost);
$statement->bindValue(':customer', $customer);
$statement->bindValue(':dateofsale', $dateofsale);
$statement->execute();

echo "at the end";
header("Location: project01OrderComplete.php");
die(); 
?>