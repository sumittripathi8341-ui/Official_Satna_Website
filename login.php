<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="style/style.css"> -->
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:"poppins",sans-serif;
        }
        body{
            background-color: #c9d6ff;
            background: linear-gradient(to right,#c2e2e2,#c9d6ff);
        }
         .container{
            background: #fff;
            width: 450px;
            padding: 1.5rem;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 20px 35px rgba(0,0,1,0.9); 
        } 
         form{
            margin: 0  2rem;
        }
        .form-title{
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            padding: 1.3rem;
            margin-bottom: 0.4rem;    
        }
        input{
            color: inherit;
            width: 100%;
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #757575;
            padding-left: 1.5rem;
            font-size: 15px;
        }
         .input-group{
            padding: 1% 0;
            position: relative;
        }
        .input-group i{
            position: absolute;
            color: black;
        }
        input:focus{
            background-color: transparent;
            outline: transparent;
            border-bottom: 2px solid hsl(327,90%,28%);
        }
        input::placeholder{
            color: transparent;
        }
        label{
            color: #757575;
            position: relative;
            left: 1.2em;
            top: -1.3em;
            cursor: auto;
            transition: 0.3s ease all;
        }
        input:focus~label,input:not(:placeholder-shown)~label{
            top: -3em;
            color: hsl(327,90%,28%);
            font-size: 15px;
        }
        .recover{
            text-align: right;
            font-size: 1rem;
            margin-bottom: 1rem;
        } 
        .recover a{
            text-decoration: none;
            color: rgb(125,125,235);
        }
        .recover a:hover{
            color: blue;
            text-decoration: underline;
        }
        .btn{
            font-size: 1.1rem;
            padding: 8px 0;
            border-radius: 5px;
            outline: none;
            border: none;
            width: 100%;
            background: rgb(125,125,235);
            color: white;
            cursor: pointer;
            transition: 0.1s;
        }
        .btn:hover{
            background: #07001f;
        }
        .or{
            font-size: 1.1rem;
            margin-top: 0.5rem;
            text-align: center;
        }
        .icons{
            text-align: center;
        }
        .icons i,button{
            color: rgb(125,125,235);
            padding: 0.8rem 1.5rem;
            border-radius: 10px;
            font-size: 1.5rem;
            cursor: pointer;
            border: 2px solid #dfe9f5;
            margin: 0 15x;
            transition: 1s;
        }
        .icons i:hover{
            background: #07001f;
            border: 2px solid rgb(125,125,235);
        }

        .links {
            display: flex;
            justify-content: center;
            align-items: center; 
            margin-top: 0.9rem;
            font-weight: bold;
        }

        button{
            color: rgb(125,125,235);
            border: none;
            background-color: transparent;
            font-size: 1rem;
            font-weight: bold;
        }
        button:hover{
            text-decoration: underline;
            color: blue;
        }

        .input-group {
            position: relative;
            margin-bottom: 15px;
        }

        .input-group input {
            width: 100%;
            padding-right: 40px; 
        }

        .show-password {
            position: absolute;
            margin-left: 65%;
            top: 0%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            cursor: pointer;
            color: #333;
        }

        .show-password i {
            font-size: 18px;
        }
            
    </style>
</head>
<body>
    <div class="container" id="signUp" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" autofocus required>
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="passwordSignUp" placeholder="Password" required>
                <label for="password">Password</label>
                <button type="button" class="show-password" onclick="togglePasswordVisibility('passwordSignUp', this)">
                    <i class="fas fa-eye-slash"></i>
                </button>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>
        <p class="or">--------------or--------------</p>
        <div class="icons">
            <a href="https://google.com"><i class="fab fa-google"></i></a>
            <a href="https://facebook.com"><i class="fab fa-facebook"></i></a>
        </div>
        <div class="links">
            <p>Already have an account?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="emailSignIn" placeholder="Email" autofocus required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="passwordSignIn" placeholder="Password" required>
                <label for="password">Password</label>
                <button type="button" class="show-password" onclick="togglePasswordVisibility('passwordSignIn', this)">
                    <i class="fas fa-eye-slash"></i>
                </button>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">--------------or--------------</p>
        <div class="icons">
            <a href="https://google.com"><i class="fab fa-google"></i></a>
            <a href="https://facebook.com"><i class="fab fa-facebook"></i></a>
        </div>
        <div class="links">
            <p>Don't have an account?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
