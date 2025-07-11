<?php
session_start();
$conn = new mysqli("localhost", "root", "", "tours_travels");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    header("Location: home.html");
} else {
    echo "Invalid credentials. <a href='login.html'>Try again</a>";
}
?>
