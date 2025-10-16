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
            max-height: 600px;
            width: 75%;
            margin-left: auto;
            margin-right: auto;
        }

        .content{
            display: flex;
            align-items: center;
       }
       .schools{
          margin-left: 1%;
          width: 100%;
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
             width: 90%;
              height: auto;
              margin-right: 0px;
            align-items: stretch;
            box-shadow: 10px 10px 20px rgba(0,0,0,0.6);
        }
        
        .full-width-image {
    width: 100%;  
    height: 50vh; /* Set height to 50% of viewport */
    object-fit: cover; /* Ensures the image fills the space properly */
    display: block;  
    margin: 0;
    padding: 0;
    object-position: center;
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
            <li><a href="#" target="_blank" style="background-color: #007bff;">COLLEGES</a></li> 
            <li><a href="#" onclick="location.href='temple.php'">TEMPLES</a></li> 
            <li><a href="#" onclick="location.href='hotels.php'">HOTELS</a></li>
        </ul>
    </nav>
<br>
<img src="https://content.jdmagicbox.com/v2/comp/raipur-chhattisgarh/r1/9999px771.x771.231228053300.a3r1/catalogue/shri-davara-university-raipur-chhattisgarh-iik50xupky.jpg" alt="Satna District" class="full-width-image">

    
        
<div class="about" style="font-size: 50px; margin-left : 1%;">Top Colleges of District Satna</div>  <br><br>
<div class="content">
    
    <p class="schools" style="width: 76%;" >
        <b>1. Vindhya Institute of Technology and Science</b><br>
        Vindhya Institute of Technology and Science is a private engineering college in Madhya Pradesh and is part of the Vindhya Group of Institutions. 
        VITS is known for its high-quality professional education and is considered one of the top private engineering colleges in the state.
        The college's mission is to transform its students into confident and responsible professionals with up-to-date knowledge and expertise in their chosen disciplines. <br>
        Courses Available <br>
            i)B.Tech/Diploma <br>
            ii)B.Ed/BA Ed/B.Sc Ed/B.EI.Ed/D EI Ed/DPSE<br>
            iii)B.A./B.Com/B.Sc/B.B.A/BCA <br>
            iv)MBA <br>
            v)B.Pharm/D.Pharm/M.Pharm <br>
         </p>
    <div class="image-gallary">
        <img src="https://images.shiksha.com/mediadata/images/1600849838phpmwZrc8.jpeg"  height="auto" width="100%" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);">VITS COLLEGE, SATNA</div>
    </div>
</div><br><br>
<div class="content">
<div class="image-gallary">
        <img src="https://images.shiksha.com/mediadata/images/1507895358phpTEsdgb.jpeg"  height="auto" width="100%" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);"> AKS UNIVERSITY, SATNA</div>
    </div>
    <p class="schools" style="width: 120%;">
        <b>2. AKS UNIVERSITY, SATNA</b><br>
        Amicable Knowledge Solution(AKS) is a private university in Satna, Madhya Pradesh, India. The university was established in 1996 by four brothers: Er. Anant Kumar Soni, Mr. Avanish Kumar Soni, and Mr. Ajay Kumar Soni. It is recognized by the University Grants Commission (UGC), a statutory body of the Government of India. <br>
        Courses Available <br>
            i)B.Tech/Diploma <br>
            ii)BA LLB/B.Com LLB/BBA LLB/LLB/LLM <br>
            iii)B.Ed/BA Ed/B.Sc Ed/B.EI.Ed/D EI Ed/DPSE<br>
            iv)B.A./B.Com/B.Sc/B.B.A/BCA <br>
            v)MBA/M.Tech <br>
            vi)B.Pharm/D.Pharm/M.Pharm <br>
         </p>
    
