<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="images/favicon-16x16.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <title>add</title>
  <meta charset="utf-8">
</head>

<body bgcolor="#ECEFF1">


<div class="polaroid" align="center">
  <a href="index.php"><img src="images/Logomakr_7YK9Xo.png" class="logo"></a>
</div>
<br>
<div class="form">
<hr>
    <form enctype="multipart/form-data" method="post" action="add.php" align="center">
          <p>Ապրանքի Անուն<b id="star">*</b></p>
        <input type="text" name="title" size="30px" id="textform"><br>
       <hr class="formHr">        
  <p>նկար<b id="star">*</b></p>
        <input type="text" name="img" size="30px" id="textform"><br>
        <input type="text" name="img1" size="30px" id="textform"><br>
        <input type="text" name="img2" size="30px" id="textform"><br>
        <input type="text" name="img3" size="30px" id="textform"><br>
        <input type="text" name="img4" size="30px" id="textform"><br>
       <hr class="formHr">       
   
        <p>Ապրանքի Մասին<b id="star">*</b></p>
        <textarea cols="40" type="text" name="about"  id="textform" style="width: 450px;height: 500px;"></textarea>
        <hr class="formHr">        
        <br><br>
        <div class="submit">
        <input type="submit" value="Ավելացնել" name="add" placeholder="Send">
        </div>
    </form>
</div>

<?php

include '../connection.php';
$conn = new mysqli($servername, $username, $password, $dbname);
mysql_select_db("id274928_shop");

      $title = ($_POST['title']);
      $img = ($_POST['img']); 
      $img1 = ($_POST['img1']);
      $img2 = ($_POST['img2']);
      $img3 = ($_POST['img3']);
      $img4 = ($_POST['img4']);
      $about = ($_POST['about']);      

  ?>
  <div id="alert_text_div" align="center">
  <?php
if (empty($name)) {

  echo '<p id="alert_text" align="center">' . 'Խնդրում ենք լրացնել բոլոր տողերը<br><b>Այլ դեպքում առաջարկը չի հայտնվի կայքում</b>' . '</p>';
}

else{

  $conn->query ("INSERT INTO `products` (`title`,`about`,`img`,'img1','img2','img3','img4') VALUES ('$title','$about','$img','$img1','$img2','$img3','$img4')");
  $conn->close();
}

?>
</div>

</body>
  </html>

