<?php
try
{
 $user = 'postgres';
 $password = 'Bigdaddy745azzuron';
 $db = new PDO('pgsql:host=127.0.0.1;scriptures_db=myTestDB', $user, $password);
}
catch (PDOException $ex)
{
 echo 'Error!: ' . $ex->getMessage();
 die();
}
?>

<!DOCTYPE html>
<html>
<head>Scripture Resources</head>

<body>
  <p>

  </p>
</body>
</html>