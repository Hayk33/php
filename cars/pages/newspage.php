<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <meta charset="utf-8">
  <link rel="shortcut icon" href="/images/favicon-16x16.png" type="image/png">
  
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


</div>
<div align="center">
<img src="../images/Logomakr_2frzcV.png" class="logo">
</div>

<?php
$x = $_GET['category'];
echo '<h1 align="center">' . $x . '</h1>';
include '../connection.php';
$dbc = mysqli_connect($servername, $username, $password, $dbname);
mysqli_select_db($dbc,$dbname);
$strSQL = "SELECT * FROM news WHERE id='".intval($x)."'";
$rs = mysqli_query($dbc,$strSQL);
?>

<div class="containerContent" align="center">



<?php
$strSQL = "SELECT * FROM news ORDER BY id DESC LIMIT 9";
$rs = mysqli_query($dbc,$strSQL);
while($row = mysqli_fetch_array($rs)) {

?>
  <ul id="ulform"><li id="liform">

  <img src="<?php echo $row['img'] ?>" alt="<?php echo $row['name'] ?>"  class="image">
  <div align="center" id="textname">
  <?php echo "<a href='". 'npage.php?id=' .$row['id']."' id='atext'>".$row['title'] . "</a>";?>
  </div>

</li>
</ul>
<?php
 }
 mysqli_close($dbc);
?>


</div>
</body>
</html>