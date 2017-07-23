<?php
$dbc = mysqli_connect('localhost', 'u98231_1', '123456789', 'u98231_1') OR DIE('Ошибка подключения к базе данных');
if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
	$password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
	$password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
	if(!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {
		$query = "SELECT * FROM `registr` WHERE username = '$username'";
		$data = mysqli_query($dbc, $query);
		if(mysqli_num_rows($data) == 0) {
			$query ="INSERT INTO `registr` (username, password) VALUES ('$username', SHA('$password2'))";
			mysqli_query($dbc,$query);
			echo "<h1>".'Դուք գրանցվեցիք' . '<a href="index.php">' . '</a>' . "</h1>";
			mysqli_close($dbc);
			exit();
		}
		else {
			echo "<p>" . 'մուտքանունը գոյություն ունի' . "</p>";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style/style.css">
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
<content>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<label for="username" style="color: white;">Գրեք ձեր մուտքանունը:</label>
	<input type="text" name="username">
	<label for="password" style="color: white;">Գրեք ձեր գաղտնաբառը:</label>
	<input type="password" name="password1">
	<label for="password" style="color: white;">Կրկնեք ձեր գաղտնաբառը:</label>
	<input type="password" name="password2">
	<input type="submit" name="submit" value="Գրանցվել">
	</form>
</content>


</body>

</html>