</div><br><br>
<div class="content">
    
    <p class="schools" style="width: 120%;">
        <b>3. DEGREE COLLEGE, SATNA</b><br>
        Amicable Knowledge Solution(AKS) is a private university in Satna, Madhya Pradesh, India. The university was established in 1996 by four brothers: Er. Anant Kumar Soni, Mr. Avanish Kumar Soni, and Mr. Ajay Kumar Soni. It is recognized by the University Grants Commission (UGC), a statutory body of the Government of India. <br>
        Courses Available <br>
        
            i)BA<br>
            ii)M.A<br>
            iii)B.Sc <br>
            iv)M.Sc<br>
            v)M.Com<br>
            vi) B.Com <br>
            vii)BBA <br>
         </p>
    <div class="image-gallary">
        <img src="https://cms.patrika.com/wp-content/uploads/2019/08/29/3_3.jpg"  height="auto" width="100%" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);">DEGREE COLLEGE, SATNA</div>
    </div>
</div><br><br>
<div class="content">
<div class="image-gallary">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4CxGVR6MA9ug-9j7dEw4DkkciidZfWBugo7nWDSfvLPpWOF3JnKjIOmhP-yNRFJYVM78&usqp=CAU" height="auto" width="100%" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);">SHREE RAMA KRISHNA GROUP OF INSTITUTION, SATNA</div>
    </div>
    <p class="schools" style="width: 67%;">
        <b>4. SHREE RAMA KRISHNA GROUP OF INSTITUTION, SATNA</b><br>
        At Shri Rama Krishna Group Of Institute, we are committed to fostering a dynamic learning environment where innovation, excellence, and integrity are paramount. Our Vision & Mission encapsulate our aspirations and guide our endeavors towards academic, personal, and professional growth.<br>
        Courses Available <br>
        
            i)B.Tech/Diploma <br>
            ii)BA LLB/B.Com LLB/BBA LLB/LLB/LLM <br>
            iii)B.Ed/BA Ed/B.Sc Ed/B.EI.Ed/D EI Ed/DPSE<br>
            iv)B.A./B.Com/B.Sc/B.B.A/BCA <br>
            v)MBA <br>
            vi)B.Pharm/D.Pharm/M.Pharm <br>
         </p>
    
</div>
<br><br>
<div class="content">
    
    <p class="schools" style="width: 65%;">
        <b>5. ADITYA COLLEGE OF TECHNOLOGY & SCIENCE, SATNA</b><br>
        Aditya college is only a technical institute in the Vindhya region to run AICTE approved & RGPV Bhopal affiliated B.Tech. in Mining, Agriculture Technology, Fire Technology, Civil Engineering.
We also offers Engineering Diploma course in Cement Technology, Civil Engineering, Mechanical Engineering and Mining & Mine Surveying.

We are known for excellence in research and scholarship, global character, values, diversity, and for the impact we make on multiple stakeholders and the society. In continuing of research we offers M. Tech. in Computer Science and Energy Technology. <br>
        Courses Available <br>
            i)B.Tech/Diploma <br>
            ii)B.Ed/BA Ed/B.Sc Ed/B.EI.Ed/D EI Ed/DPSE<br>
            iii)B.A./B.Com/B.Sc/B.B.A/BCA <br>
            iv)MBA <br>
            v)B.Pharm/D.Pharm/M.Pharm <br>
         </p>
    <div class="image-gallary">
        <img src="https://content.jdmagicbox.com/comp/satna/a1/9999p7672.7672.101027202243.i5a1/catalogue/aditya-college-of-technology-and-science-aditya-college-road-civil-lines-satna-colleges-rpsu8tr.jpg"  height="auto" width="100%" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);">ADITYA COLLEGE OF TECHNOLOGY & SCIENCE</div>
    </div>
</div>
<div style="height: 50mm; width: 210mm;"></div>

<footer class="footer">
        <p>Contact Us: <a href="mailto:info@satnadistrict.com">info@satnadistrict.com</a> | Phone: +91-123456789</p>
        <p>Follow us on: <a href="#">Facebook</a> | <a href="#">Instagram</a> | <a href="#">Twitter</a></p>
    </footer>
</body>
</html>
