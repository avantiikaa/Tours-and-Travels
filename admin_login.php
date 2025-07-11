<?php
session_start();
$conn = new mysqli("localhost", "root", "", "tours_travels");

$admin_user = $_POST['admin_user'];
$admin_pass = $_POST['admin_pass'];

$sql = "SELECT * FROM admins WHERE username='$admin_user' AND password='$admin_pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['admin'] = $admin_user;
    header("Location: admin_dashboard.html");
} else {
    echo "Invalid admin credentials.";
}
?>
