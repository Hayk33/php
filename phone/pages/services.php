

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
<?php
include 'header.php';
?>



<div align="center">
  <div class="textname1">
<?php
if (isset($_COOKIE['username'])) {
?>
  <a href="add.php" class="addB">Ավելացնել հայտարարություն</a>
<?php
}
    else{
      ?>
       <a href="../index.php"><button onclick="document.getElementById('id01').style.display='block'">Մուտք/գրանցվել</button></a>
      <?php
    }
?>
<div align="center">
<h1 class="h1">Առաջարկներ</h1>



<?php


$x = $_GET['name'];
$y = $_COOKIE['username'];
include '../connection.php';

$dbc = mysqli_connect($servername, $username, $password, $dbname);
mysqli_select_db($dbc,$dbname);

$strSQL = "SELECT * FROM `questions`";
$rs = mysqli_query($dbc,$strSQL);


while($row = mysqli_fetch_array($rs)) {
echo '<h2>' . "<a href='". 'page.php?id=' .$row['id']."' class='atext'>". $row['name'] . "</a>" .'</h2>' . '<br>';
echo '<div align="right">' . $row['date'] . '</div>' . '<br>';
echo $row['username'];
?>
<hr>
<?php
 }

?>

  </div>
</div>
</div>
</body>
</html>