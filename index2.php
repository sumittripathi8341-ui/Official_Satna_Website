<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
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
            transition: transform 1.1s ease;
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
        .center-container{
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
       .image-container{
        display: flex;
        align-items: center;
       }
       .image{
        width: 50%;
        height: 50%;
        margin-left: 0;
       }
       .satna{
        margin-left: 1%;
        width: 80%;
        font-size: 20px;
        line-height: 1.5;
       }
       .image-gallery {
          display: flex;
          flex-wrap: wrap;
          width: 50%;
          margin-left: 30px;
        }
        .image-gallery img {
          width: 100%;
          height: 50%;
          height: auto;
          margin-top: 20px;
          align-items: stretch;
          box-shadow: 10px 10px 20px rgba(0,0,0,0.6); 
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
        .full-width-image {
    width: 100%;  
    height: 50vh; /* Set height to 50% of viewport */
    object-fit: cover; /* Ensures the image fills the space properly */
    display: block;  
    margin: 0;
    padding: 0;
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
<link rel="shortcut icon" href="images/TAB_LOGO.png">
<nav>
        <div class="navbar-logo">
            <img src="tourist.png" title="SATNA" alt="SATNA">
        </div>
        <div class="text">District Satna</div>    
        <ul>
            <li><a href="#" onclick="location.href='first.php'" >HOME</a></li>
            <li><a href="#" onclick="location.href='index2.php'"style="background-color: #007bff;">ABOUT</a></li>
            <li><a href="#" onclick="location.href='history.php'">HISTORY OF SATNA</a></li>
            <li><a href="#" onclick="location.href='school.php'">SCHOOLS</a></li> 
            <li><a href="#" onclick="location.href='colleges.php'">COLLEGES</a></li> 
            <li><a href="#" onclick="location.href='temple.php'">TEMPLES</a></li> 
            <li><a href="#" onclick="location.href='hotels.php'">HOTELS</a></li>
        </ul>
        
    </nav>
    <br>
    
    <img src="https://chaloghumane.com/wp-content/uploads/2021/08/Satna.jpeg" alt="Satna District" class="full-width-image">
    
    
<div class="about" style="font-size: 50px; margin-left: 1%;">About Satna District</div>
<div class="image-container">
    <p class="satna">
    <b>Satna</b> is a city in the Indian state of Madhya Pradesh. It serves as the headquarters of Satna district. It is 7th largest city and 8th most populous city of the state. The city is 500 km east of the state capital Bhopal. The city is distributed over a land area of 111.9 square kilometres.<br>
    Satna is a district in Madhya Pradesh, India. It is located in the Vindhyachal Plateau and is situated between the Vindhyachal and Satpura ranges. The district is part of the Ganga basin area. <br>
    The district has an area of 7,502km<sup>2</sup>, and a popoulation of 22,28,935(2011 census), 20.63% of which is urban.the district has a population density of 249 persons per km<sup>2</sup>.<br>
    Satna has been selected as one of the hundred Indian cities to be developed as a smart city under PM Narendra Modi's flagship Smart Cities Mission. <br><br>
    <div class="image-gallery">
    <img src="satna_district_map.png"  height="10%" width="80%"  class="image">
    </div>
    </p>
</div>

<div class="image-container">
    <p class="satna">
    <b>Airways </b><br>
    Satna has an airport named Bharhut Airport, built in 1970. Closest major airport is in Allahabad Uttar Pradesh, which is approximately 192 kilometres from Satna. The nearest major airport to Satna in the state is Jabalpur Airport which is approximately 200 kilometres from the city. Another airport is Khajuraho airport (HJR) which is approximately 112-kilometre from city. <br>
    Satna Airport (IATA: TNI, ICAO: VEST) is a domestic airport near Satna in Madhya Pradesh, India. It is operated by the Airports Authority of India (AAI).

    AAI commenced the airport's development in January 2024, as part of the Government's UDAN Regional Connectivity Scheme, constructing a 1200 metre long runway and a terminal building. The airport received its aerodrome licence from the DGCA in December 2024.<br>
    <div class="image-gallery">
        <img src="https://images.bhaskarassets.com/web2images/521/2024/07/22/666bfea7-e456-4ce0-ad32-cddc0258c147_1721594558708.jpg" height="100%" width="110%"  class="image">
    </div></p></div>

<div class="image-container">
<p class="satna">
    <b>Railway Line View of Satna</b> <br>
    Satna Junction railway station (IRCTC code STA) is a major railway station in the Western-Central railway division on the route between Jabalpur Junction and Allahabad. It is a junction and the branch goes to Rewa. It lies on the Howrah–Allahabad–Mumbai line, a train route connecting Mumbai and Howrah. A diesel Locoshed for the Western Central Railway is located in the city. Distance from Satna to Jabalpur Junction is approximate 200 kilometres and Allahabad is approximate 186 kilometres. <br><br>
    <div class="image-gallery">
        <img src="https://media.istockphoto.com/id/1268301459/photo/trains-new-delhi-railway-station-india.jpg?s=170667a&w=0&k=20&c=lWlIU_61ENV4FYsP1JCg7rEK3JAxPiT9_jDgw2meV2w=" height="100%" width="110%"  class="image">
    </div></p></div>

    
<div class="image-container">
<p class="satna">
    <b>Cement Factories</b><br>
    Satna, Madhya Pradesh is a major cement-producing city in India, contributing around 8–9% of the country's total cement production. <br>
    Satna has several cement factories, including: <br>
    i. Satna Cement Works: Produces Ordinary Portland Cement (OPC) and Portland Pozzolana Cement (PPC). It has a production capacity of 2.20 million tonnes per annum. <br>
    ii. Prism Cement Plant: One of the largest cement plants in India at a single location. It produces PPC and OPC for specialized cement concrete applications. <br>
    At Satna Cement Works Portland Pozzolana Cement (PPC) and Ordinary Portland Cement (OPC) (43 grade) are manufactured. The plant has a production capacity of 2.20 million tonnes per annum. <br><br>
    <div class="image-gallery">
        <img src="https://i.ytimg.com/vi/g3gQ-tqUZ9Q/maxresdefault.jpg" height="100%" width="110%" class="image">
    </div></p></div>
    
<div class="image-container">
<p class="satna">
    <b>Satna Smart City Buses </b><br>
    Bus services connect Satna with various cities of Madhya Pradesh and some cities of Uttar Pradesh. The city is well-connected by state highways and a national highway. Satna is connected to the longest National Highway: NH-7. State highway NH-75 passes from the heart of Satna and connects it to cities of Panna and Rewa, which are other important cities of northern Madhya Pradesh.
    Satna City Transport Services Ltd (SCTSL) operates buses in the city. The buses designated as City Bus operate on four routes in the city. The buses are colour-coded into two colours: Orange (Intracity) and Green (Intercity) according to their routes.
    <div class="image-gallery">
        <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Satna_Smart_City_Buses_.jpg/220px-Satna_Smart_City_Buses_.jpg"  height="100%" width="110%" class="image">
    </div></p></div>

       
</p> 




<div class="center-container" style="margin-top: 50px;" > 
    <img alt="" src="https://bookuradmission.com/campus_tour/16218427731.png" width="50%" height="100%" >
</div>
<div style="text-align: center; font-size:20px; font-weight:bold" >VITS College Satna</div>

<div class="center-container"  style="margin-top: 50px;">
    <img alt="" src="https://i.ytimg.com/vi/Aa6N1W5YfCk/sddefault.jpg" width="50%" height="100%">
</div>
<div style="text-align: center; font-size:20px; font-weight:bold">St. Michael's School Satna</div>

<div class="center-container"  style="margin-top: 50px;">
    <img alt="" src="https://st.indiarailinfo.com/kjfdsuiemjvcya23/0/1/5/6/4564156/0/img202002131403513200763.jpg"  width="50%" height="100%">
</div>
<div style="text-align: center; font-size:20px; font-weight:bold">Satna Junction</div>

<!-- <div class="center-container"  style="margin-top: 50px;">
<img alt="" src="" width="50%" height="100%" >
</div>
<div style="text-align: center; font-size:20px; font-weight:bold">Cement Factory in Satna</div> -->
</div>
<div style="height: 50mm; width: 210mm;"></div>
<footer class="footer">
        <p>Contact Us: <a href="mailto:info@satnadistrict.com">info@satnadistrict.com</a> | Phone: +91-123456789</p>
        <p>Follow us on: <a href="#">Facebook</a> | <a href="#">Instagram</a> | <a href="#">Twitter</a></p>
    </footer>
</body>

</html>