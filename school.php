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
            <li><a href="#" onclick="location.href='school.php'" style="background-color: #007bff;">SCHOOLS</a></li> 
            <li><a href="#" onclick="location.href='colleges.php'">COLLEGES</a></li> 
            <li><a href="#" onclick="location.href='temple.php'">TEMPLES</a></li> 
            <li><a href="#" onclick="location.href='hotels.php'">HOTELS</a></li>
        </ul>
    </nav>
<br>
<img src="https://cdnbbsr.s3waas.gov.in/s3kv02d72aa550ba9aa548ef391986f56f/uploads/2024/03/2025012958.png" alt="Satna District" class="full-width-image">

    
<div class="about" style="font-size: 50px; margin-left : 1%;">Top Schools of District Satna</div>

<div class="content">
    
    <p class="schools">
        <b>1. Jawahar Novodaya Vidyalaya</b><br>
        Jawahar Novodaya Vidyalaya is the best school that you may found near Satna It is 776th best school in India and it is 27th best school in Madhya Pradesh. <br>
        Best School rating for this school is A2, that being said this school is excellent in compare to other schools, A2 rating is given to only top notch schools. There are rare schools which are better than these schools in fact schools with rating of A1 are the only schools which shall be considered better than A2 rated school. Jawahar Novodaya Vidyalaya is one of the top 10 schools near Satna. <br>
        Jawahar Novodaya Vidyalaya is affiliated by Central Board of Secondary Education and its CBSE board affiliation code is 1040008. <br>
        Overall this school scores 9 out of 10. Ranking and rating calculations are primarily based on results of 65 students who appeared on last year board exam and scored an average of 78.78%.</p>
    <div class="image-gallary">
        <img src="https://media.licdn.com/dms/image/v2/C561BAQE1WoUDse-Xnw/company-background_10000/company-background_10000/0/1620641117753/jawahar_navodaya_vidyalaya_rahikwara_satna_cover?e=2147483647&v=beta&t=PSR88A4qNCk9YXCRM0DBdUFKE3Nau5Z64BN-Sb12BqY"  height="20%" width="100%" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);">Jawahar Novodaya Vidyalaya, Satna</div>

    </div>
</div>

<br><br>
<div class="content">
<div class="image-gallary">
        <img src="Bhartiya-vidya-bhavans.jpeg"  height="20%" width="100%" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);">Bharatiya Vidya Bhavan's Prism School, Satna</div>
    </div>
    <p class="schools" style="width: 64%;">
        <b>2. Bharatiya Vidya Bhavan's Prism School</b><br>
        Bharatiya Vidya Bhavan's Prism School is 2nd best school around Satna It is 896th best school in India and it is 34th best school in Madhya Pradesh.
        Best School rating for this school is A2, that being said this school is excellent in compare to other schools, A2 rating is given to only top notch schools. There are rare schools which are better than these schools in fact schools with rating of A1 are the only schools which shall be considered better than A2 rated school. Bharatiya Vidya Bhavan's Prism School is one of the top 10 schools near Satna. <br>

        Bharatiya Vidya Bhavan's Prism School is affiliated by Central Board of Secondary Education and its CBSE board affiliation code is 1030121. <br>
        Overall this school scores 9 out of 10. Ranking and rating calculations are primarily based on results of 4 students who appeared on last year board exam and scored an average of 78.00%.</p>
   
</div>
<br><br>

<div class="content">
    
    <p class="schools" style="width: 70%;">
        <b>3. Christ Jyoti Higher Secondary School</b><br>
    Christ Jyoti Higher Secondary School is 3rd best school around Satna It is 2214th best school in India and it is 147th best school in Madhya Pradesh. <br>
Best School rating for this school is B2, this indicates that among other schools this school is significantly above average school however its slightly below good school. A1, A2 and B1 rated schools are considered better than B2 rated school. Christ Jyoti Higher Secondary School is one of the top 10 schools near Satna. <br>

Christ Jyoti Higher Secondary School is affiliated by Central Board of Secondary Education and its CBSE board affiliation code is 1030151. <br>
Overall this school scores 7 out of 10. Ranking and rating calculations are primarily based on results of 171 students who appeared on last year board exam and scored an average of 71.42%.</p>
<div class="image-gallary">
        <img src="https://www.christjyotisatna.org/images/innerbg/about.jpg"  height="20%" width="100%" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);">Christ Jyoti Higher Secondary School, Satna</div>
    </div>
</div>
<br><br>

