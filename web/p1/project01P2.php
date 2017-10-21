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

<br>
    <div class="container">
    <form action="project01login.php" method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <br>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <br>
    <label for="mname">Middle Name</label>
    <input type="text" id="mname" name="middlename" placeholder="Optional">
        <br>
    <label for="state">State</label>
    <input type="text" id="state" name="state" placeholder="State">
        <br>
        <label for="city">City</label>
    <input type="text" id="city" name="city" placeholder="City">
        <br>
    <p style="font-size:24px;">Address</p>
    <label for="zip">Zip Code</label>
    <input type="text" id="zip" name="zip" placeholder="Zipcode...">    
        <br>
   <p>Street</p>
    <textarea id="street" name="street" placeholder="Your street Here..." style="height:50px"></textarea>
        <br><br>
        <label for="password">Password</label>
    <input type="text" id="password" name="password">
        <br><br>
    <input type="submit" value="Create Account">
  </form>
    </div>
 

<footer class="footerBot">
        
        Posted by: Jared Brown
        <strong> NOTE: This Webpage is A fake Pizza Ordering Service</strong>
        
    </footer>
</body>
</html>