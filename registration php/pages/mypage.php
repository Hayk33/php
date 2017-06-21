<?php

include '../connection.php';
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_select_db("takeit");

$username = $_POST["username"];
$password = $_POST["password"];


$result = mysql_query("SELECT * FROM `registr` WHERE username = '$username' && password = '$password'") or die ("Error.<hr>" . mysql_error());

if (mysql_num_rows($result)) {
    setcookie("username", $username);
        setcookie("password", $password);
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<title>index</title>
  <meta charset="utf-8">
</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="../index.php">Գլխավոր</a>
  <a href="#news">News</a>
  <a href="../registr.php">Գրանցվել</a>
  <a href="pages/mypage.php">Իմ էջը</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>
<div align="center">
<img src="../images/Logomakr_9FUOD4.png" id="logo">
</div>
<?php 
if (isset($_COOKIE['username'])) {
  

echo "Բարև " . $_COOKIE['username'] . ", բարի գալուստ TakeIt հարթակ:";
}
else{
  echo "<p>" . 'Խնդրում ենք գրանցվել: Կամ մուտք գործեք համակարգ' . "</p>";
  ?>
<div class="registr">
<div align="center">
<form method="post" action="mypage.php"><br>
  <p id="registText">Գրեք ձեր յուրահատուկ անունը</p>
  <input type="text" name="username" class="textline"><br>
  <p id="registText">Գրեք ձեր գաղտնաբառը</p>
  <input type="password" name="password" class="textline"><br>
  <input type="submit" name="add"><br><br>
</form>
</div>
</div>
  <?php
}
?>
</body>
</html>