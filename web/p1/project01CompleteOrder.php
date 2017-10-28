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

echo $pizzaname. ' '. $cost .' '.$dateofsale.' '.$customer. ' ';

require("dbConnect.php");
$db = get_db();
echo "after db connect ";
$query = 'INSERT INTO sales(pizzaname, cost, customer, dateofsale) VALUES(:pizzaname, :cost :customer, :dateofsale)';
echo "after insert into query ";
$statement = $db->prepare($query);
echo "after prepare query";
$statement->bindValue(':pizzaname', $pizzaname);
echo " after bind pizza name ";
$statement->bindValue(':cost', $cost);
$statement->bindValue(':customer', $customer);
$statement->bindValue(':dateofsale', $dateofsale);
echo "before execute ";

if($statement->execute()){
    echo "it worked! <br>";
}else{
    echo "<br>Execute failed";
}

echo "at the end";
header("Location: project01OrderComplete.php");
die(); 
?>