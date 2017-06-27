<?php
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_database = 'shop';

// Database Connection String
$con = mysql_connect($db_hostname,$db_username,$db_password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db_database, $con);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
    <div class="topnav" id="myTopnav">
  <a href="../index.php">Գլխավոր</a>
  <a href="#contact">Կոնտակտներ</a>
  <a href="#about">Մեր մասին</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<div align="center">
<img src="../images/Logomakr_7GkG4q.png" class="logo">
</div>

<form action="" method="post">  
Որոնել: <input type="text" name="term" /><br />  
<input type="submit" value="Submit" />  
</form>  

<div class="containerContent" align="center">
<?php
if (!empty($_REQUEST['term'])) {

$term = mysql_real_escape_string($_REQUEST['term']);     

$sql = "SELECT * FROM products WHERE title LIKE '%".$term."%'"; 
$r_query = mysql_query($sql); 

while ($row = mysql_fetch_array($r_query)){  
?>
<img src="<?php echo $row['img'] ?>" alt="<?php echo $row['title'] ?>" class="imageSearch">
<?php
echo "<br>";
echo "<a href='". 'https://bigtorrent.000webhostapp.com/pages/page.php?id=' .$row['id']."' id='atextSearch'>".$row['title'] . "</a>"."<br>"; 

}  

}
?>

    </body>
</html>