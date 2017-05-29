<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<title></title>
	<meta charset="utf-8">
</head>
<body id="index">
<div class="navbar">
  <a href="../index.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>
<div align="center">
<a href="../index.php"><img src="../images/Logomakr_7q0dI6.png" id="logo"></a>
<h1>RelaxIt</h1>
</div>
<div id="information">
<?php
$x = $_GET['type'];
$y = $_GET['name'];
echo ' Вы выбрали ' . '<b>' . $_GET['type']  . '</b>' . ' вариант отдыха ' . ' в ' . '<b>' . $_GET['name']  . '</b>' ;

include '../connection.php';
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_select_db("hotels");

$strSQL = "SELECT * FROM `hotels`  WHERE type='$x' AND city='$y' ";
$rs = mysql_query($strSQL);

while($row = mysql_fetch_array($rs)) {
?>

<div align="center">
<img src="<?php echo $row['image1'] ?>"  id='hotelimg'>
<br>
<?php
echo "<a href='". 'http://wave:82/pages/pagehotels.php?id=' .$row['id']."' id='atext'>" .$row['name'] . "</a>";
}
?>
</div>
</div>
</body>
</html>