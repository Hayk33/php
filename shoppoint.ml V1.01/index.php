<?php
include ('connections.php');
?>


<!doctype html>
<html>
  <head>
  
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Shoppoint</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.waterwheelCarousel.js"></script>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="shortcut icon" href="images/favicon.ico">
    <script type="text/javascript">
      $(document).ready(function () {
        var carousel = $("#carousel").waterwheelCarousel({
          flankingItems: 3,
          movingToCenter: function ($item) {
            $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
          },
          movedToCenter: function ($item) {
            $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
          },
          movingFromCenter: function ($item) {
            $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
          },
          movedFromCenter: function ($item) {
            $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
          },
          clickedCenter: function ($item) {
            $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
          }
        });

        $('#prev').bind('click', function () {
          carousel.prev();
          return false
        });

        $('#next').bind('click', function () {
          carousel.next();
          return false;
        });

        $('#reload').bind('click', function () {
          newOptions = eval("(" + $('#newoptions').val() + ")");
          carousel.reload(newOptions);
          return false;
        });

      });
    </script>

  </head>
  <body>
  <a href="add.php">avelacnel</a>
  <div id="mySidenav" class="sidenav">
  <a href="#" id="about">About</a>
  <a href="#" id="blog">Blog</a>
  <a href="#" id="projects">Projects</a>
  <a href="#" id="contact">Contact</a>
</div>
  <div align="left">
   <a href="index.html"><img src="images/png.png" class="logo"></a>
    </div>
     <div align="right">
   <a href="index.html"><img src="images/vk.png" class="vkfbinst"></a>
   <a href="https://web.facebook.com/Shoppoint-1812839695645145/"><img src="images/fb.png" class="vkfbinst"></a>
   <a href="index.html"><img src="images/inst.png" class="vkfbinst"></a>
      </div>      <!--slider-->
      <div align="center">
<div id="carousel">
      <a href="page/fidgetcube1.html"><img src="images/1.jpg" class="img-" id="item-1" /></a>
      <a href="page/led2.html"><img src="images/2.jpg" class="img-" id="item-2" /></a>
      <a href="page/fan3.html"><img src="images/3.jpg" class="img-" id="item-3" /></a>
      <a href="page/fan4.html"><img src="images/4.jpg" class="img-" id="item-4" /></a>
      <a href="page/time5.html"><img src="images/5.jpg" class="img-" id="item-5" /></a>
      <a href="page/time6.html"><img src="images/6.jpg" class="img-" id="item-6" /></a>
      <a href="page/led12.html"><img src="images/12.jpg" class="img-" id="item-7" /></a>
      <a href="page/lens13.html"><img src="images/13.jpg" class="img-" id="item-8" /></a>
    </div>

    <br>
    </div>
     <!--slider pag-->
    <div align="center">
    <a href="page/search.html">
    <img src="images/search-logo-md.png" class="search">
    </a>
    </div>

  <!--menu-->
    <ul class="ul-">
  <li class="li-"><a href="#home">Գլխավոր</a></li>
  <li class="li-"><a href="#news">Նորություններ</a></li>  
  <li class="li-"><a href="#contact">Հետաքրքիր բաներ</a></li>
  <li class="li-"><a href="#contact">Հետաքրքիր տեխնիկա</a></li>
  <li class="li-"><a href="#contact">Նվերներ</a></li>
  <li class="li-"><a href="#contact">Կոնտակտներ</a></li>
</ul>

    <!--menu pag-->
    <h2 align="center">Նորույթներ</h2>
    <div class="header">
    <div align="center">
      <a href="page/led2.html"><img src="images/2.jpg" class="img-0"></a>
      <a href="page/led2.html"><img src="images/3.jpg" class="img-0"></a>
      <a href="page/led2.html"><img src="images/4.jpg" class="img-0"></a>
    </div>
    </div>
<div class="block3" align="center">
<h2>Ապրանքներ</h2>
  <div class="block_3">
  <?php
  $id1 = 1;
  ?>
    <a href="page/chain.php"><img src="images/19.jpg" class="img-1"></a>
  </div>
</div>

<div class="block4" align="left">
  <div class="block_4">
  <?php
  $id2 = 2;
  ?>
    <a href="page/led2.php"><img src="images/2.jpg" class="img-1"></a>
  </div>
</div>
<div class="block5" align="right">
  <div class="block_5">
  <?php
  $id3 = 3;
  ?>
    <a href="page/fan4.php"><img src="images/4.jpg" class="img-1"></a>
  </div>
</div>

<div class="block3" align="center">
  <div class="block_3">
  <?php
  $id4 = 4;
  ?>
     <a href="page/lens13.php"><img src="images/13.jpg" class="img-1"></a>
  </div>
</div>
<div class="block4" align="left">
  <div class="block_4">
  <?php
  $id5 = 5;
  ?>
    <a href="page/fidgetcube1.php"><img src="images/1.jpg" class="img-1"></a>
  </div>
</div>
<div class="block5" align="right">
  <div class="block_5">
  <?php
  $id6 = 6;
  ?>
    <a href="page/fan3.php"><img src="images/3.jpg" class="img-1"></a>
  </div>
</div>
<div class="block3" align="center">
  <div class="block_3">
  <?php
  $id7 = 7;
  ?>
    <a href="page/led12.php"><img src="images/12.jpg" class="img-1"></a>
  </div>
</div>
<div class="block4" align="left">
  <div class="block_4">
  <?php
  $id8 = 8;
  ?>
    <a href="page/owl14.php"><img src="images/14-1.jpg" class="img-1"></a>
  </div>
</div>
<div class="block5" align="right">
  <div class="block_5">
  <?php
  $id9 = 9;
  ?>
    <a href="page/box18.php"><img src="images/15-1.jpg" class="img-1"></a>
  </div>
</div>
<div class="block3" align="center">
  <div class="block_3">
  <?php
  $id10 = 10;
  ?>
    <a href="page/sandtime17.php"><img src="images/17.jpg" class="img-1"></a>
  </div>
</div>
<div class="block4" align="left">
  <div class="block_4">
  <?php
  $id11 = 11;
  ?>
        <a href="page/box18.php"><img src="images/18.jpg" class="img-1"></a>
  </div>
</div>
<div class="block5" align="right">
  <div class="block_5">
  <?php
  $id12 = 12;
  ?>
        <a href="page/chain.php"><img src="images/19.jpg" class="img-1"></a> 
  </div>
</div>

  </body>
</html>