<div class="content">
<div class="image-gallary">
        <img src="https://www.yayskool.com/images/school/st-michaels-sr-sec-school-satna-82227130.png"  height="20%" width="100%" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);"> St. Michaels Hr Sec School, Satna</div>
    </div>
    <p class="schools" style="width: 64%;">
        <b>4. St. Michaels Hr Sec School</b><br>
    St Michaels Hr Sec School is 4th best school around Satna It is 2385th best school in India and it is 166th best school in Madhya Pradesh. <br>
Best School rating for this school is C1, this means this school comes in category of slightly above average school, i.e. this school is quite below the good school category but its not exactly an average school as well. A1, A2, B1 and B2 rated school shall be preferred over C1 rated school. St Michaels Hr Sec School is one of the top 10 schools near Satna. <br>

St Michaels Hr Sec School is affiliated by Central Board of Secondary Education and its CBSE board affiliation code is 1030213.
Overall this school scores 6 out of 10. Ranking and rating calculations are primarily based on results of 234 students who appeared on last year board exam and scored an average of 70.79%.</p>

</div>
<br><br>

<div class="content">
    
    <p class="schools" >
        <b>5. Lovedale School</b><br>
    Lovedale School is 5th best school around Satna. It is 3111th best school in India and it is 235th best school in Madhya Pradesh. <br>
Best School rating for this school is C2, which means this school is neither good nor bad, there are equal number of good and bad school in compare to this school. This school comes in category of average schools. C2 rated schools are better than D1, D2, E1 and E2 rated schools and at the same time they are worse than A1, A2, B1, B2 and C1 rated schools in general. Lovedale School is one of the top 10 schools near Satna. <br>

Lovedale School is affiliated by Central Board of Secondary Education and its CBSE board affiliation code is 1030199.
Overall this school scores 5 out of 10. Ranking and rating calculations are primarily based on results of 62 students who appeared on last year board exam and scored an average of 67.47%.</p>
<div class="image-gallary" style="width: 145%;">
        <img src="https://content3.jdmagicbox.com/comp/satna/w1/9999p7672.7672.110117113145.r2w1/catalogue/the-lovedale-senior-secondary-school-satna-ho-satna-cbse-schools-g61ljjzb68.jpg"  height="20%" width="100%" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);">Lovedale School, Satna</div>
    </div>
</div>
<br><br>

<div class="content">
<div class="image-gallary" style="width: 145%;">
        <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhvN58Y4m6L8zFtWR7C-MQLaZER2LIKpy_V9hwyacicbXx_moXQZMf7EDnEB6IgwV0PhjFte8e-sqPsm0IWvOZyl3ksakvI-utxVPUxSHRGfyCi0nNIXf0c66466UBYK39zcKrZJh-_gfZx-1lyd8MYlNDH-RRmy8EPyCh6OM6mSIHiLqXDOC6RWUv9Nw=w1200-h630-p-k-no-nu"  height="20%" width="100%" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);">Kendriya Vidyalaya, Satna</div>
    </div>
    <p class="schools"><b>6. Kendriya Vidyalaya</b><br>
    Kendriya Vidyalaya is 6th best school around Satna It is 3667th best school in India and additionally it is 120th worst school in Madhya Pradesh. <br>
Best School rating for this school is D1, that being said this school comes in category of slightly below average school, e.i. performance comparison wise there are more number of better school than the worse schools and frankly D1 rated schools are only better than D2, E1, E2 rated school. Kendriya Vidyalaya is one of the top 10 schools near Satna. <br>

Kendriya Vidyalaya is affiliated by Central Board of Secondary Education and its CBSE board affiliation code is 1000050.
Overall this school scores 4 out of 10. Ranking and rating calculations are primarily based on results of 56 students who appeared on last year board exam and scored an average of 64.71%.</p>
</div>
<br><br>

<div class="content">
    
    <p class="schools"><b>7. Christukula Mission Higher Secondary School</b><br>
    Christukula Mission Higher Secondary School is 7th best school around Satna it is 620th worst school in India and it is 11th best school in Madhya Pradesh. <br>
Best School rating for this school is D1, that being said this school comes in category of slightly below average school, e.i. performance comparison wise there are more number of better school than the worse schools and frankly D1 rated schools are only better than D2, E1, E2 rated school. Christukula Mission Higher Secondary School is one of the top 10 schools near Satna. <br>
 
