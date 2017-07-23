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
<?php
include 'header.php';
?>
<div align="center">
  <div align="center" id="textname1">
<?php




UPDATE MyGuests SET lastname='Doe' WHERE id=2





$x = $_GET['id'];
include '../connection.php';
$dbc = mysqli_connect($servername, $username, $password, $dbname);
mysqli_select_db($dbc,$dbname);
$strSQL = "SELECT * FROM `questions` WHERE username='" . $_COOKIE['username'] . "'";
$rs = mysqli_query($dbc,$strSQL);

echo "Բարև " . $_COOKIE['username'] . ", բարի գալուստ GeekMark հարթակ";

while($row = mysqli_fetch_array($rs)) {
echo '<h2>' . "<a href='". 'page.php?id=' .$row['id']."' class='atext'>". $row['model'] . "</a>" .'</h2>' . '<br>';
?>
<?php
echo '<div align="right">' . $row['date'] . '</div>' . '<br>';
echo $row['model'];
echo  "<a href='" . 'delete.php?id=' . $row['id'] . "' class='atext1'>" . 'Ջնջել' . "</a>" . "<br>" ;  
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