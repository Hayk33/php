






<!DOCTYPE html>
<html>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="jquery.lazyload.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="style/style.css">
  <meta charset="utf-8">
	<title>Cargo</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="jquery.lazyload.min.js" type="text/javascript"></script>
</head>
<body>
<div class="content">
<div class="container">
  <a href="../index.php">Գլխավոր</a>
  <a href="pages/newspage.php">Նորություններ</a>
  <a href="pages/crashpage.php">Քրաշ-թեստ</a>
  <a href="pages/formu.php">Ֆորում</a>
  <a href="/pages/cars.php">Մեքենաներ</a>
  <a href="/pages/signin.php">Մուտք</a>
  
    </div>
  </div> 

<br>


<div align="center">
<img src="images/Logomakr_2frzcV.png" class="logo">
</div>


<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="images/img_nature_wide.jpg" style="width:100%; height: 500px; margin-top: 20px;">
  <div class="text"><h1>Ford Mustang's</h1></div>
</div>

<div class="mySlides fade">
  
  <img src="images/street-banners-masthead.jpg" style="width:100%; height: 500px; margin-top: 20px;">
  <div class="text1"><h1>Mercedes</h1></div>
</div>

<div class="mySlides fade">
  
  <img src="images/h39HQT.jpg" style="width:100%; height: 500px; margin-top: 20px;">
  <div class="text"><h1>BMW's</h1></div>
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



<div class="containerContent" align="center">
<?php
include 'connection.php';
$dbc = mysqli_connect($servername, $username, $password, $dbname);
mysqli_select_db($dbc,$dbname);
$strSQL = "SELECT * FROM car ORDER BY id DESC LIMIT 9";
$rs = mysqli_query($dbc,$strSQL);
while($row = mysqli_fetch_array($rs)) {

?>
  <ul id="ulform"><li id="liform">

  <img src="<?php echo $row['img'] ?>" alt="<?php echo $row['name'] ?>"  class="image">
  <div align="center" id="textname">
  
  </div>

</li>
</ul>
<?php
 }

?>


</div>
<hr>
<h1 align="center" style="color:white;">Քրաշ-թեստեր</h1>
<div class="containerContent" align="center">
<?php



$strSQL = "SELECT * FROM crash ORDER BY id DESC LIMIT 9";
$rs = mysqli_query($dbc,$strSQL);
while($row = mysqli_fetch_array($rs)) {

?>
  <ul id="ulform"><li id="liform">

  <img src="<?php echo $row['img'] ?>" alt="<?php echo $row['name'] ?>"  class="image">
  <div align="center" id="textname">
  <?php echo "<a href='". 'pages/cpage.php?id=' .$row['id']."' id='atext'>".$row['name'] . ' ' . $row['model'] . "</a>";?>
  </div>

</li>
</ul>
<?php
 }

?>


</div>

<hr>
<h1 align="center" style="color:white;">Նորություններ</h1>
<div class="containerContent" align="center">
<?php



$strSQL = "SELECT * FROM news ORDER BY id DESC LIMIT 9";
$rs = mysqli_query($dbc,$strSQL);
while($row = mysqli_fetch_array($rs)) {

?>
  <ul id="ulform"><li id="liform">

  <img src="<?php echo $row['img'] ?>" alt="<?php echo $row['name'] ?>"  class="image">
  <div align="center" id="textname">
  <?php echo "<a href='". 'pages/npage.php?id=' .$row['id']."' id='atext'>".$row['title'] . "</a>";?>
  </div>

</li>
</ul>
<?php
 }

?>


</div>




<?php

 mysqli_close($dbc);
?>




</div>
<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=44507191&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/44507191/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="44507191" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter44507191 = new Ya.Metrika({
                    id:44507191,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/44507191" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>