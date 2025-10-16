<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];
    $room_type = $_POST["room_type"];
    $guests = $_POST["guests"];

    $sql = "INSERT INTO bookings (full_name, email, phone, check_in, check_out, room_type, guests) 
            VALUES ('$full_name', '$email', '$phone', '$check_in', '$check_out', '$room_type', $guests)";

    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
