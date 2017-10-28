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
    <label for="username">Username</label>
    <input type="text" id="username" name="username">
        <br>
    <label for="password">Password:</label>
    <input type="text" id="password" name="password">
         <br>
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
    hi
        <button onclick="document.write('<?php showSales(); ?>');">Show Sales</button>
    <div id="showSales">
        test
           <?php
        function showSales(){
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
                echo $total_sales, '<br><strong>Profit: </strong>'. $total;
        }
        
        function showUsers(){
            
            $statement = $db->prepare("SELECT username FROM users");
            $statement->execute();    
        
             while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                {

                    echo '<strong>User: ' . $row['username'];
                    echo '</strong>';
                    echo '<br>';
                }
            
        }
            ?>
        </div>
        
        
        <button onclick="document.write('<?php showUsers(); ?>')">Show Users</button>
        <div id="showUsers">
   
            </div>
       
        
    
    </div>
    
    <script>
function myFunction(var div) {
    var x = document.getElementById("showSales");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
        
        function showUsers() {
    var x = document.getElementById("showUsers");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
<footer class="footerBot">
        Posted by: Jared Brown
        <strong> NOTE: This Webpage is A fake Pizza Ordering Service</strong>
        
    </footer>
</body>
</html>