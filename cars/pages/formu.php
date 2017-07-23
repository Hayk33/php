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


  <div class="row">
    <div class="large-12 columns">
      <div class="wrapper">
      <a href="addquestion.php">
        <div class="btn btn--border btn--primary btn--animated">Հարց տալ</div>
        </a>
      </div>
    </div>
  </div>





<div align="center">
<h1 class="h1">Հարցեր որոնց պատասղանները գուցե իմանաք</h1>
  <div align="left" id="textname1">

<?php


$x = $_GET['name'];
include '../connection.php';


$dbc = mysqli_connect($servername, $username, $password, $dbname);
mysqli_select_db($dbc,$dbname);
$strSQL = "SELECT * FROM `questions` ORDER BY id DESC";
$rs = mysqli_query($dbc,$strSQL);


while($row = mysqli_fetch_array($rs)) {

  ?>





  <br>
  <?php echo  "<a href='". 'questionpage.php?id=' .$row['id']."' id='atext1'>".$row['question']  . "</a>". "<br>" ;?>
<?php echo  "<h6>". 'Հեղինակ - ' . $row['username'] . "</h6>" . "<hr>";?>

<?php

}
?>

  </div>
</div>
</div>
</body>
</html>