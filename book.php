<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: skyblue;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: rgba(255, 255, 255, 0.9);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 450px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .container:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
        }
        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
            color: #555;
        }
        input, select {
            width: 95%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        input:focus, select:focus {
            border-color: #6a11cb;
            outline: none;
        }
        button {
            width: 100%;
            padding: 14px;
            background: linear-gradient(to right, #ff416c, #ff4b2b);
            color: white;
            border: none;
            border-radius: 6px;
            margin-top: 20px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            transition: background 0.3s, transform 0.2s;
        }
        button:hover {
            background: linear-gradient(to right, #ff4b2b, #ff416c);
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hotel Booking Form</h2>
        <form action="process_booking.php" method="POST">
            <label>Full Name:</label>
            <input type="text" name="full_name" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Phone:</label>
            <input type="text" name="phone" required>

            <label>Check-in Date:</label>
            <input type="date" name="check_in" required>

            <label>Check-out Date:</label>
            <input type="date" name="check_out" required>

            <label>Room Type:</label>
            <select  name="room_type">
                <option value="Single">Single</option>
                <option value="Double">Double</option>
                <option value="Suite">Suite</option>
            </select>

            <label>Number of Guests:</label>
            <input type="number" name="guests" required>

            <button type="submit">Book Now</button>
        </form>
    </div>
</body>
</html>