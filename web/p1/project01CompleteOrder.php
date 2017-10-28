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
$cost = 8.25;
$dateofsale = date("Y-m-d");

echo $pizzaname. ' '. $cost .' '.$dateofsale.' '.$customer. ' ';

require("dbConnect.php");
$db = get_db();
$query = 'INSERT INTO sales(pizzaname, cost, customer) VALUES(:pizzaname, :cost, :customer)';
$statement = $db->prepare($query);
$statement->bindValue(':pizzaname', $pizzaname);
$statement->bindValue(':cost', $cost);
$statement->bindValue(':customer', $customer);
//$statement->bindValue(':dateofsale', $dateofsale);

$result = $statement->execute();
if($result){
    echo "it worked! <br>";
}else{
    echo "<br>Execute failed";
}

echo "at the end";
header("Location: project01OrderComplete.php");
die(); 
?>