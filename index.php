<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <title>Welcome to SATNA</title>
    <script>
        document.addEventListener('copy', function(event){
            event.preventDefault();
            const textToCopy ="";
            event.clipboardData.setData('text/plain', textToCopy);
        });
    </script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
            background-image: url(https://mpbreakingnews.in/wp-content/uploads/2020/05/picsart110505886588.jpg.webp);
            background-repeat: no-repeat;
            background-size: 100% 90%;
            transition: background-color 0.3s, color 0.3s;
            margin: 0;
            padding: 0;
        }
        body.dark-mode {
            background-color: #121212;
            color: #ffffff;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;  
            flex-direction: column; 
            text-align: center;
        }
        .Welcome {
            font-size: 100px;
            font-weight: 900;
            margin-bottom: 20px;
            background: linear-gradient(to right, darkblue, red);
            background-size: 200%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: animate-gradient 2.5s linear infinite;
        }
        .get-started-btn {
            height: 45px;
            width: 200px;
            background-color: #1E40AF;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease;
            margin: 10px;
        }
        .get-started-btn:hover {
            background-color: #3B82F6;
        }

        .login-btn {
            height: 45px;
            width: 150px;
            background-color: #1E40AF;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease;
            margin: 10px;
        }
        .login-btn:hover {
            background-color: #3B82F6;
        }

        nav {
            height: 70px;
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
        
        nav img {
            margin-left: 70px;
            height: auto;
            width: 80px;
        }
        nav ul {
            display: flex;
            list-style: none;
        }
        nav ul li {
            margin: 0 15px;
        }
        
        nav ul li a {
            margin-right: 30px;
            text-decoration: none;
            color: yellow;
            font-size: 14px;
            font-weight: 600;
        }
        nav ul li a:hover {
            color: white;
            text-decoration: underline;
        }

        footer {
            position: relative;
            background-color: #3B82F6;
            padding: 40px 0;
            text-align: center;
            color: white;
            animation: fadeIn 1s ease-out;
        }
        footer h3 {
            font-size: 24px;
        }
        footer p {
            font-size: 16px;
            margin: 10px 0;
        }

        @keyframes animate-gradient {
            0% {
                background-position: 200% 0;
            }
            100% {
                background-position: 0 0;
            }
        }
        .login{
            margin-right: 40px;
            color: plum;
            font-family: script;
            color: yellow;
            font-weight: 600;
            font-size: 20px;
            font-weight: 800;
            text-decoration: none;
            padding: 5px 15px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            cursor: pointer;
            font-family: redrawn;
        }
        .login:hover{
            background-color: red;
            color: #fff;
            box-shadow: 0px 0px 10px 6px rgba(0, 0, 0, 0.6);
        }
        .login a{
            color: plum;
            font-family: sans-serif;
            color: yellow;
            
            font-weight: 600;
            font-size: 20px;
            font-weight: 800;
            text-decoration: none;
            padding: 8px 16px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        
        .login i:hover{
            color: #fff;
        } 
        
    </style>
</head>
<body>

<nav>
    <div class="flex items-center">
        <img src="tourist.png" title="SATNA" class="w-22 h-20" style="filter: drop-shadow(1px 1px 20px red);">
    </div>
    <ul class="flex space-x-8 items-center">
        <li><a href="#home">HOME</a></li>
        <li><a href="#about">ABOUT DISTRICT</a></li>
        <li><a href="#schools">SCHOOLS</a></li>
        <li><a href="#colleges">COLLEGES</a></li>
        <li><a href="#tourism">TOURISM</a></li>
        <li><a href="#temples">TEMPLES</a></li>
        <li><a href="#hotels">HOTELS</a></li>
        <!-- <button class="login-btn" onclick="location.href='login.php'">LOG IN</button> -->
    </ul>
    <!-- <div class="login" onclick="location.href='login.php'"><a href="#" ><i class="fa-solid fa-user"></i></a><br>Login</div> -->
</nav>

<div class="container" id="home">
    <h1 class="Welcome"><u>Welcome to SATNA!</u></h1>
    <button class="get-started-btn" onclick="location.href='first.php'">Explore<ion-icon name="return-up-forward-sharp"></ion-icon></button>
</div>

<footer>
    <h3>Contact Us</h3>
    <p>Email: info@satnadistrict.com</p>
    <p>Phone: +91-123456789</p>
</footer>

</body>
</html>
