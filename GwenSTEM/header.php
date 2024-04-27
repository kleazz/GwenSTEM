<?php
include_once 'user/adminClass.php';
include_once 'user/simpleUserClass.php';
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <header>
    <div id="header1">
        <div id="head1">
            <ul>
                <a href="index.php"><img src="images/spiderlogo.png" id="img1"></a>
                <li><a href="index.php" class="hovernav">home</a></li>
                <li><a href="products.php" class="hovernav">courses</a></li>
                <li><a href="aboutUs.php" class="hovernav">about us</a></li>
                <li><a href="contactform.php" class="hovernav">contact</a></li>
            </ul>
        </div>
        <div>
        </div>
        <div id="head2">
            <ul>
                <?php 
                
                if (isset($_SESSION['loggedin'])) { 
                    
                    echo '<li><a href="user/logout.php" class="hovernav">log out</a></li>';
                    
                    if ($_SESSION['role'] == 1) { 
                      
                        echo '<li><a href="views/dashboard.php" class="hovernav">dashboard</a></li>';
                    }
                } else { 
          
                   echo ' <li><a href="login.php" class="hovernav">sign up</a></li>';
                 } ?>
            </ul>
        </div>
    </div>
</header>

    <style>
        

a{
    color: #262626;
    text-decoration: none;
}

 
#header1 ul{
    list-style:none;
    display:flex;
    align-items: center;
}
 
#img1{
    width: 2cm;
    height: 2cm;
    padding-right: 8cm;
    margin-top: 20px; 
}
#header1{
    align-items:center;
    justify-content:space-between;
    height:2.5cm;
    width:100%;
    font-size:17.5px;
    display:flex;
    flex-direction:initial;
    background-color: white;
    position:absolute;
}
#header1 ul li{
    color: gray;
    margin-left:32.5px;
    padding: 5px;
}

#header1 a{
    color: gray;
}
#head2 ul li{
    margin-right: 50px;
}



.nav ul li a:hover{
    color: #B01B57;
    transition: .5s;
}

.hovernav {
    display: inline-block;
    position: relative;
    color: #B01B57;
}

.hovernav:after {
    content: '';
    position: absolute;
    width: 100%;
    transform: scaleX(0);
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #B01B57;
    transform-origin: bottom right;
    transition: transform 0.25s ease-out;
  }

.hovernav:hover:after {
    transform: scaleX(1);
    transform-origin: bottom left;
}

@media screen and (max-width: 768px) {
  #header1 {
    flex-wrap: wrap;
    height: auto;
  }
  
  #img1 {
    height: 1cm;
    width: 1cm;
    /* width: 100%; */
    /* max-width: 150px;
    margin: 0px auto;
    padding-left: 5cm;
    order: 1;
    margin-bottom: -20px;
    display: flex;
  justify-content: center;
  align-items: center; */
  }
  
  #head1 {
    justify-content: center;
    width: 100%;
    order: 2;
    margin-bottom: -30px;
  }
  #head1 ul{
    justify-content: center;
  }
  
  #head2 {
    width: 100%;
    order: 3;
    text-align: center;
  }
  
  #head2 ul {
    display: flex;
    justify-content: center;
    margin-bottom: 2px;
  }
  
  #header1 ul li {
    margin: 0 10px;
  }
}




</style>