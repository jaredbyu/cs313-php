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
    <div>
    
    <?php
// In this example, for simplicity, the query is executed
// right here and the data echoed out as we iterate the query.
// You could imagine that in a more involved application, we
// would likely query the database in a completely separate file / function
// and build a list of objects that held the components of each
// scripture. Then, here on the page, we could simply call that 
// function, and iterate through the list that was returned and
// print each component.
// First, prepare the statement
// Notice that we avoid using "SELECT *" here. This is considered
// good practice so we don't inadvertently bring back data we don't
// want, especially if the database changes later.
$statement = $db->prepare("SELECT book, chapter, verse, content FROM scripture");
$statement->execute();
// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	echo '<p>';
	echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':';
	echo $row['verse'] . '</strong>' . ' - ' . $row['content'];
	echo '</p>';
}
?>
    </div>
    
    
<footer class="footerBot">
        Posted by: Jared Brown
        <strong> NOTE: This Webpage is A fake Pizza Ordering Service</strong>
        
    </footer>
</body>
</html>