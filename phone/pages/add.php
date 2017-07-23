<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="/images/favicon-16x16.png" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Cargo</title>

  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <meta charset="utf-8">
</head>
<body>
<body>

<?php
include 'header.php';
?>
<div class="form">
<hr>
    <form enctype="multipart/form-data" method="post" action="add.php" align="center">
          <p>Տեխնիկաի անուն<b id="star">*</b></p>
        <input type="text" name="name" size="30px" id="textform"><br>
       <hr class="formHr">        

                    <p>Գինը որով կուզեք ձեռք բերել տեխնիկան<b id="star">*</b></p>
        <input type="text" name="model" size="30px" id="textform"><br>
       <hr class="formHr">








   
        <p>Տեխնիկաի Մասին<b id="star">*</b></p>
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
      $date = date("Y-m-d H:i:s");
      $username = ($_COOKIE['username']);
      $about = ($_POST['about']);
     
   


  ?>
  <div id="alert_text_div" align="center">
  <?php
if (empty($name)) {

  echo '<p id="alert_text" align="center">' . 'Խնդրում ենք լրացնել բոլոր տողերը<br><b>Այլ դեպքում առաջարկը չի հայտնվի կայքում</b>' . '</p>';
}

else{

  $dbc->query ("INSERT INTO `questions` (`name`,`model`,`username`,`about`,`date`) VALUES ('$name','$model','$username','$about','$date')");
  $dbc->close();
}

?>
</div>







</div>
</body>
  </html>

