<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<title></title>
	<meta charset="utf-8">
</head>
<body id="index">
<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>
<div align="center">
<a href="../index.php"><img src="../images/Logomakr_7q0dI6.png" id="logo"></a>
</div>
<div id="information">

<?php
$x = $_GET['id'];


include '../connection.php';
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_select_db("csharp");

$strSQL = "SELECT * FROM `csharp`  WHERE id='".intval($x)."'";
$rs = mysql_query($strSQL);

while($row = mysql_fetch_array($rs)) {
echo '<h1>' . $row['name'] . '</h1>';
?>
<pre>
<?php
echo  '<p>' . $row['about'] . '</p>';
}
?>
</pre>
</body>
</html>