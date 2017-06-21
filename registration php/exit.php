<?php
unset($_COOKIE['id']);
unset($_COOKIE['username']);
setcookie('id', '', -1, '/');
setcookie('username', '', -1, '/');
$home_url = 'http://' . $_SERVER['HTTP_HOST'];
 header('Location: ' . $home_url);
?>