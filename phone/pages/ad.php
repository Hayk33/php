

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

	<label for="password" style="color: white;">Ներբեռնեք անձը հաստատող փաստաթղթի լուսանկարը</label>
	<input type="file" name="filename">
		<input type="submit" name="submit" value="Գրանցվել" class="login">
</form>


<?php


$put = '../images/';
if (isset($_FILES['filename']['name']) && ($_FILES['filename']['name'] != '')) {
	$name = $_FILES["filename"]["name"];
	move_uploaded_file($_FILES["filename"]["tmp_name"], $put.$name);
	$namefile = $name;
	echo "True";
}
else{
echo "false";	
}

?>