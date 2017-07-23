<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <meta charset="utf-8">
  <link rel="shortcut icon" href="/images/favicon-16x16.png" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<?php


$x = $_GET['id'];
include '../connection.php';
$dbc = mysqli_connect($servername, $username, $password, $dbname);
mysqli_select_db($dbc,$dbname);
$strSQL = "SELECT * FROM `news` WHERE id='".intval($x)."'";
$rs = mysqli_query($dbc,$strSQL);


while($row = mysqli_fetch_array($rs)) {
  ?>
  <h1 align="center" style="color: white;">
  <?php
  echo $row['title'];
?>
</h1>
<img src="<?php echo  $row['img'] ?>" alt="<?php echo $row['name'] ?>" class="imagePage">
<br><br><br>
<div align="center">
  <?php
  echo $row['about'];
?>
</div>





<?php

}
?>

</div>
</body>
</html>