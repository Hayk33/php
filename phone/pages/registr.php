
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../style/style.css">
<title>Cargo</title>
</head>
<body>
<?php
include 'header.php';
?>
<content>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<div class="container">
      <label><b>Անուն</b></label>
      <input type="text" placeholder="Գրեք ձեր անուն" name="name" required>
       <label><b>Ազգանուն</b></label>
      <input type="text" placeholder="Գրեք ձեր ազգանուն" name="surname" required>
      <label><b>Գաղտնաբառ</b></label>
      <input type="password" placeholder="Enter Գաղտնաբառ" name="password1" required>

      <label><b>Կրկնեք Գաղտնաբառ</b></label>
      <input type="password" placeholder="Կրկնեք Գաղտնաբառ" name="password2" required>
      <label><b>Էլ հասցե</b></label>
      <input type="password" placeholder="Կրկնեք Գաղտնաբառ" name="password2" required>


      <div class="clearfix">

        
      </div>
    
	<label style="color: white;">Ներբեռնեք անձը հաստատող փաստաթղթի լուսանկարը</label>
	<input type="file" name="filename" required>
	<br>
	<p class="registrP"><input name="prof" type="radio" value="1" required>Որպես Վազգեն ձյա</p>
	<p class="registrP"><input name="prof" type="radio" value="2" required>Որպես գնորդ</p><br>
	<button type="submit" class="signupbtn">Գրանցվել</button>
	</div></form>
</content>

<?php

$put = '../images/';
if (isset($_FILES['filename']['name']) && ($_FILES['filename']['name'] != '')) {
	$name = $_FILES["filename"]["name"];
	move_uploaded_file($_FILES["filename"]["tmp_name"], $put.$name);
	$namefile = $name;


$dbc = mysqli_connect('localhost', 'u98231_1', '123456789', 'u98231_1') OR DIE('Ошибка подключения к базе данных');
if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($dbc, trim($_POST['name']));
	$surname = mysqli_real_escape_string($dbc, trim($_POST['surname']));
	$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
	$phone = mysqli_real_escape_string($dbc, trim($_POST['phone']));
	$password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
	$password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
	$prof = mysqli_real_escape_string($dbc, trim($_POST['prof']));
	$filename = mysqli_real_escape_string($dbc, trim($_POST['filename']));
	if(!empty($username) && !empty($password1) && !empty($password2) && !empty($namefile) && ($password1 == $password2)) {
		$query = "SELECT * FROM `registr` WHERE username = '$username'";
		$data = mysqli_query($dbc, $query);
		if(mysqli_num_rows($data) == 0) {
			$query ="INSERT INTO `registr` (name, surname, username, phone, password, prof, namefile) VALUES ('$name','$surname','$username','$phone', SHA('$password2'), '$prof','$namefile')";
			mysqli_query($dbc,$query);
			echo "<h1>".'Դուք գրանցվեցիք' . '<a href="../index.php">' . 'Վերադառնալ գլխավոր էջ' . '</a>' . "</h1>";
			mysqli_close($dbc);
			exit();
		}
		else {
			echo "<p>" . 'Սխալ' . "</p>";
		}

	}

			 				 
}
}
?>


</body>

</html>