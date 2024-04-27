<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Navigate</h4>
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="products.php">courses</a></li>
                        <li><a href="aboutUs.php">about us</a></li>
                    </ul>
                </div>
                
                <div class="footer-col" id="contact">
                    <h4>Contact Us</h4>
                    <ul>
                        <li>Business: business@gwenSTEM.com</li>
                        <li>Press: press@gwenSTEM.com</li>
                        <li>Contact Number: +38349900900</li>
                        <li>HQ Address: Prishtine</li>
                    </ul>
                </div>

                <div class="footer-col" id="socials">
                    <h4>Follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>

   <style>
    

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');


.container{
	max-width: 100%;
	margin:auto;
    margin-left: 230px;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
.footer-col ul{
	list-style: none;
    margin: 0px;
    padding: 0px;
    color: white;
}
.footer{
	background-color: #B01B57;
    padding: 70px 0;
    height: 5cm;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}

#contact{
    margin-right: 70px;
}

#socials{
    margin-left: 70px;
}
.footer-col h4{
	font-size: 18px;
	color: white;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #B01B57;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: white;
	text-decoration: none;
	font-weight: 300;
	color: white;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #white;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #white;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: white;
	background-color: white;
}


@media only screen and (max-width: 768px) {
    .footer{
        height:auto;
    }
    .footer-col {
        width: 50%;
        margin-bottom: 30px;
    }
    .row{
        margin-left: -100px;
    }
    #contact {
        margin-right: 0;
    }
    #socials {
        margin-left: 0;
    }
}

    </style>