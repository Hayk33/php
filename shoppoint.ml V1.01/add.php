<?php

	
	include 'connections.php';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
	} 

	if (isset($_POST['submit'])) {

		$name= ($_POST["name"]);
		$surname= ($_POST["surname"]);
		$phone= ($_POST["phone"]);
		$address= ($_POST["address"]);
		$wishes= ($_POST["wishes"]);

    $conn->query ("INSERT INTO `pizza`(`name`, `surname`, `phone`, `address`, `wishes`) VALUES  ('$name', '$surname', '$phone', '$address', '$wishes') ");


      $conn->close();
}

?>
<!DOCTYPE html>
	<html>
		<head>
		</head>
<body>
	<a href="index.php">home</a>
	<form method="POST" action="add.php">
		<p>Enter the index number of element you want to update</p>
		
		<input type="text" name="name" placeholder="Name"><br><br>
		<input type="text" name="surname" placeholder="Surname"><br><br>
		<input type="numbers" name="phone" placeholder="phone"><br><br>
		<input type="text" name="address" placeholder="address"><br><br>
		<input type="text" name="wishes" placeholder="wishes"><br><br>
		<input type="submit" name="submit" value="Update"><br><br>
	</form>
</body>
	</html>