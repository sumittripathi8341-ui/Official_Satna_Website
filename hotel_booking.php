<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .booking-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #218838;
        }
        .terms-container {
            margin-top: 10px;
            text-align: center;
        }
        .terms {
            display: none;
            background: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
        }
        .terms a {
            cursor: pointer;
            color: #007bff;
            text-decoration: underline;
        }
    </style>
    <script>
        function toggleTerms() {
            var terms = document.getElementById("termsText");
            if (terms.style.display === "none") {
                terms.style.display = "block";
            } else {
                terms.style.display = "none";
            }
        }
    </script>
</head>
<body>
    <div class="booking-container">
        <h2>Hotel Booking</h2>
        <form>
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="checkin">Check-in Date</label>
                <input type="date" id="checkin" required>
            </div>
            <div class="form-group">
                <label for="checkout">Check-out Date</label>
                <input type="date" id="checkout" required>
            </div>
            <div class="form-group">
                <label for="room">Room Type</label>
                <select id="room">
                    <option value="single">Single Room - $50/night</option>
                    <option value="double">Double Room - $80/night</option>
                    <option value="suite">Suite - $120/night</option>
                </select>
            </div>
            <div class="terms-container">
                <input type="checkbox" id="termsCheck" required>
                <label for="termsCheck"> I agree to the <a onclick="toggleTerms()">Terms and Conditions</a></label>
                <div id="termsText" class="terms">
                    <p>By booking a room, you agree to comply with the hotel's policies, including cancellation fees and check-in/check-out timings.</p>
                </div>
            </div>
            <button type="submit">Book Now</button>
        </form>
    </div>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels in Satna</title>
    
    <!-- Bootstrap & Tailwind CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        nav {
            height: 75px;
            width: 100%;          
            background-color: darkred;
            position: sticky;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            color: white;
        }

        .navbar-logo img {
            margin-left: 100px;
            width: 80px;
            filter: drop-shadow(1px 1px 20px red);
        }

        .text {
            font-family: algerian;
            font-size: 30px;
            font-weight: bold;
            color: yellow;
            text-transform: uppercase;
            margin-left: 10px;
        }

        ul {
            list-style-type: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        ul li {
            display: inline-block;
            font-size: smaller;
        }

        ul li a {
            color: yellow;
            font-weight: 800;
            text-decoration: none;
            padding: 8px 16px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        ul li a:hover {
            background-color: #007bff;
            color: #fff;
            transform: scale(1.1);
            box-shadow: 0px 0px 7px 4px rgba(0, 0, 0, 0.6);
        }

        .heading {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
            text-align: center;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .card h3 {
            font-size: 22px;
            color: #007bff;
            margin-top: 10px;
        }

        .card p {
            font-size: 14px;
            color: #555;
        }

        .card-link {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .card-link:hover {
            background-color: #0056b3;
            cursor: pointer;
        }

        .footer {
            background: #007bff;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        .footer a {
            color: #ffd700;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>

<nav>
    <div class="navbar-logo">
        <img src="tourist.png" title="SATNA" alt="SATNA">
    </div>
    <div class="text">District Satna</div>    
    <ul>
        <li><a href="index2.php">HOME</a></li>
        <li><a href="history.php">HISTORY OF SATNA</a></li>
        <li><a href="school.php">SCHOOLS</a></li> 
        <li><a href="colleges.php">COLLEGES</a></li> 
        <li><a href="temple.php">TEMPLES</a></li> 
        <li><a href="hotels.php" style="background-color: #007bff;">HOTELS</a></li>
    </ul>
</nav>

<!-- Heading -->
<div class="container">
    <h1 class="heading">Explore More in Satna</h1>
    
    <div class="row">
        <!-- History -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/7b/Barhut_railings.jpg" alt="History of Satna">
                <h3>History of Satna</h3>
                <p>Learn about the rich history of Satna, from ancient times to modern developments.</p>
                <a class="card-link" href="history.php">Explore</a>
            </div>
        </div>

        <!-- Schools -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://i.ytimg.com/vi/xKmXcHDZPeM/maxresdefault.jpg" alt="Schools in Satna">
                <h3>Schools</h3>
                <p>Find the best schools in Satna for quality education and extracurricular activities.</p>
                <a class="card-link" href="school.php">Explore</a>
            </div>
        </div>

        <!-- Colleges -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://www.silicon.ac.in/wp-content/uploads/2022/07/Engineering-College.png" alt="Colleges in Satna">
                <h3>Colleges</h3>
                <p>Discover top colleges in Satna for higher education and career growth.</p>
                <a class="card-link" href="colleges.php">Explore</a>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <!-- Temples -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://www.mptourism.com/images/destination/temple.jpg" alt="Temples in Satna">
                <h3>Temples</h3>
                <p>Visit the famous temples of Satna, known for their architecture and spirituality.</p>
                <a class="card-link" href="temple.php">Explore</a>
            </div>
        </div>

        <!-- Hotels -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://www.hotelmanagement.net/sites/hotelmanagement.net/files/styles/large_1000x685/public/Hilton.png?itok=Uu9bHbMh" alt="Hotels in Satna">
                <h3>Hotels</h3>
                <p>Book the best hotels in Satna for a comfortable and luxurious stay.</p>
                <a class="card-link" href="hotels.php">Explore</a>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <p>Contact Us: <a href="mailto:info@satnadistrict.com">info@satnadistrict.com</a> | Phone: +91-123456789</p>
</footer>

</body>
</html>
