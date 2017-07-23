


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../index.php" class="sidenavA">Գլխավոր</a>
  <a href="#" class="sidenavA">Մեր մասին</a>
    <a href="services.php" class="sidenavA">Առաջարկներ</a>
  <a href="#" class="sidenavA">Կապ</a>
  <a href="#" class="sidenavA">Կոնտակտներ</a>


<?php
include '../connection.php';
$dbc = mysqli_connect($servername, $username, $password, $dbname);
mysqli_select_db($dbc,$dbname);
$strSQL = "SELECT * FROM registr ";
$rs = mysqli_query($dbc,$strSQL);
while($row = mysqli_fetch_array($rs)) {

?>



<?php



}

  if(empty($_COOKIE['username'])) {
?>

  <button onclick="document.getElementById('id01').style.display='block'">Մուտք/գրանցվել</button>
<?php

}
else {
  ?>
  <a href="mypage.php" class="sidenavA">Իմ էջ</a>
  <a href="../exit.php" class="sidenavA">Ելք</a>
  <?php
}
?>

</div>
<span class="menu" onclick="openNav()">&#9776;</span>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
<div align="center">
<img src="../images/Logomakr_4rCaJl.png" class="logo">
<h1>GeekMark</h1>
</div>
<div class="allTop">
<!-- wifiantena -->
<img src="../images/wlan-1127562_960_720.png" class="antena1">
<img src="../images/Antenna-PNG-Pic.png" class="antena2">


<!-- carging -->
 <div class="charger">
 <div id="charging" class="fa"></div>
 <div id="div1" class="fa"></div>
</div>
<script>
function chargebattery() {
  var a;
  a = document.getElementById("div1");
  a.innerHTML = "&#xf244;";
  setTimeout(function () {
      a.innerHTML = "&#xf243;";
    }, 1000);
  setTimeout(function () {
      a.innerHTML = "&#xf242;";
    }, 2000);
  setTimeout(function () {
      a.innerHTML = "&#xf241;";
    }, 3000);
  setTimeout(function () {
      a.innerHTML = "&#xf240;";
    }, 4000);
}
chargebattery();
setInterval(chargebattery, 5000);
</script>
</div>
<div class="allSocial" align="right">
<img src="../images/facebook-256.png" class="social">
<img src="../images/ico_vk.png" class="social">
<img src="../images/instagram-icon-png-4.png" class="social">
</div>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../images/boy_icon-icons.com_55048.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="username">Մուտքանուն:</label>
  <input type="text" name="username">
  <label for="password">Գաղտնաբառը:</label>
  <input type="password" name="password">
  <button type="submit" name="submit" class="signbutton">Մուտք</button>
  <a href="pages/registr.php">Գրանցվել</a>
  </form>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

    </div>
  </form>

</div>

<script>

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>