<?php
$conn = new mysqli("localhost", "root", "", "tours_travels");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO enquiries (name, email, message) VALUES ('$name', '$email', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "Thank you for your enquiry.";
} else {
    echo "Error: " . $conn->error;
}
?>
