<?php
$servername = 'localhost';
$username = 'u98231_1';
$password = '123456789';
$dbname = 'u98231_1';
$x = $_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM questions WHERE id='$x'";

if ($conn->query($sql) === TRUE) {
    echo 'Հրամանը հաջողությամբ կատարված է վերադառնալ ' . '<a href="mypage.php">' . 'Իմ էջ ' .'</a>' ;
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>