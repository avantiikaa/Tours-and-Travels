<?php
$conn = new mysqli("localhost", "root", "", "tours_travels");

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (fullname, username, password) VALUES ('$fullname', '$username', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Registration successful. <a href='login.html'>Login here</a>";
} else {
    echo "Error: " . $conn->error;
}
?>

