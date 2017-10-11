<?php
try
{
 $user = 'postgres';
 $password = 'Bigdaddy745azzuron';
 $db = new PDO('pgsql:host=127.0.0.1;dbname=scriptures_db', $user, $password);
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
<?php foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row)
       {
           echo '<b>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse']. '</b>';
           echo ' - "' . $row['content'] . '"';            
           echo '<br/>';
       }
       
       ?>
  </p>
</body>
</html>