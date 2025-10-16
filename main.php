<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS for layout and Carousel -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <style>
        /* Basic styling for the container and text */
        div {
            background-color: white;
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            height: 150px;
            padding: 20px;
        }
        .container-img {
            object-fit: cover;
            width: 100%;
            height: 150px;
        }
        .text {
            width: 100%;
            font-size: 50px;
            font-weight: bold;
            color: #333;
            padding: 20px;
        }

        /* Navigation Bar */
        nav {
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
            height: 50px;
            background-color: #f2f2f2;
            border-bottom: 3px solid black;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        nav ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            font-weight: 900;
            text-decoration: none;
            color: #333;
        }
        nav ul li a:hover {
            color: #007bff;
            font-weight: bold;
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        /* Carousel styling */
        .carousel-inner > .item > img {
            max-width: 50%;
            max-height: 30%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        /* Custom previous and next buttons */
        .custom-prev-btn,
        .custom-next-btn {
            position: absolute;
            top: 50%;
            z-index: 10;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 50%;
            cursor: pointer;
        }
        .custom-prev-btn {
            left: 10px;
        }
        .custom-next-btn {
            right: 10px;
        }

        /* About section and image gallery */
        .about {
            font-size: 50px;
            margin-top: 50px;
        }

        .satna {
            font-size: 20px;
            line-height: 1.5;
        }

        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 30px;
        }
        .image-gallery img {
            width: 100%;
            max-width: 300px;
            height: auto;
            box-shadow: 10px 10px 20px rgba(0,0,0,0.6);
        }

        /* Image centering */
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        .center-container img {
            width: 50%;
            height: auto;
        }
    </style>
</head>
<body>

    <!-- Container with header and image -->
    <div class="container" style="margin-top: 50px;">
        <img src="tourist.png" alt="SATNA" style="height: 150%; width: 20%; filter: drop-shadow(1px 1px 20px red);">
        <div class="text">District Satna</div>
    </div>

    <!-- Navigation bar -->
    <nav>
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="history.php">HISTORY OF SATNA</a></li>
            <li><a href="school.php">SCHOOLS</a></li>
            <li><a href="#">COLLEGES</a></li>
            <li><a href="#">TOURISM</a></li>
            <li><a href="#">TEMPLES</a></li>
            <li><a href="#">HOTELS</a></li>
        </ul>
    </nav>

    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2200">
        <!-- Indicators -->
        <div id="containar">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="https://cms.patrika.com/wp-content/uploads/2019/08/03/1_8.jpg" alt="Chania">
                </div>
                <div class="item">
                    <img src="https://www.swadeshnews.in/h-upload/2023/10/04/1083349-c3.webp" alt="Chania">
                </div>
                <div class="item">
                    <img src="https://images.bhaskarassets.com/web2images/521/2022/03/27/ddd0797d-867f-48dd-9863-0ee617fa91841648362197357_1648371160.jpg" alt="Flower">
                </div>
                <div class="item">
                    <img src="https://images.news18.com/ibnkhabar/uploads/2024/07/HYP_4539748_img20240710wa0087_watermark_10072024_224908_6.jpg" alt="Flower">
                </div>
            </div>

            <!-- Custom Previous and Next Buttons -->
            <a class="custom-prev-btn" href="#myCarousel" role="button" data-slide="prev">&#10094;</a>
            <a class="custom-next-btn" href="#myCarousel" role="button" data-slide="next">&#10095;</a>
        </div>
    </div>

    <!-- About Satna Section -->
    <div class="about">About Satna District</div>
    <div class="satna">
        <b>Satna</b> is a city in the Indian state of Madhya Pradesh. It serves as the headquarters of Satna district. The city is known for its proximity to the major cement industry and is well-connected by air and rail. The district is part of the Smart Cities Mission.
        <br><br>
        <b>Airways</b><br>
        Satna has an airport named Bharhut Airport, with Jabalpur and Khajuraho as the nearest major airports.
        <br><br>
        <b>Railway Line View of Satna</b><br>
        Satna Junction is a major railway station on the Howrah–Allahabad–Mumbai line.
    </div>

    <!-- Image Gallery -->
    <div class="image-gallery">
        <img src="satna_district_map.png" alt="Satna Map">
        <img src="https://images.bhaskarassets.com/web2images/521/2024/07/22/666bfea7-e456-4ce0-ad32-cddc0258c147_1721594558708.jpg" alt="Satna Landscape">
        <img src="https://media.istockphoto.com/id/1268301459/photo/trains-new-delhi-railway-station-india.jpg" alt="Railway Station">
        <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Satna_Smart_City_Buses_.jpg" alt="Satna City Buses">
    </div>

    <!-- Image Section -->
    <div class="center-container">
        <img src="https://lh5.googleusercontent.com/p/AF1QipPW0aZnRuRi61Ji7fCuwuU6pjiYHI-FpBow5SvJ=w530-h298-k-no" alt="VITS College Satna">
    </div>
    <div style="text-align: center; font-size: 20px; font-weight: bold;">VITS College Satna</div>

    <div class="center-container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/St._Michael%27s_School_Satna.jpg/640px-St._Michael%27s_School_Satna.jpg" alt="St. Michael's School Satna">
    </div>
    <div style="text-align: center; font-size: 20px; font-weight: bold;">St. Michael's School Satna</div>

    <div class="center-container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/3/31/Satna_Railway_Station.jpg" alt="Satna Junction">
    </div>
    <div style="text-align: center; font-size: 20px; font-weight: bold;">Satna Junction</div>

    <div class="center-container">
        <img src="https://upload.wikimedia.org/wikipedia/commons/d/df/Satna_Cement_Factory.jpg" alt="Satna Cement Factory">
    </div>
    <div style="text-align: center; font-size: 20px; font-weight: bold;">Satna Cement Factory</div>

</body>
</html>
