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
        #myCarousel {
    width: 100vw;  /* Full width */
    height: 80vh;  /* 70% of the screen height */
    margin: auto;
    overflow: hidden;
    position: relative; /* Ensures buttons are positioned relative to the slider */
}

.carousel-inner, .carousel-item {
    width: 100%;
    height: 90vh;
}

.carousel-inner .item img {
    width: 100%;
    height: 80vh;
    object-fit: cover;  /* Ensures the image fills the container */
    object-position: top ; /* Align image to the top */
}

.custom-prev-btn, .custom-next-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    background-color: rgba(0, 0, 0, 0.6);
    color: white;
    padding: 15px 20px;
    font-size: 24px;
    border-radius: 50%;
    border: none;
    cursor: pointer;
    transition: 0.3s ease-in-out;
}

.custom-prev-btn:hover, .custom-next-btn:hover {
    background-color: rgba(255, 255, 255, 0.8);
    color: black;
}

.custom-prev-btn {
    left: 20px;
}

.custom-next-btn {
    right: 20px;
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

        /* Marquee Scrolling Text */
        .marquee-text {
            font-size: 18px;
            font-weight: bold;
            color: white;
            background: darkred;
            padding: 10px 0;
            text-transform: uppercase;
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
            <li><a href="#" onclick="location.href='first.php'" style="background-color: #007bff;">HOME</a></li>
            <li><a href="#" onclick="location.href='index2.php'">ABOUT</a></li>
            <li><a href="#" onclick="location.href='history.php'">HISTORY OF SATNA</a></li>
            <li><a href="#" onclick="location.href='school.php'">SCHOOLS</a></li> 
            <li><a href="#" onclick="location.href='colleges.php'" >COLLEGES</a></li> 
            <li><a href="#" onclick="location.href='temple.php'">TEMPLES</a></li> 
            <li><a href="#" onclick="location.href='hotels.php'">HOTELS</a></li>
    </ul>
</nav>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
        <div id="containar">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="item active" >
                    <img src="https://www.tripbeam.ca/blog/wp-content/uploads/2024/02/Ram-Van.jpg"  alt="Chania"/>
                </div>
                <div class="item">
                    <img src="https://newandolder.com/wp-content/uploads/2024/09/shri-venkateshwar-temple-satna-1024x557.webp" alt="Chania"/>
                </div>
                <div class="item">
                    <img src="https://c8.alamy.com/comp/2YJ3RCK/view-of-ram-ghat-with-ferry-boats-on-the-mandakini-river-located-in-chitrakoot-satna-madhya-pradesh-india-2YJ3RCK.jpg"  alt="Flower"/>
                </div>
                <div class="item">
                    <img src="https://images.news18.com/ibnkhabar/uploads/2024/07/HYP_4539748_img20240710wa0087_watermark_10072024_224908_6.jpg"  alt="Flower"/>
                </div>
            </div>

            <a class="custom-prev-btn" href="#myCarousel" role="button" data-slide="prev">&#10094;</a>
            <a class="custom-next-btn" href="#myCarousel" role="button" data-slide="next">&#10095;</a>
        </div>
    </div>

    <marquee class="marquee-text" behavior="scroll" direction="left">
    Welcome to Satna! Explore the best places, history, schools, colleges, temples, and hotels in the district. Stay updated with the latest events and attractions!
</marquee>

<!-- Heading -->
<div class="container">
    <h1 class="heading">Explore More in Satna</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="satna_district_map.png" alt="About Satna">
                <h3>About Satna</h3>
                <p>Learn about the rich history of Satna, from ancient times to modern developments.</p>
                <a class="card-link" href="index2.php">Explore</a>
            </div>
        </div>
        <!-- History -->
        <div class="col-md-4">
            <div class="card">
                <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/9/90/%E0%A4%AD%E0%A5%82%E0%A4%AE%E0%A4%B0%E0%A4%BE_%E0%A4%95%E0%A4%BE_%E0%A4%8F%E0%A4%95%E0%A4%AE%E0%A5%81%E0%A4%96%E0%A5%80_%E0%A4%B6%E0%A4%BF%E0%A4%B5%E0%A4%B2%E0%A4%BF%E0%A4%82%E0%A4%97_.jpg/220px-%E0%A4%AD%E0%A5%82%E0%A4%AE%E0%A4%B0%E0%A4%BE_%E0%A4%95%E0%A4%BE_%E0%A4%8F%E0%A4%95%E0%A4%AE%E0%A5%81%E0%A4%96%E0%A5%80_%E0%A4%B6%E0%A4%BF%E0%A4%B5%E0%A4%B2%E0%A4%BF%E0%A4%82%E0%A4%97_.jpg" alt="History of Satna">
                <h3>History of Satna</h3>
                <p>Learn about the rich history of Satna, from ancient times to modern developments.</p>
                <a class="card-link" href="history.php">Explore</a>
            </div>
        </div>

        <!-- Schools -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://dpssatna.com/images/about-2.png" alt="Schools in Satna">
                <h3>Schools</h3>
                <p>Find the best schools in Satna for quality education and extracurricular activities.</p>
                <a class="card-link" href="school.php">Explore</a>
            </div>
        </div>
    </div>
<br>
    <div class="row">
        <!-- Colleges -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://medicinecolleges.in/assets/colleges/3975/bannerimage1.jpg">
                <h3>Colleges</h3>
                <p>Discover top colleges in Satna for higher education and career growth.</p>
                <a class="card-link" href="colleges.php">Explore</a>
            </div>
        </div>
    
        <!-- Temples -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiolHaVK-XsfWQAij0DD5zQg4BJjH-1H5I6Q&s" alt="Temples in Satna">
                <h3>Temples</h3>
                <p>Visit the famous temples of Satna, known for their architecture and spirituality.</p>
                <a class="card-link" href="temple.php">Explore</a>
            </div>
        </div>

        <!-- Hotels -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://3.imimg.com/data3/FM/MD/MY-1906485/hotel-booking.jpg" alt="Hotels in Satna">
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
        <p>Follow us on: <a href="#">Facebook</a> | <a href="#">Instagram</a> | <a href="#">Twitter</a></p>
    </footer>

</body>
</html>
