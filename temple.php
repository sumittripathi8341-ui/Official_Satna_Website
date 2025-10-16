<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <script>
        document.addEventListener('copy', function(event){
            event.preventDefault();
            const textToCopy ="";
            event.clipboardData.setData('text/plain', textToCopy);
        });
    </script>
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

        .link {
            font-weight: 900;
        }
        button:hover {
            box-shadow: 0px 0px 7px 4px rgba(0, 0, 0, 0.6);
        }
        .about{
            margin-top: 50px;
            cursor: text;
            font-weight: 900;
        }
        .content{
            display: flex;
            align-items: center;
       }
       .schools{
          margin-left: 1%;
          width: 190%;
          font-size: 20px;
          line-height: 1.5;
        }
        .image{
            width: 100%;
            height: auto;
       }
        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            margin-left: 10px;
            align-items: center;
            overflow: hidden;
            box-shadow: 10px 10px 20px rgba(0,0,0,0.6);
        }

        .image-gallery img {
            object-fit: cover;
             width: 300%;
              height: auto;
              margin-left: 10px;
            align-items: stretch;
            box-shadow: 10px 10px 20px rgba(0,0,0,0.6);
        }
        button:hover{
            box-shadow: 0px 0px 7px 4px rgba(0, 0, 0, 0.6);
        }
        #containar {
            margin-top: 5px;
            display: flex;
            margin-left: auto;
            margin-right: auto;
            width: 75vw;  
            height: 450px;  
            position: relative;
            overflow: hidden;
            justify-content: center;
            align-items: center;
        }

        .carousel-inner {
            transition: none;
            box-shadow: none;
        }

        .carousel-control:focus, 
        .carousel-control:active {
            outline: none;
            box-shadow: none;
        }

        .custom-prev-btn {
        position: absolute;
        top: 50%;
        left: 10px;
        z-index: 10;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 10px 20px;
        font-size: 18px;
        border-radius: 50%;
        cursor: pointer;
      }

      .custom-next-btn {
        position: absolute;
        top: 50%;
        right: 10px;
        z-index: 10;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 10px 20px;
        font-size: 18px;
        border-radius: 50%;
        cursor: pointer;
      }

        .carousel-inner > .item img {
            width: 75%;
            margin-left: auto;
            margin-right: auto;
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
            <li><a href="#" onclick="location.href='temple.php'"style="background-color: #007bff;">TEMPLES</a></li> 
            <li><a href="#" onclick="location.href='hotels.php'">HOTELS</a></li>
        </ul>
    </nav>
<br>
<img src="https://newandolder.com/wp-content/uploads/2024/09/satna-venkateshar-mandir-1024x557.webp" alt="Satna District" class="full-width-image">

    
<div class="about" style="font-size: 50px; margin-left : 1%;">Top Temple of District Satna</div>
<div class="content">
    
    <p class="schools">
        <b>1. Shree Venkateshwar Mandir</b><br>
        Located near Mukhtyarganj, the Venkatesh Temple was built in 1876. <br>
        Made of red stone and reflected in ripples on the waters of the pond it exudes a tremendous sense of peace and calm. <br>
        Venkatesh Mandir, situated in Tirumala, Andhra Pradesh, is a revered Hindu temple dedicated to Lord Venkateswara, an incarnation of Lord Vishnu. This sacred site, built in the 16th century by the Vijayanagara Empire, attracts millions of devotees worldwide. The temple complex boasts stunning architecture, sacred waterfalls like Papavinasham and Akasa Ganga, and a museum. Daily rituals and festivals like Brahmotsavam and Vaikunta Ekadasi are celebrated with grandeur. Open from 3:00 AM to 1:00 AM, the temple offers various accommodations and darshan timings. Visitors can reach by air (Tirupati Airport), rail (Tirupati Railway Station), or bus.
        Developed based on the design of the south Indian temples, it is said that it took about 49 years to make the temple where the workers came from southern India. <br>
        The religious events led here include the Guru Purnima, the Jhulan Festival, Narasimha Chaturdashi, Janmashtami, Ramnavmi, Sharad Purnima and more. Founded by Randaman Singh this temple is also one of the oldest in the Vindhya region.</p>
    <div class="image-gallary">
        <img src="https://www.holidify.com/images/cmsuploads/compressed/29_20190304145837.jpg" width="1500" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);">Shree Venkateshwar Mandir, Satna</div>

    </div>
