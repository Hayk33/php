<?php

  
  include '../connections.php';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
  } 

  if (isset($_POST['submit'])) {

    $name= ($_POST["name"]);
    $surname= ($_POST["surname"]);
    $phone= ($_POST["phone"]);
    $address= ($_POST["address"]);
    $wishes= ($_POST["wishes"]);

    $conn->query ("INSERT INTO `pizza`(`name`, `surname`, `phone`, `address`, `wishes`) VALUES  ('$name', '$surname', '$phone', '$address', '$wishes') ");


      $conn->close();
}

?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="https://vk.com/js/api/share.js?94" charset="windows-1251"></script>
	<meta charset="utf-8">
	 <link rel="stylesheet" type="text/css" href="../style/style.css">
	<title>Գեղեցիկ տարրա</title>
  <link rel="shortcut icon" href="../images/favicon.ico">
  <script type="text/javascript" src="//vk.com/js/api/openapi.js?139"></script>
</head>
<body>
 <div align="left">
   <a href="../index.php"><img src="../images/png.png" class="logo1"></a>
    </div>
<h2 align="center">Գեղեցիկ տարրա</h2>
<div class="all_1">
  <div align="left">
<img src="../images/15.jpg" id="generalImg">
</div>
<div class="all_">
<div class="all">
  <div>
    <img src="../images/15-1.jpg" class="iconImg">
  </div>
  </div>
  <div class="all">
  <div>
    <img src="../images/15-2.jpg" class="iconImg">
  </div>
  </div>
  <div class="all">
  <div>
    <img src="../images/15.jpg" class="iconImg">
  </div>
  </div>
  <div class="all">
  <div>
    <img src="../images/15-3.jpg" class="iconImg">
  </div>
  </div>
  </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function()
    {
  $(".iconImg").click(function(event)
    { 
      
      $('#generalImg').attr('src',$(event.target).attr('src')); 
    } );
  });
  
  </script>
 
<div class="about_">
  <pre class="about">
    Չափեր-4.3*4.3*6.5սմ
    Որակ-բարձր
    Գույնը-կարմիր
    Պատրաստված նյութ-երկաթ
  </pre>
  </div>
  <p align="center" class="about_2">Առկա է</p>
  <div class="shop_">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h1 class="shop">Իրը ձեռք բերելու համար զանգահարել</h1>
  <h1 class="shop">094828688</h1>
  <h1 class="shop">Կամ</h1>
  <h1 class="shop">Գնեք օնլայն</h1>
  <form method="POST" action="box18.php">
    <p>Enter the index number of element you want to update</p>
    
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="text" name="surname" placeholder="Surname"><br><br>
    <input type="numbers" name="phone" placeholder="phone"><br><br>
    <input type="text" name="address" placeholder="address"><br><br>
    <input type="text" name="wishes" placeholder="wishes"><br><br>
    <input type="submit" name="submit" value="Update"><br><br>
  </form></div>
  <a href="id.html"><div align="center" class="button1">
    <p align="center">Պատվիրել</p>
    </div></a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Գնել</span>
</div>
  <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
  <p class="comment1">Ձեր կարծիքը ապրանքի մասին</p>
  <div class="fb-comments" data-href="https://web.facebook.com/ShoppointArmenia/photos/a.1815690265360088.1073741828.1812839695645145/1819704924958622/?type=3&amp;theater" data-width="500" data-numposts="20"></div>

  <div class="rating">
 <!--[if lte IE 7]><style>#reviewStars-input{display:none}</style><![endif]-->

<div id="reviewStars-input">
    <input id="star-4" type="radio" name="reviewStars"/>
    <label title="gorgeous" for="star-4"></label>

    <input id="star-3" type="radio" name="reviewStars"/>
    <label title="good" for="star-3"></label>

    <input id="star-2" type="radio" name="reviewStars"/>
    <label title="regular" for="star-2"></label>

    <input id="star-1" type="radio" name="reviewStars"/>
    <label title="poor" for="star-1"></label>

    <input id="star-0" type="radio" name="reviewStars"/>
    <label title="bad" for="star-0"></label>
</div>
<br>
</div>
<script type="text/javascript"><!--
document.write(VK.Share.button(false,{type: "round", text: "Կիսվել"}));
--></script>
</body>
</html5