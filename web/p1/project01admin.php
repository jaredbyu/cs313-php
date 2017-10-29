<?php

require "dbConnect.php";
$db = get_db();
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
      <div class="loginForm">
     <form action="/action_page.php">
   
    <input type="button" onclick="" class="signbtn" value="Sign In"/>
       <input type="button" onclick="location.href='project01admin.php';" class="signbtn" value="Admin Page"/>
    <input type="button" onclick="location.href='project01P2.php';" class="signbtn" value="Create Account"/>
  </form>
    </div>
    <div class="dropdown">
  <button class="dropbtn">Menu &darr;</button>
  <div class="dropdown-content">
    <a href="project01pizzap.php">Pizza</a>
    </div>
        
    
</div>
  <input type="button" onclick="location.href='project01.php';" class="home" value="Home"/>
    
    <br>
    <div class ="container">
   
           <?php
      
                $total = 0;
                $total_sales = 0;
                $statement = $db->prepare("SELECT cost FROM sales");
                $statement->execute();   
                echo'<strong>Total Sales: </strong>';
                while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                    {

                        $total += $row['cost'];
                        $total_sales++;
                    }
                echo $total_sales, '<br><strong>Profit: $</strong>'. $total;
        
        
            
            $statement = $db->prepare("SELECT * FROM users;");
            $statement->execute();    
        echo "<br><br>Currently Registered Users<br>";
             while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                {

                    echo '<strong>User:</strong> ' . $row['username'];
                    echo '<br>';
                }
        
        
         $statement = $db->prepare("SELECT * FROM users INNER JOIN sales ON (users.username = sales.customer);");
            $statement->execute();    
        echo "<br><br>Recent Purchases<br>";
             while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                {

                    echo '<strong>User:</strong> ' . $row['username']. '<strong>Pizza Type:</strong> '. $row['pizzaname'];
                    echo '<br>';
                }
            
        
            ?>
    </div>
    
 
<footer class="footerBot">
        Posted by: Jared Brown
        <strong> NOTE: This Webpage is A fake Pizza Ordering Service</strong>
        
    </footer>
</body>
</html>