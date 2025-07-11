<?php
$conn = new mysqli("localhost", "root", "", "tours_travels");

$name = $_POST['name'];
$email = $_POST['email'];
$enquiry = $_POST['enquiry'];

$sql = "INSERT INTO enquiries (name, email, message) VALUES ('$name', '$email', '$enquiry')";
if ($conn->query($sql) === TRUE) {
    echo "Your enquiry has been submitted.";
} else {
    echo "Error: " . $conn->error;
}
?>
