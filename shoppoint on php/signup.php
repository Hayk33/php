<?php
$dbc = mysqli_connect('localhost', 'root', '', 'lesson') OR DIE('սխալ');
if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
	$password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
	$password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
	if(!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {
		$query = "SELECT * FROM `signup` WHERE username = '$username'";
		$data = mysqli_query($dbc, $query);
		if(mysqli_num_rows($data) == 0) {
			$query ="INSERT INTO `signup` (username, password) VALUES ('$username', SHA('$password2'))";
			mysqli_query($dbc,$query);
			echo 'Դուք գրանցվեցիք';
			mysqli_close($dbc);
			exit();
		}
		else {
			echo 'անունը գոյություն ունի';
		}

	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="style/style.css" rel="stylesheet">
</head>
<body>
<content>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<label for="username">Գրեք մուտքանուն:</label>
	<input type="text" name="username">
	<label for="password">Գրեք գաղտնաբառ:</label>
	<input type="password" name="password1">
	<label for="password">Գրեք գաղտնաբառը կրկին:</label>
	<input type="password" name="password2">
	<button type="submit" name="submit">Մուտք</button>
	</form>
</content>
</body>
</html>
