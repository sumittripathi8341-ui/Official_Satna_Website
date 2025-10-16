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
</head>
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
        .image-container{
            display: flex;
            align-items: start;
       }
       .image{
         width: 50%;
            height: 50%;
            
       }
       .satna{
            width: 50%;
           font-size: 16px;
            line-height: 1.5;
       }
        .image-gallery {
             display: flex;
              flex-wrap: wrap;
              width: 60%;
             margin-right: 10px;

        }

        .image-gallery img {
             width: 33.33%;
              height: auto;
              margin-left: 20px;
            align-items: stretch;
            
        }

        .history {
          margin-left: 1%;
          width: 80%;
          font-size: 20px;
          line-height: 1.5;
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
    object-position: top 20%;
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
<body>
<nav>
        <div class="navbar-logo">
            <img src="tourist.png" title="SATNA" alt="SATNA">
        </div>
        <div class="text">District Satna</div>    
        <ul>
            <li><a href="#" onclick="location.href='first.php'">HOME</a></li>
            <li><a href="#" onclick="location.href='index2.php'">ABOUT</a></li>
            <li><a href="#" onclick="location.href='history.php'" style="background-color: #007bff;">HISTORY OF SATNA</a></li>
            <li><a href="#" onclick="location.href='school.php'">SCHOOLS</a></li> 
            <li><a href="#" onclick="location.href='colleges.php'">COLLEGES</a></li> 
            <li><a href="#" onclick="location.href='temple.php'">TEMPLES</a></li> 
            <li><a href="#" onclick="location.href='hotels.php'">HOTELS</a></li>
        </ul>
    </nav>
<br>
    <img src="https://thumbs.dreamstime.com/b/ruined-ancient-architecture-temple-bank-lake-beautiful-nature-landscape-birgarh-satna-mp-india-ancient-ruin-89507647.jpg" alt="Satna District" class="full-width-image">

<div class="about" style="font-size: 50px; margin-left : 1%;">History of Satna</div>
<p style="margin-left: 1%; width: 99%; font-size: 20px; line-height: 1.5;">
        <b>Satna</b> district is part of the history of the region known as <i>Baghelkhand</i>, a very large portion of which was ruled by the treaty state of Rewa, while a small part towards the west was ruled by feudatory chiefs, holding their States under sanads given by the British rulers. There were eleven in all important ones being Maihar, Nagod, Kothi, Jaso, Sohawal and Baraundha and the five Chaube Jagirs of Paldeo, Pahra, Taraon, Bhaisundha and Kamta-Rajula. <br><br>
        The early Budhist books, the Mahabharat etc, connect the Baghelkhand tract with rulers of the Haihaya, Kalchuri or Chedi clan, who are believed to have gained sufficient importance sometime during the third century A.D. Their original habitat is placed on the Narbada with Mahishmati (identified by some with Maheshwar in west Nimar district) as the capital from where they seem to have been driven eastwards. They had acquired the fort of Kalinjara (a few miles beyond the border of Satna district, in U.P.), and with this as base, they extended their dominious over Baghelkhand. During the fourth and fifth centuries, the Gupta dynasty of Magadha was paramount over this region as is shown by the records of the feudatory chiefs of Uchchakalpa (Unchehra in Nagod tehsil) and the Parivrajak Rajas of Kot (in Nagod tehsil). The chief stronghold of the Chedi clan was Kalinjar, and their proudest title was Kalanjaradhishwara (Lord of Kalanjar). The Kalchuris received their first blow at the hand of Chandel chief Yashovarmma (925-55), who seized the fort of Kalinjar and the tract surrounding it. The Kalchuris were still a powerful tribe and continued to hold most of their possessions until the 12th century. <br><br>
          
</p>
<div class="image-container">
    <p class="history">
    The chiefs of Rewas were Baghel Rajputs descended from the Solanki clan which ruled over Gujrat from the tenth to the thirteenth century. Vyaghra deo, brother of the ruler of Gujrat, is said to have made his way into northern India about the middle of the thirteenth century and obtained the fort of Marpha, 18 miles north-east of Kalinjar. His son Karandeo married a Kalchuri (Haihaya) princess of Mandla and received in dowry the fort of Bandhogarh (now in the tehsil of the same name in Shahdol district), which, until its destruction in 1597 by Akbar was the Baghel Capital.

    In 1298, Ulugh Khan, acting under order of emperor Alauddin drove the last Baghel ruler of Gujrat from his country and this is believed to have caused a considerable migration of the Baghels to Bandhogarh. Until the 15th century the Baghels of Bandhogarh were engaged in extending their possessions and escaped the attention of the Delhi kings. in 1498-9, Sikandar Lodi failed in his attempt to take the fort of Bandhogarh. The Baghel king Ramchandra (1555-92), was a contemporary of Akbar. Tansen, the great musician, was in the court of Ramchandra and from their he was summoned by Akbar to his court. After the death of Birdhabra, Ramchandra's son, a minor named Vikramaditya acceded to the throne of Bandhogarh. His accession gave rise to disturbances. Akbar intervened and captured and dismantled the Bandhogarh fort in 1597 after a seize of eight months. It is after this that the town of Rewa started gaining in importance. It is said to have been founded by Raja Vikramaditya in 1618 (which perhaps means that he undertook the construction of palaces and other buildings there because the place had already assumed importance in 1554 when it was held by Jalal Khan son of emperor Shershah). <br><br>

    In 1803, after the treaty of Bassein, the British made overtures of alliance to the ruler of Rewa, but the latter rejected them. In 1812 , during the time of Raja <b>Jaisingh</b>(1809-35), a body of Pindaris raided Mirzapur from Rewa territory. Upon this <b>Jaisingh</b> was called upon to accede to a treaty, in which he acknowledged the protection of the British Government, and agreed to refer all disputes with neighbouring chiefs to their arbitration and to allow British troops to march through or be cantoned in his territories. At the mutiny of 1857, Maharaja <b>Raghuraj Singh</b> helped the British in quelling the uprisings in the neighbouring Mandla and Jabalpur district , and in Nagod which is now a part of Satna district. For this, the king was rewarded by restoration to him of the Sohagpur (Shahdol) and Amarkantak parganas, which had been seized by the Marathas in the beginning of the century . The rulers of Rewa State bore the title of ‘His Highness’ and “Maharaja” and received a salute of 17 guns. Most of the Raghuraj Nagar and entire Amarpatan tehsil of the present Satna district were in the Rewa State prior to the formation of Vindhya Pradesh.<br><br>
    
    At nearby Bharhut are the remains of a 2nd-century BC <b>Buddhist stupa</b>, first discovered in 1873 by the archaeologist Alexander Cunningham; most of the finds from this site were sent to the Indian Museum. Some of them were also sent to The Metropolitan Museum of Art in New York. <br><br>
    <b>Satna</b> is a city in the Indian state of Madhya Pradesh. It serves as the headquarters of Satna district. It is 7th largest city and 8th most populous city of the state. The city is 500&nbsp;km east of the state capital Bhopal. The&nbsp;city is distributed over a land area of 111.9 square kilometres.
    Satna has been selected as one of the hundred Indian cities to be developed as a smart city under PM Narendra Modi's flagship Smart Cities Mission. <br><br>
    From then until the 15th century, the Baghels of Bandhavgarh were engaged in extending their possessions and so they escaped the attention of the Delhi Sultans. In 1498–99, Sikandar Lodi failed in his attempt to take the fort of Bandhavgarh. <br><br>
    The Baghel King <b>Ramchandra</b> (1555–92) was a contemporary of padshah (emperor) Akbar the Great. Tansen, the great musician, was in the court of <b>Ramchandra</b> and from there Akbar summoned him to his Mughal court. After the death of Birdhabra, Ramchandra's son Vikramaditya acceded to the Rajput throne of Bandhogarh as a minor Raja, giving rise to civic disturbances. Akbar's generals intervened, capturing and dismantling the Bandhogarh fort in 1562. From then, the town of Rewa, along with the Sultanate of Malwa became a part of the Great Mughal Empire. <br><br>
    Following the Treaty of Bassein (1802), the British made overtures of alliance to the ruler of Rewa, but the later rejected them. In 1812, during the time of Raja Jaisingh (1809–35), a body of Pindaris raided Mirzapur from Rewa territory. As a result, Jaisingh was called upon to accede to a treaty, in which he acknowledged the protection of the British Government, and agreed to refer all disputes with neighbouring chiefs to their arbitration and to allow British troops to march through, or be cantoned within, his territories. <br><br>
    During the mutiny of 1857, Maharaja <b>Raghuraj Singh</b> helped the British in quelling the uprisings in the neighbouring Mandla and Jabalpur district, and in Nagod which is now a part of Satna district. For his part the king was rewarded by restoration of the Sohagpur (Shahdol) and Amarkantak parganas, which had been seized by the Marathas in the beginning of the century. <br><br>

</p>
<div class="image-gallary">
<img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj2cXdOZsKKVrJAYrpwEq_NkZIXkS5IT6JnkY9Ialpe94xzj0VEouak7lq7WAijzozrBCtR6s0X4NSpiNQObDW3JBhffxE4zkMWIAhptrlZs2vxVv3cSJFCibRg_yEOtpr_52JGRxxbwiTB/s1600/Satna.png" style="box-shadow: 10px 10px 20px rgba(0,0,0,0.6);"  height="50%" width="100%" alt="image"><br><br>
<img src="https://thumbs.dreamstime.com/b/remnant-ancient-hindu-temple-pathrigarh-satna-mp-india-vestige-which-historically-concerned-to-state-situated-near-72920290.jpg" style="box-shadow: 10px 10px 20px rgba(0,0,0,0.6);" height="50%" width="100%" alt="image"><br><br>
<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/9/90/%E0%A4%AD%E0%A5%82%E0%A4%AE%E0%A4%B0%E0%A4%BE_%E0%A4%95%E0%A4%BE_%E0%A4%8F%E0%A4%95%E0%A4%AE%E0%A5%81%E0%A4%96%E0%A5%80_%E0%A4%B6%E0%A4%BF%E0%A4%B5%E0%A4%B2%E0%A4%BF%E0%A4%82%E0%A4%97_.jpg/220px-%E0%A4%AD%E0%A5%82%E0%A4%AE%E0%A4%B0%E0%A4%BE_%E0%A4%95%E0%A4%BE_%E0%A4%8F%E0%A4%95%E0%A4%AE%E0%A5%81%E0%A4%96%E0%A5%80_%E0%A4%B6%E0%A4%BF%E0%A4%B5%E0%A4%B2%E0%A4%BF%E0%A4%82%E0%A4%97_.jpg" style="box-shadow: 10px 10px 20px rgba(0,0,0,0.6);" height="50%" width="100%" alt="image">
<div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);">Gupta era's Famous Bhoomra Shiv Temple in Satna District</div>
<br><br>
<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Bhoomra_Shiv_Temple_in_Unchahara.jpg/220px-Bhoomra_Shiv_Temple_in_Unchahara.jpg" style="box-shadow: 10px 10px 20px rgba(0,0,0,0.6);" height="50%" width="100%" alt="image">
<div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);">Bhoomra Shiv Temple in Unchahara </div>
<br><br>

</div>
</div>
</div>
<div style="height: 20mm; width: 150mm;"></div>

<footer class="footer">
        <p>Contact Us: <a href="mailto:info@satnadistrict.com">info@satnadistrict.com</a> | Phone: +91-123456789</p>
        <p>Follow us on: <a href="#">Facebook</a> | <a href="#">Instagram</a> | <a href="#">Twitter</a></p>
    </footer>
</body>
</html>