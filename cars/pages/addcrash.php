<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="images/favicon-16x16.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="../style/style.css">
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
  <a href="../index.php"><img src="../images/Logomakr_2frzcV.png" class="logo"></a>
</div>
<br>
<div class="form">
<hr>
    <form enctype="multipart/form-data" method="post" action="addcrash.php" align="center">
              <p>maknish model<b id="star">*</b></p>
        <input type="text" name="name" size="30px" id="textform" placeholder="Օր. Անոնիմուս"><br>
       <hr class="formHr">  
          <p>youtube<b id="star">*</b></p>
        <input type="text" name="youtube" size="30px" id="textform" placeholder="Օր. շառավոի խնդիր ունեմ"><br>


 
         <hr class="formHr">   
        <p>nkar<b id="star">*</b></p>
        <textarea cols="40" type="text" name="img"  id="textform" style="width: 450px;height: 500px;"></textarea>
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

      $youtube = ($_POST['youtube']);
      $name = ($_POST['name']);
      $img = ($_POST['img']);
      


  ?>
  <div id="alert_text_div" align="center">
  <?php
if (empty($name)) {

  echo '<p id="alert_text" align="center">' . 'Խնդրում ենք լրացնել բոլոր տողերը<br><b>Այլ դեպքում առաջարկը չի հայտնվի կայքում</b>' . '</p>';
}

else{

  $dbc->query ("INSERT INTO `crash` (`name`,`youtube`,`img`) VALUES ('$name','$youtube','$img')");
  $dbc->close();
}

?>
</div>

</body>
  </html>

