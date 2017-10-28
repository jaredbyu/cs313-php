<?php

session_start();
if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
else
{
     $username = "Guest";
}
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
        </div>
        
    
</div>
    
    <input type="button" onclick="location.href='project01.php';" class="home" value="Home"/>
    <div>Logged In As:
             <?php
             echo $username;
             ?>
         </div>
    <hr>

<br>
  <div>
     <form action="project01CompleteOrder.php" method="POST">
    <table style="width:60%">
  
  <tr>
    <td>Pepperoni</td>
    <td><img class="img" src="img/peppPizza.png" alt="img/peppPizza.png" /></td>
    <td>$8.00</td>
    <td>
      <div class="radio">
                     <label><input type="radio" value="Pepperoni" id='regular' name="Pizza">Order Now</label>
        </div>
    </td>
  </tr>
  <tr>
    <td>Supreme</td>
    <td><img class="img" src="img/supremePizza.jpg" value="Supreme" alt="img/supremePizza.jpg" /></td>
    <td>$8.00</td>
      <td>
      <div class="radio">
                     <label><input type="radio" id='regular' name="Pizza">Order Now</label>
        </div>
    </td>
  </tr>
  <tr>
    <td>Cheese</td>
    <td><img class="img" src="img/cheesePizza.jpg" alt="img/cheesePizza.jpg" /></td>
    <td>$8.00</td>
      <td>
      <div class="radio">
                     <label><input type="radio" id='regular' value="Cheese" name="Pizza">Order Now</label>
        </div>
    </td>
  </tr>
    <tr>
    <td>Sausage</td>
    <td><img class="img" src="img/sausagePizza.jpg" alt="img/sausagePizza.jpg" /></td>
    <td>$8.00</td>
        <td>
      <div class="radio">
                     <label><input type="radio" value="Sausage" id='regular' name="Pizza">Order Now</label>
        </div>
    </td>
  </tr>
</table>  
         
         <button type="submit">Go to Checkout</button>
      </form>
    </div>
 

    <footer class="footerStyle">
        Posted by: Jared Brown
        <strong> NOTE: This Webpage is A fake Pizza Ordering Service</strong>
        
    </footer>
</body>
</html>