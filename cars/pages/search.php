<?php
$db_hostname = 'localhost';
$db_username = 'u98231_1';
$db_password = '123456789';
$db_database = 'u98231_1';

// Database Connection String
$dbc = mysqli_connect($db_hostname,$db_username,$db_password);
if (!$dbc)
  {
  die('Could not connect: ' . mysqli_error($dbc));
  }

mysqli_select_db($db_database, $dbc);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <meta charset="utf-8" />
        <title>Cargo</title>
    </head>
    <body>
<div class="content">
<div class="container">
  <a href="../index.php">Գլխավոր</a>
  <a href="newspage.php">Նորություններ</a>
  <a href="crashpage.php">Քրաշ-թեստ</a>
  <a href="formu.php">Ֆորում</a>
  <a href="cars.php">Մեքենաներ</a>
    </div>
  </div> 
<div align="center">
<img src="../images/Logomakr_2frzcV.png" class="logo">
</div>

<form action="" method="post">  
Որոնել: <input type="text" name="term" /><br />  
<input type="submit" value="Submit" />  
</form>  

<div class="containerContent" align="center">
<?php
if (!empty($_REQUEST['term'])) {

$term = mysqli_real_escape_string($dbc, $_REQUEST['term']);     

$sql = "SELECT * FROM car WHERE name LIKE '%".$term."%'"; 
$r_query = mysqli_query($dbc, $sql); 

while ($row = mysql_fetch_array($r_query)){  
?>
<img src="<?php echo $row['img'] ?>" alt="<?php echo $row['name'] ?>" class="imageSearch">
<?php
echo "<br>";
echo "<a href='". 'http://onlineshop:82/pages/page.php?id=' .$row['id']."' id='atextSearch'>".$row['name'] . ' ' . $row['model'] . "</a>"."<br>"; 

}  

}
?>

    </body>
</html>