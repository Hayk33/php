<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<title></title>
	<meta charset="utf-8">
</head>
<body id="index">
<div class="navbar">
  <a href="index.php">Գլխավոր</a>
  <a href="pages/add.php">| Ավելացնել տեղեկություն</a>

</div>
<div align="center">
<img src="images/Logomakr_7q0dI6.png" id="logo">
</div>
<?php
include 'connection.php';
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_select_db("csharp");

$strSQL = "SELECT * FROM `csharp`";
$rs = mysql_query($strSQL);

while($row = mysql_fetch_array($rs)) {
echo "<a href='". 'http://csharp:82/pages/pagehotels.php?id=' .$row['id']."' id='atext'>" .$row['name'] . "</a>" . "<br>". "<br>";

}
?>
</body>
</html>