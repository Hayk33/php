<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="images/favicon-16x16.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <title>torrent</title>
  <meta charset="utf-8">
</head>
<body>
<body bgcolor="#ECEFF1">


<div class="polaroid" align="center">
  <a href="index.php"><img src="images/Logomakr_7YK9Xo.png" class="logo"></a>
</div>
<br>
<div class="form">
<hr>
    <form enctype="multipart/form-data" method="post" action="addhotels.php" align="center">
          <p>Անուն<b id="star">*</b></p>
        <input type="text" name="name" size="30px" id="textform"><br>
       <hr class="formHr">        

       <select name="city">
  <option value="Тбилиси">Тбилиси</option>
  <option value="Батуми">Батуми</option>
  <option value="Кобулети">Кобулети</option>
</select>

       <select name="type">
  <option value="Простой">Простой</option>
  <option value="Нормальный">Нормальный</option>
  <option value="Хороший">Хороший</option>
  <option value="VIP">VIP</option>
</select>

        <p>Բնութագրող նկար1<b id="star">*</b></p>
        <input type="text" name="image1" size="30px" id="textform"><br>
        <p>Բնութագրող նկար2<b id="star">*</b></p>
        <input type="text" name="image2" size="30px" id="textform"><br>
        <p>Բնութագրող նկար3<b id="star">*</b></p>
        <input type="text" name="image3" size="30px" id="textform"><br>
        <p>Բնութագրող նկար4<b id="star">*</b></p>
        <input type="text" name="image4" size="30px" id="textform"><br>   
   
        <p>О отелье<b id="star">*</b></p>
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
mysql_select_db("hotels");
//       $path = 'images/'; // директория для загрузки
// $ext = array_pop(explode('.',$_FILES['myfile']['name'])); // расширение
// $new_name = time().'.'.$ext; // новое имя с расширением
// $full_path = $path.$new_name; // полный путь с новым именем и расширением

// if($_FILES['myfile']['error'] == 0){
//     if(move_uploaded_file($_FILES['myfile']['tmp_name'], $full_path)){
        // Если файл успешно загружен, то вносим в БД (надеюсь, что вы знаете как)
      $name = ($_POST['name']);
      $type = ($_POST['type']);
      $about = ($_POST['about']);      
      $city = ($_POST['city']);
      $image1 = ($_POST['image1']);
      $image2 = ($_POST['image2']);
      $image3 = ($_POST['image3']);
      $image4 = ($_POST['image4']);

      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }
  ?>
  <div id="alert_text_div" align="center">
  <?php
if (empty($name)) {

  echo '<p id="alert_text" align="center">' . 'Խնդրում ենք լրացնել բոլոր տողերը<br><b>Այլ դեպքում առաջարկը չի հայտնվի կայքում</b>' . '</p>';
}

else{

  $conn->query ("INSERT INTO `hotels` (`name`,`type`,`about`,`city`,`image1`,`image2`,`image3`,`image4`) VALUES ('$name','$type','$about','$city','$image1','$image2','$image3','$image4')");
  $conn->close();
}
//     }
// }
?>
</div>

</body>
  </html>

