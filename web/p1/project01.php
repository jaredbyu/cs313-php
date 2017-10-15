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
    <a href="project01drinksp.php">Drinks</a>
    <a href="project01dessertp.php">Desserts</a>
    </div>
        
    
</div>
  <input type="button" onclick="location.href='project01.php';" class="home" value="Home"/>
    
    <br>
    <hr>
    <br>
<img style="float:left" src="img/pizza1.jpg" alt ="img/pizza1.jpg" class="img">
     
<img style="float:right" src="img/pizza2.jpg" alt ="img/pizza2.jpg" class="img">
    
<div class="center">We Offer Many Different Types of Pizza, Drinks, and Deserts!</div> 

    <br><br>

    
    
<footer class="footerBot">
        Posted by: Jared Brown
        <strong> NOTE: This Webpage is A fake Pizza Ordering Service</strong>
        
    </footer>
</body>
</html>