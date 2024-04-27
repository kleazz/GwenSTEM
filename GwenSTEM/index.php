<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
<?php 
    include "header.php";
    
?>
    <main>
        <div id="fotoPare">
            <div id="teksti">
                <p>Get Caught in the Web of Learning with Gwen!</p>
            </div>
            <img src="images/Group1.png" alt="" id="foto">
        </div>
        
        <!-- <div class="katrorat">
        <img name="mySlide" id="slideshow">
        
        </div> -->

        <div id="fotoFundit">
            <div>
                <img src="./images/ellipse4.png" alt="" id="img">
            </div>
            <div id="fotoFunditTxt">
            <h1>About <span style="color: #B01B57;">GwenSTEM</span>!</h1>
                <p>Welcome to our STEM Girls Hub! We're on a mission to empower girls in STEM. Join us to explore the fascinating world of science, technology, engineering, and mathematics. Together, let's break barriers, shatter stereotypes, and pave the way for a future where girls thrive in every field of STEM!</p>
                    <div><a href="aboutUs.php"><button id="btn2"><span>Tell me more</span></button></a></div>
            </div>
        </div>
<?php
    require_once 'homeController.php';

    $controller = new homeController();
    $products = $controller->readData();
?>

<div>
    <h1 id="rec">New Courses</h1>
    <div class="wr">
        <div class="divs">
                <img src="images/screen1.png" class="r">
            </a>
        </div>
        <div class="divs">
                <img src="images/screen2.png" class="r">
            </a>
        </div>
        <div class="divs">
                <img src="images/screen3.png" class="r">
            </a>
        </div>
        <div class="divs">
                <img src="images/screen2.png" class="r">
            </a>
        </div>
    </div>
</div>
    </main>
   <?php 
    include "footer.php";  
?>
<script src="javascript/script.js"></script>
</body>
</html>