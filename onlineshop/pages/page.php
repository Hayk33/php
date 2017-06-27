<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <meta charset="utf-8">
  <link rel="shortcut icon" href="/images/favicon-16x16.png" type="image/png">
  <title>Big-Torrent.ml</title>
</head>
<body>
<div class="topnav">
  <a href="../index.php">Գլխավոր</a>

  <a href="#contact">Կոնտակտներ</a>
  <a href="#about">Մեր մասին</a>
</div>
<?php


$x = $_GET['id'];
include '../connection.php';
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_select_db("id274928_shop");
$strSQL = "SELECT * FROM `products` WHERE id='".intval($x)."'";
$rs = mysql_query($strSQL);


while($row = mysql_fetch_array($rs)) {
  ?>
  <h1 align="center">
  <?php
  echo $row['title'];
?>
</h1>
<img src="<?php echo  $row['img'] ?>" alt="<?php echo $row['title'] ?>" class="imagePage">
<h4 class="abouttext">
<pre>
    <?php
  echo $row['about'];
?>
</pre>
</h4><br>
<div align="center" class="imageabout-">
<img src="<?php echo $row['img1'] ?>" alt="<?php echo $row['title'] ?>" class="imageabout">
<img src="<?php echo $row['img2'] ?>" alt="<?php echo $row['title'] ?>" class="imageabout">
<img src="<?php echo $row['img3'] ?>" alt="<?php echo $row['title'] ?>" class="imageabout">
<img src="<?php echo $row['img4'] ?>" alt="<?php echo $row['title'] ?>" class="imageabout">
</div>

<h2>Գնել համար զանգահարել 094-82-86-88</h2>
<?php

}
?>

</body>
</html>