<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <meta charset="utf-8">
  <link rel="shortcut icon" href="/images/favicon-16x16.png" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Cargo</title>

</head>
<body>
<div class="content">
<?php
include 'header.php';
?>
<div align="left">
  <div align="left" id="textname1">
<?php


$x = $_GET['id'];
include '../connection.php';
$dbc = mysqli_connect($servername, $username, $password, $dbname);
mysqli_select_db($dbc,$dbname);
$strSQL = "SELECT * FROM `questions` WHERE id='" . $x . "'";
$rs = mysqli_query($dbc,$strSQL);



while($row = mysqli_fetch_array($rs)) {
echo $row['model'];
echo '<h2>' . "<a href='". 'page.php?id=' .$row['id']."' class='atext'>". $row['model'] . "</a>" .'</h2>' . '<br>';


echo $row['model'];

echo $row['about'];
?>
<br>
<button id="myBtn">Կապ</button>

<!-- The Modal -->
<div id="myModal" class="modal2">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">

      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
      <p><?php echo $row['name'] . ' ' . $row['surname']; ?></p>
      <p><?php echo $row['phone']; ?></p>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<?php
echo '<div>' . $row['date'] . '</div>' . '<br>';
?>
<hr>
<?php

 }

?>
</div>
</div>
</div>

</body>
</html>