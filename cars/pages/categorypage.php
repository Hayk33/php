<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <meta charset="utf-8">
  <link rel="shortcut icon" href="/images/favicon-16x16.png" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Greeno</title>

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


</div>
<div align="center">
<img src="../images/Logomakr_2frzcV.png" class="logo">
</div>

<?php
$x = $_GET['category'];
echo '<h1 align="center">' . $x . '</h1>';
include '../connection.php';
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_select_db("id1008977_harc");
$strSQL = "SELECT * FROM `products` WHERE category='". $x ."'";
$rs = mysql_query($strSQL);


while($row = mysql_fetch_array($rs)) {



}
?>

</body>
</html>