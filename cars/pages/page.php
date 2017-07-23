<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?146"></script>

<script type="text/javascript">
  VK.init({apiId: 6102884, onlyWidgets: true});
</script>
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
$strSQL = "SELECT * FROM `car` WHERE id='".intval($x)."'";
$rs = mysqli_query($dbc,$strSQL);


while($row = mysqli_fetch_array($rs)) {
  ?>
  <h1 align="center" style="color: white;">
  <?php
  echo $row['name'] . ' ' . $row['model'];
?>
</h1>
<img src="<?php echo  $row['img'] ?>" alt="<?php echo $row['name'] ?>" class="imagePage">
<br><br><br>
<div align="center">
  <?php
  echo $row['youtube'];
?>
</div>
<div align="center">
<div style="width: 50%; color: white;" >

    <?php
  echo '<p class="pre">' . $row['about'] . '</p>';
?>
</div>
</div>
<br>
<div align="center" class="imageabout-">
<img src="<?php echo $row['img1'] ?>" alt="<?php echo $row['title'] ?>" class="imageabout">
<img src="<?php echo $row['img2'] ?>" alt="<?php echo $row['title'] ?>" class="imageabout">
<img src="<?php echo $row['img3'] ?>" alt="<?php echo $row['title'] ?>" class="imageabout">
<img src="<?php echo $row['img4'] ?>" alt="<?php echo $row['title'] ?>" class="imageabout">
</div>

<?php

}
?>
<p align="center">Ձեր կարծիքը փոխդրամիջոցի մասին։</p>
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 20, attach: "*"});
</script>
</div>
</body>
</html>