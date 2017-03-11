<?php
$dbc = mysqli_connect('localhost', 'root', '', 'category');
if ($dbc==false) {
	echo "Տեխնիկական խնդիրներ";
	echo mysqli_connect_error();
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../style/style.css">
	<title>HourseBattery</title>
</head>
<body>
<div align="center">
<a href="http://test.am:82/index.php">
<img src="../images/Logomakr_6cCYyx.png">
</div>
</a>
<hr class="hrColor">
<div align="center" class="date">
<div class="data1">
<?php
$x = date('m.d.Y');
echo "Այսօր"." "."$x";
?>
</div>
</div>
<?php

	

$sql = "SELECT * FROM `category_item` WHERE item_id='3'";
$result = $dbc->query($sql);
while($row = $result->fetch_assoc()) {
?>
<h1>
<?php 
echo $row['title'];
    
}
?>
</h1>

<?php
$sql = "SELECT * FROM `category_item` WHERE item_id='3'";
$result = $dbc->query($sql);
while($row = $result->fetch_assoc()) {
echo $row['text'];
    
}
?>

<?php
$sql = "SELECT * FROM `category_item` WHERE item_id='3'";
$result = $dbc->query($sql);
while($row = $result->fetch_assoc()) {
echo $row['video'];
    
}
include '../index.php';
if ($r5=="BMW E30") {
	echo "lav";
}
else{
	echo "vat";
}
?>
</body>
</html>