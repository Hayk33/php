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
mysql_select_db("hotels");

$strSQL = "SELECT * FROM `hotels`  WHERE id='".intval($x)."'";
$rs = mysql_query($strSQL);

while($row = mysql_fetch_array($rs)) {
echo '<h1>' . $row['name'] . '</h1>';
?>
<h3>Если нравится отель то подробности можно узнать написав в Viber</h3>
<br>
<img src="../images/580b57fcd9996e24bc43c544.png" id="viberLogo">
<br>
<button id="myBtn"><b>Call</b></button>
<!-- The Modal -->
<div id="myModal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close1">&times;</span>
      <h2>xxx xx xx xxr</h2>
    </div>
    <div class="modal-body">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>
<?php
echo  '<p>' . $row['about'] . '</p>';
?>
<div class="row">
  <div class="column">
    <img src="<?php echo $row['image1'] ?>" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="<?php echo $row['image2'] ?>" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="<?php echo $row['image3'] ?>" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="<?php echo $row['image4'] ?>" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="<?php echo $row['image1'] ?>" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="<?php echo $row['image2'] ?>" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="<?php echo $row['image3'] ?>" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="<?php echo $row['image4'] ?>" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="<?php echo $row['image1'] ?>" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php echo $row['image2'] ?>" style="width:100%" onclick="currentSlide(2)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php echo $row['image3'] ?>" style="width:100%" onclick="currentSlide(3)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php echo $row['image4'] ?>" style="width:100%" onclick="currentSlide(4)" alt="Nature and sunrise">
    </div>
  </div>
</div>

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<?php
}
?>
</div>



<script>
// Get the modal
var modal = document.getElementById('myModal1');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!-- Begin Comments JavaScript Code --><script type="text/javascript" async>function ajaxpath_592c64ee246c8(url){return window.location.href == '' ? url : url.replace('&s=','&s=' + escape(window.location.href));}(function(){document.write('<div id="fcs_div_592c64ee246c8"><a title="free comment script" href="http://www.freecommentscript.com">&nbsp;&nbsp;<b>Free HTML User Comments</b>...</a></div>');fcs_592c64ee246c8=document.createElement('script');fcs_592c64ee246c8.type="text/javascript";fcs_592c64ee246c8.src=ajaxpath_592c64ee246c8((document.location.protocol=="https:"?"https:":"http:")+"//www.freecommentscript.com/GetComments2.php?p=592c64ee246c8&s=#!592c64ee246c8");setTimeout("document.getElementById('fcs_div_592c64ee246c8').appendChild(fcs_592c64ee246c8)",1);})();</script><noscript><div><a href="http://www.freecommentscript.com" title="free html user comment box">Free Comment Script</a></div></noscript><!-- End Comments JavaScript Code -->
</body>
</html>