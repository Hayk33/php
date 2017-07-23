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
    <form enctype="multipart/form-data" method="post" action="addquestion.php" align="center">
 
          <p>Հարցի մոտավոր բնութագրում<b id="star">*</b></p>
        <input type="text" name="fastquest" size="30px" id="textform" placeholder="Օր. շառավոի խնդիր ունեմ"><br>
       <hr class="formHr">        
       <select name="cars">
  <option value="Տեխնիկական խնդիր">Տեխնիկական խնդիր</option>
  <option value="Ալեհավաք">Ալեհավաք</option>
  <option value="Անվադողեր">Անվադողեր</option>
  <option value="Մարմին">Մարմին</option>
  <option value="Արգելակներ">Արգելակներ</option>
  <option value="Լուսավորություն">Լուսավորություն</option>
  <option value="Էլեկտրոնիկա">Էլեկտրոնիկա</option>
  <option value="Այլ">Այլ</option>

</select>

 
         <hr class="formHr">   
        <p>Ապրանքի Մասին<b id="star">*</b></p>
        <textarea cols="40" type="text" name="question"  id="textform" style="width: 450px;height: 500px;"></textarea>
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

      $fastquest = ($_POST['fastquest']);
      $username = ($_COOKIE['username']);
      $category = ($_POST['category']);
      $question = ($_POST['question']);
      


  ?>
  <div id="alert_text_div" align="center">
  <?php
if (empty($question)) {

  echo '<p id="alert_text" align="center">' . 'Խնդրում ենք լրացնել բոլոր տողերը<br><b>Այլ դեպքում առաջարկը չի հայտնվի կայքում</b>' . '</p>';
}

else{

  $dbc->query ("INSERT INTO `questions` (`category`,`username`,`fastquest`,`question`) VALUES ('$category','$username','$fastquest','$question')");
  $dbc->close();
}

?>
</div>

</body>
  </html>

