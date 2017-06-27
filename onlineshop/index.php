<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<title>online </title>
</head>
<body>
<div class="content">







<div class="topnav" id="myTopnav">
  <a href="index.php">Գլխավոր</a>
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
<img src="images/Logomakr_7GkG4q.png" class="logo">
</div>


<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="images/img_nature_wide.jpg" style="width:100%; height: 400px; margin-top: 20px;">
  <div class="text"><h1>Shop fast and easy</h1></div>
</div>

<div class="mySlides fade">
  
  <img src="images/street-banners-masthead.jpg" style="width:100%; height: 400px; margin-top: 20px;">
  <div class="text"><h1>creat yours</h1></div>
</div>

<div class="mySlides fade">
  
  <img src="images/h39HQT.jpg" style="width:100%; height: 400px; margin-top: 20px;">
  <div class="text"><h1>Caption Three</h1></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<p align="center">Որոնել</p>
<a href="pages/search.php">
<img src="images/search1600.png" class="search">
</a>


<div class="containerContent" align="center">
<?php
include 'connection.php';
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_select_db("shop");
$strSQL = "SELECT * FROM products";
$rs = mysql_query($strSQL);
while($row = mysql_fetch_array($rs)) {

?>
  <ul id="ulform"><li id="liform">

  <img src="<?php echo $row['img'] ?>" alt="<?php echo $row['title'] ?>" class="image">
  <div align="center" id="textname">
  <?php echo "<a href='". 'https://bigtorrent.000webhostapp.com/pages/page.php?id=' .$row['id']."' id='atext'>".$row['title'] . "</a>";?>
  </div>

</li>
</ul>
<?php
 }
 mysql_close();
?>
</div>













</div>
</body>
</html>