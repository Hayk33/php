<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="images/favicon-16x16.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <title>add</title>
  <meta charset="utf-8">
</head>

<body bgcolor="#ECEFF1">


 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
<div class="container">
  <form action="page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
  </div>

<?php

include '../connection.php';
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_select_db("shop");

      $name = ($_POST['title']);
      $img = ($_POST['img']); 
      $img = ($_POST['img']);
      $img = ($_POST['img']);
      $img = ($_POST['img']);
      $img = ($_POST['img']);
      $about = ($_POST['about']);      

  ?>
  <div id="alert_text_div" align="center">
  <?php
if (empty($name)) {

  echo '<p id="alert_text" align="center">' . 'Խնդրում ենք լրացնել բոլոր տողերը<br><b>Այլ դեպքում առաջարկը չի հայտնվի կայքում</b>' . '</p>';
}

else{

  $conn->query ("INSERT INTO `products` (`title`,`about`,`img`) VALUES ('$title','$about','$img')");
  $conn->close();
}

?>
</div>

</body>
  </html>

