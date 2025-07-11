<?php
$conn = new mysqli("localhost", "root", "", "tours_travels");

$destination = $_POST['destination'];
$departure_date = $_POST['departure_date'];
$return_date = $_POST['return_date'];
$flight_class = $_POST['flight_class'];
$hotel_rating = $_POST['hotel_rating'];

$sql = "INSERT INTO bookings (destination, departure_date, return_date, flight_class, hotel_rating)
        VALUES ('$destination', '$departure_date', '$return_date', '$flight_class', '$hotel_rating')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful.";
} else {
    echo "Error: " . $conn->error;
}
?>
