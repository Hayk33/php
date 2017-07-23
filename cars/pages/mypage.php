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
<div align="center">
  <div align="center" id="textname1">
<?php


$x = $_GET['id'];
include '../connection.php';
$dbc = mysqli_connect($servername, $username, $password, $dbname);
mysqli_select_db($dbc,$dbname);
$strSQL = "SELECT * FROM `questions` WHERE username='" . $_COOKIE['username'] . "'";
$rs = mysqli_query($dbc,$strSQL);

echo "Բարև " . $_COOKIE['username'] . ", բարի գալուստ Greeno ֆորում հարթակ";

while($row = mysqli_fetch_array($rs)) {

  ?>





  <br>
  <hr>
<?php echo  "<a href='" . 'questionpage.php?id=' . $row['id'] . "' class='atext1'>" . $row['question'] . "</a>" . "<br>" ;?><br>
<?php echo  "<a href='" . 'delete.php?id=' . $row['id'] . "' class='atext1'>" . 'Ջնջել' . "</a>" . "<br>" ;?>  


<?php

}
?>
</div>
</div>
</div>

</body>
</html>