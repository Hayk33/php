<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="images/favicon-16x16.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <title>add</title>
  <meta charset="utf-8">
</head>
<body>
<body bgcolor="#ECEFF1">
<div class="content">
<div class="container">
  <a href="../index.php">Գլխավոր</a>
  <a href="newspage.php">Նորություններ</a>
  <a href="crashpage.php">Քրաշ-թեստ</a>
  <a href="formu.php">Ֆորում</a>
  <a href="cars.php">Մեքենաներ</a>
    </div>
  </div> 

<div class="polaroid" align="center">
  <a href="../index.php"><img src="images/Logomakr_7YK9Xo.png" class="logo"></a>
</div>
<br>
<div class="form">
<hr>
    <form enctype="multipart/form-data" method="post" action="add.php" align="center">
          <p>Ապրանքի Անուն<b id="star">*</b></p>
        <input type="text" name="name" size="30px" id="textform"><br>
       <hr class="formHr">        

                    <p>Ապրանքի<b id="star">*</b></p>
        <input type="text" name="model" size="30px" id="textform"><br>
       <hr class="formHr">
          <p>img<b id="star">*</b></p>
        <input type="text" name="img" size="30px" id="textform"><br>
       <hr class="formHr"> 
                 <p>img1<b id="star">*</b></p>
        <input type="text" name="img1" size="30px" id="textform"><br>
       <hr class="formHr"> 
                 <p>img2<b id="star">*</b></p>
        <input type="text" name="img2" size="30px" id="textform"><br>
       <hr class="formHr"> 
                 <p>img3<b id="star">*</b></p>
        <input type="text" name="img3" size="30px" id="textform"><br>
       <hr class="formHr"> 
                 <p>img4<b id="star">*</b></p>
        <input type="text" name="img4" size="30px" id="textform"><br>
       <hr class="formHr"> 
                 <p>youtube<b id="star">*</b></p>
        <input type="text" name="youtube" size="30px" id="textform"><br>
       <hr class="formHr"> 
                 <p>logo<b id="star">*</b></p>
        <input type="text" name="logo" size="30px" id="textform"><br>
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
$dbc = mysqli_connect($servername, $username, $password, $dbname);
mysqli_select_db($dbc,$dbname);

      $name = ($_POST['name']);
      $model = ($_POST['model']);
      $youtube = ($_POST['youtube']);
      $about = ($_POST['about']);
      $logo = ($_POST['logo']);      
      $img = ($_POST['img']);
      $img1 = ($_POST['img1']);
      $img2 = ($_POST['img2']);
      $img3 = ($_POST['img3']);
      $img4 = ($_POST['img4']);      


  ?>
  <div id="alert_text_div" align="center">
  <?php
if (empty($name)) {

  echo '<p id="alert_text" align="center">' . 'Խնդրում ենք լրացնել բոլոր տողերը<br><b>Այլ դեպքում առաջարկը չի հայտնվի կայքում</b>' . '</p>';
}

else{

  $dbc->query ("INSERT INTO `car` (`name`,`model`,`youtube`,`about`,`logo`,`img`,`img1`,`img2`,`img3`,`img4`) VALUES ('$name','$model','$youtube','$about','$logo','$img','$img1','$img2','$img3','$img4')");
  $dbc->close();
}

?>
</div>

</body>
  </html>

