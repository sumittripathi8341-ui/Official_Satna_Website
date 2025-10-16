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
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            height: 75px;
            width: 100%;          
            background-color: #002447;
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
            color: #53d3d1;
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
            font-size: x-small;
        }

        ul li a {
            color: white;
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

        .hotel-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
            overflow: hidden;
            text-align: center;
        }

        .hotel-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
        }

        .hotel-image img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .hotel-info {
            padding: 15px 0;
        }

        .hotel-info h3 {
            font-size: 22px;
            color: #007bff;
            margin-bottom: 5px;
        }

        .hotel-info p {
            font-size: 14px;
            color: #555;
        }

        .booking-link {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .booking-link:hover {
            background-color: #0056b3;
            cursor: pointer;
        }

        .full-width-image {
    width: 100%;  
    height: 50vh; /* Set height to 50% of viewport */
    object-fit: cover; /* Ensures the image fills the space properly */
    display: block;  
    margin: 0;
    padding: 0;
    object-position: bottom 50%;
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
            <li><a href="#" onclick="location.href='first.php'">HOME</a></li>
            <li><a href="#" onclick="location.href='index2.php'">ABOUT</a></li>
            <li><a href="#" onclick="location.href='history.php'">HISTORY OF SATNA</a></li>
            <li><a href="#" onclick="location.href='school.php'">SCHOOLS</a></li> 
            <li><a href="#" onclick="location.href='colleges.php'">COLLEGES</a></li> 
            <li><a href="#" onclick="location.href='temple.php'">TEMPLES</a></li> 
            <li><a href="#" onclick="location.href='hotels.php'"style="background-color: #007bff;">HOTELS</a></li>
        </ul>
    </nav>
    <br>
    <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/44947127.jpg?k=a1c054f44951df4e9bbd54a0aeb3b0e31e0b50a503bde7221ece05dd5b19b383&o=&hp=1" alt="Satna District" class="full-width-image">

    <div class="container">
        <h1 class="heading">Top Hotels in Satna for Booking</h1>
        
        <div class="row">
            <!-- Hotel 1 -->
            <div class="col-md-4">
                <div class="hotel-card">
                    <div class="hotel-image">
                        <img src="https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/htl-imgs/201409282249342091-8f18c1be0dad11e9b7510242ac110005.jpg" alt="MPT Hotel Bharhut">
                    </div>
                    <div class="hotel-info">
                        <h3><a href="#" onclick="location.href='login.php'">MPT Hotel Bharhut</a></h3>
                        <p>Luxury hotel with conference halls, best food, and comfortable rooms. Great for business and family events.</p>
                        <a  class="booking-link" onclick="location.href='login.php'">Book Now</a>
                    </div>
                </div>
            </div>

            <!-- Hotel 2 -->
            <div class="col-md-4">
                <div class="hotel-card">
                    <div class="hotel-image">
                        <img src="https://pix10.agoda.net/property/56098072/0/238f6553f7743e4b081d3c9bd4441101.jpeg?ce=0&s=414x232" alt="Hotel Mahamaya">
                    </div>
                    <div class="hotel-info">
                        <h3><a href="#" onclick="location.href='login.php'">Hotel Mahamaya</a></h3>
                        <p>Luxury meets hospitality! Strategically located in Satna for an unforgettable stay.</p>
                        <a class="booking-link" onclick="location.href='login.php'">Book Now</a>

                    </div>

                </div>
            </div>

            <!-- Hotel 3 -->
            <div class="col-md-4">
                <div class="hotel-card">
                    <div class="hotel-image">
                        <img src="https://pix10.agoda.net/hotelImages/217/2171008/2171008_17061219530053615384.png?ca=6&ce=1&s=1024x768" alt="Hotel Sun Shine">
                    </div>
                    <div class="hotel-info">
                        <h3><a href="#" onclick="location.href='login.php'">Hotel Sun Shine</a></h3>
                        <p>Perfect mix of value, comfort, and convenience. Includes flat-screen TV, air conditioning, and free Wi-Fi.</p>
                        <a class="booking-link" onclick="location.href='login.php'">Book Now</a>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <!-- Hotel 4 -->
            <div class="col-md-4">
                <div class="hotel-card">
                    <div class="hotel-image">
                        <img src="https://r1imghtlak.mmtcdn.com/f337a432-7e5a-4202-9673-23dcd758f2dc.jpg" alt="Hotel USA Inn">
                    </div>
                    <div class="hotel-info">
                        <h3><a href="#" onclick="location.href='login.php'">Hotel USA Inn</a></h3>
                        <p>A top-rated budget-friendly hotel with smooth check-in and excellent service.</p>
                        <a  class="booking-link" onclick="location.href='login.php'">Book Now</a>
                    </div>
                </div>
            </div>

            <!-- Hotel 5 -->
            <div class="col-md-4">
                <div class="hotel-card">
                    <div class="hotel-image">
                        <img src="https://images.trvl-media.com/lodging/21000000/20320000/20318400/20318349/0da3928b.jpg?impolicy=resizecrop&rw=575&rh=575&ra=fill" alt="Sun n Star">
                    </div>
                    <div class="hotel-info">
                        <h3><a href="#" onclick="location.href='login.php'">Sun n Star</a></h3>
                        <p>Offers a peaceful stay with city views, vegetarian breakfast, and a 24-hour front desk.</p>
                        <a  class="booking-link" onclick="location.href='login.php'">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>Contact Us: <a href="mailto:info@satnadistrict.com">info@satnadistrict.com</a> | Phone: +91-123456789</p>
        <p>Follow us on: <a href="#">Facebook</a> | <a href="#">Instagram</a> | <a href="#">Twitter</a></p>
    </footer>

</body>
</html>