Christukula Mission Higher Secondary School is affiliated by Council for the Indian School Certificate Examinations and its ICSE board affiliation code is MP006. <br>
Overall this school scores 4 out of 10. Ranking and rating calculations are primarily based on results of 235 students who appeared on last year board exam and scored an average of 72.44%.</p>
<div class="image-gallary" style="width: 145%;">
        <img src="https://christukulamissionschool.com/images/wall/4.jpg"  height="20%" width="100%" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);">Christukula Mission Higher Secondary School, Satna</div>
    </div>
</div>
<br><br>

<div class="content">
<div class="image-gallary" style="width: 145%;">
        <img src="https://scontent.fjlr3-1.fna.fbcdn.net/v/t1.6435-9/60752747_355491915103478_8647237401418137600_n.jpg?stp=dst-jpg_p526x395_tt6&_nc_cat=105&ccb=1-7&_nc_sid=833d8c&_nc_ohc=Uy8nCuRX4bgQ7kNvgF5751U&_nc_zt=23&_nc_ht=scontent.fjlr3-1.fna&_nc_gid=ACCXy4WHKObPXDrcvW4RlDt&oh=00_AYCyt5eGSzXWVdB5Wmc_1UMXLGjfekyRAyLT67DoBkSUsg&oe=676A952D"  height="20%" width="100%" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);"> Venkat 1 Excellence School, Satna</div>
    </div>
    <p class="schools"><b>8. Venkat 1 Excellence School</b><br>
    Venkat 1 Excellence School is 8th best school around Satna. It is 4592th best school in India and it is 631th best school in Madhya Pradesh. <br>
    Best School rating for this school is D1, that being said this school comes in category of slightly below average school. performance comparison wise there are more number of better school than the worse schools and frankly D1 rated schools are only better than D2, E1, E2 rated school. Venkat 1 Excellence School is one of the top 10 schools near Satna. <br>

    Venkat 1 Excellence School is  affiliated to the Madhya Pradesh Board of Secondary Education, Bhopal and its UDISE Code is 23130731504.
Overall this school scores 4 out of 10. Ranking and rating calculations are primarily based on results of 33 students who appeared on last year board exam and scored an average of 58.88%.</p>

</div>
<br><br>

<div class="content">
    <p class="schools"><b>9. St. Claret School</b><br>
        St. Claret School is 9th best school around Satna it is 355th worst school in India and additionally it is 6th worst school in Madhya Pradesh.
        Best School rating for this school is E1, which means this school comes in category of poor school. This kind of school shall be avoided when ever its possible. Only E2 rated school are worse than E1 rated schools. St. Claret School is one of the top 10 schools near Satna.
        St. Claret School is affiliated by Council for the Indian School Certificate Examinations and its ICSE board affiliation code is MP035.
        Overall this school scores 2 out of 10. Ranking and rating calculations are primarily based on results of 35 students who appeared on last year board exam and scored an average of 68.19%.</p>
        <div class="image-gallary" style="width: 145%;">
        <img src="https://www.schooldekho.org/storage/gallery//ka2c0g455o0swog84wk44owosg4o48o.jpg"  height="20%" width="100%" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);">St. Claret School, Satna</div>
    </div>
</div>
<br><br>

<div class="content">
<div class="image-gallary" style="width: 145%;">
        <img src="https://www.yayskool.com/images/school/blooms-academy-satna-90967108.jpg"  height="20%" width="100%" alt="image">
        <div style="text-align: center; font-size:20px; font-weight:bold; box-shadow: 10px 10px 20px rgba(0,0,0,0.6);">Blooms Academy School, Satna</div>
    </div>
    <p class="schools"><b>10. Blooms Academy School</b><br>
    Blooms Academy School is 10th best school around Satna it is 1009th worst school in India and additionally it is 53rd worst school in Madhya Pradesh. <br>
    Best School rating for this school is E1, which means this school comes in category of poor school. This kind of school shall be avoided when ever its possible. Only E2 rated school are worse than E1 rated schools. Sarla Hr Sec School is one of the top 10 schools near Satna. <br>

    Blooms Academy School is affiliated by Central Board of Secondary Education and its CBSE board Affiliation code is 1030207.
    Overall this school scores 2 out of 10. Ranking and rating calculations are primarily based on results of 86 students who appeared on last year board exam and scored an average of 58.36%.</p>
</div>
</div>
<div style="height: 50mm; width: 210mm;"></div>

<footer class="footer">
        <p>Contact Us: <a href="mailto:info@satnadistrict.com">info@satnadistrict.com</a> | Phone: +91-123456789</p>
        <p>Follow us on: <a href="#">Facebook</a> | <a href="#">Instagram</a> | <a href="#">Twitter</a></p>
    </footer>
</body>
</html>