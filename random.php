<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style>
      body, html {
        height: 10%;               
        margin: 0;                 
        display: flex;              
        justify-content: center;    
        background-color: purple; 
      }

      #containar {
        width: 30vw !important;  
        height: 300px !important;
        background-color: aqua;
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

      .carousel-inner > .item > img {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
    </style>
  </head>
  <body>
      <br />
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="200">
        <div id="containar">

        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img
              src="https://cms.patrika.com/wp-content/uploads/2019/08/03/1_8.jpg"
              alt="Chania"
              width="500px"
            />
            <div class="carousel-caption"></div>
          </div>

          <div class="item">
            <img
              src="https://www.swadeshnews.in/h-upload/2023/10/04/1083349-c3.webp"
              alt="Chania"
              width="800px" style="background-size: cover;">
            <div class="carousel-caption"></div>
          </div>

          <div class="item">
            <img
              src="https://images.bhaskarassets.com/web2images/521/2022/03/27/ddd0797d-867f-48dd-9863-0ee617fa91841648362197357_1648371160.jpg"
              alt="Flower"
              width="500px"
            />
            <div class="carousel-caption"></div>
          </div>

          <div class="item">
            <img
              src="https://images.news18.com/ibnkhabar/uploads/2024/07/HYP_4539748_img20240710wa0087_watermark_10072024_224908_6.jpg?im=Resize,width=450,aspect=fit,type=normal?im=Resize,width=450,aspect=fit,type=normal"
              alt="Flower"
              width="500px"
            />
            <div class="carousel-caption"></div>
          </div>
        </div>

        <a class="custom-prev-btn" href="#myCarousel" role="button" data-slide="prev">
          &#10094; 
        </a>
        <a class="custom-next-btn" href="#myCarousel" role="button" data-slide="next">
          &#10095;  
        </a>
      </div>
    </div>
  </body>
</html>
