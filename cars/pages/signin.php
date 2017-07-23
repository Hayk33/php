<?php
$dbc = mysqli_connect('localhost', 'u98231_1', '123456789', 'u98231_1');
if(!isset($_COOKIE['id'])) {
  if(isset($_POST['submit'])) {
    $user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
    $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
    if(!empty($user_username) && !empty($user_password)) {
      $query = "SELECT `id` , `username` FROM `registr` WHERE username = '$user_username' AND password = SHA('$user_password')";
      $data = mysqli_query($dbc,$query);
      if(mysqli_num_rows($data) == 1) {
        $row = mysqli_fetch_assoc($data);
        setcookie('id', $row['id'], time() + (60*60*24*30));
        setcookie('username', $row['username'], time() + (60*60*24*30));
        $home_url = 'http://' . $_SERVER['HTTP_HOST'];
        header('Location: '. $home_url);
      }
      else {
        echo "<p>" . 'Մուտքագրված մուտքանունը և գաղտնաբառը սխալ է' . "</p>";
      }
    }
    else {
      echo "<p>" . 'Մուտքագրված մուտքանունը և գաղտնաբառը սխալ է' . "</p>";
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="jquery.lazyload.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
  <meta charset="utf-8">
	<title>Cargo</title>
</head>
<body>
<div class="content">
<div class="container">
  <a href="../index.php">Գլխավոր</a>
  <a href="pages/newspage.php">Նորություններ</a>
  <a href="pages/crashpage.php">Քրաշ-թեստ</a>
  <a href="pages/formu.php">Ֆորում</a>
  <a href="/pages/cars.php">Մեքենաներ</a>

  
    </div>
  </div> 

<br>


<div align="center">
<img src="../images/Logomakr_2frzcV.png" class="logo">
</div>

<?php
  if(empty($_COOKIE['username'])) {
?>


  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="username">Մուտքանուն:</label>
  <input type="text" name="username">
  <label for="password">Գաղտնաբառը:</label>
  <input type="password" name="password">
  <button type="submit" name="submit" class="signbutton">Մուտք</button>
  <a href="../signup.php">Գրանցվել</a>
  </form>
  <br>
 <div align="center">
   <a href="pages/search.php">
<img src="../images/search1600.png" class="search">
</a> 
</div>


<?php
}
else {
  ?>
  <div class="signin">
  <div id="example" align="center" style="color: white">
<?php echo "Բարև " . $_COOKIE['username'] . ", բարի գալուստ Greeno հարթակ";?>
</div>
  <p align="center"><a href="mypage.php" class="signinForm">Իմ էջ</a></p>
  <p align="center"><a href="../exit.php" class="signinForm">Ելք(<?php echo $_COOKIE['username']; ?>)</a></p>
<div align="center">
<a href="search.php">
<img src="../images/search1600.png" class="search">
</a>
</div>
  </div>
<?php 

}
?>


</body>
</html>