</div>
<br><br>
<div class="content">
<div class="image-gallary">
        <img src="https://content3.jdmagicbox.com/comp/satna/p4/9999p7672.7672.170315163920.d3p4/catalogue/ram-van-temple-ramvan-satna-tourist-attraction-f61lqvmo97.jpg" width="600" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);">Ramvan temple, Satna</div>
    </div>
    <p class="schools" style="width: 64%;">
        <b>2. Ramvan Temple </b><br>
        Ramvan in Satna, Madhya Pradesh, is a revered religious site and tourist attraction. Located approximately 65 km from Rewa, it holds great significance as the spot where Lord Rama rested during his exile. One of the main temples is the Hanuman Mandir. Devotees believe that Rama's footprints are embedded here, making it a sacred destination for Hindus. The site boasts an ancient Ram Temple amidst beautiful gardens and scenic surroundings, overlooking the Baghni River.

        Visitors can participate in daily aarti and puja ceremonies, and witness vibrant celebrations during Ram Navami. The temple remains open from 6:00 AM to 8:00 PM, making it an ideal visit between October and March. For accommodations, options are available nearby. <br>
        Ramvan is for both the young and old. The lush greenery is inviting for kids, and the spiritual element puts one instantly at ease. The atmosphere is calming, and the well-maintained gardens and premises make it one of the most visited sites of Satna. <br>

        The Tulsi Museum at Ramvan is the sculptures from the ancient temples are preserved. <br>
        They give a peak into the artistry and devotion of the earlier generations.</p>
   
</div>
<br><br>
<div class="content">
    
    <p class="schools" style="width: 70%;">
        <b>3. Gaivinath Dham, Birsinghpur </b><br>
        Birsinghpur is situated on the north east in Satna district, at a distance of about 34 km from Satna and 61 km from Rewa. Another two road goes from Birsinghpur to Rewa via Semariya and second Chitrakoot via Majhgawan at a distance of about 60 kilometres (37 mi). Another road goes from Birsinghpur to Satna, Madhya Pradesh via Jaitwar, Kothi (MP SH-52). Birsinghpur has a 10th century temple of Lord Shiva, which is also known as the Gaivinath temple. Birsinghpur is a one of major pilgrim center for local area around Satna and Rewa district. <br>
        This sacred spot holds great spiritual significance, attracting devotees and tourists seeking enlightenment and cultural experiences. Open daily from 7:00 AM to 7:30 PM, Gavinath Dham offers a convenient and peaceful ambiance for visitors. Located in the heart of Birsinghpur, it's a must-visit destination for those exploring the region. For planning purposes, consider visiting TripAdvisor or contacting local tourism offices for more information.</p>
<div class="image-gallary">
        <img src="https://newandolder.com/wp-content/uploads/2024/09/gaivinath-shiv-temple-jpg.webp" width="600" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);">Gaivinath Dham, Satna</div>
    </div>
</div>
<br><br>

<div class="content">
<div class="image-gallary">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRczUMwJ35m03Y1370-DAxExer0eC-ytstLWQ&s" width="600" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);"> Chitrakoot</div>
    </div>
    <p class="schools" style="width: 64%;">
        <b>4. Chitrakoot</b><br>
        This sacred destination is nestled along the Mandakini River and is associated with Lord Rama's exile. The dham boasts ancient temples, including the Ram Ghat, Hanuman Dhara, and Sati Anusuya Ashram. Devotees flock to participate in daily aarti ceremonies and take holy dips in the river. Chitrakoot Dham's serene atmosphere, scenic beauty, and spiritual significance make it an ideal destination for seekers of tranquility and enlightenment. Visit between October and March for an unforgettable experience.
        it is a place of religious, cultural, historical and archaeological importance, situated in the Baghelkhand region. <br>
        It borders the Chitrakoot district in Uttar Pradesh, whose headquarters Chitrakoot Dham is located nearby. The city lies in the historical Chitrakoot region, which is divided between the present-day Indian states of Uttar Pradesh and Madhya Pradesh.<br>

        It is known for a number of temples and sites mentioned in Hindu scriptures</p>

</div>
<br><br>

<div class="content">
    
    <p class="schools" >
        <b>5. Pashupatinath Temple</b><br>
        The Pashupatinath Temple is a Hindu temple dedicated to Pashupati, a form of Shiva. It is is situated on the north east in Satna district, at a distance of about 3 km from Satna. Pashupatinath temple is given a status of one of the most sacred Shiva Kshetras (abodes of Shiva) in Skanda Purana, and is also one of the Paadal Petra Sthalams (Tamil Tevara Sthalam) of Tevaram.The temple is considered to be other half of Kedarnath Temple,[5][6] both complementary to each other, and is also worshipped as the head of Shiva with his body in Kashi Vishwanath in India.[7][8][9][10] The main temple priests are, as a tradition, Vedic Dravida Brahmin scholars from Karnataka educated by Śrī Śaṅkarāćārya Dakṣiṇāmnāya Pīṭha, Sringeri.
        <br></p>
<div class="image-gallary" style="width: 145%;">
        <img src="https://images.news18.com/ibnkhabar/uploads/2024/07/HYP_4539748_img20240710wa0087_watermark_10072024_224908_6.jpg"  width="600" height="" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);">Pashupatinath Temple,Satna</div>
    </div>
</div>
<br><br>
<div style="height: 50mm; width: 210mm;"></div>

<footer class="footer">
        <p>Contact Us: <a href="mailto:info@satnadistrict.com">info@satnadistrict.com</a> | Phone: +91-123456789</p>
        <p>Follow us on: <a href="#">Facebook</a> | <a href="#">Instagram</a> | <a href="#">Twitter</a></p>
    </footer>

</body>
</html>