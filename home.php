<?php

?>

<!DOCTYPE html>
<html>
    <head>
	<title> L&PDigiTech </title>
	<link rel = "stylesheet" type = "text/css" href = "style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
	<style>
	
	
	.flip-box {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
}

.flip-box-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
  opacity: 0.3;
}
	
	.zoom {
  padding: 50px;
  background-color: ;
  transition: transform .2s;
  
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.3); /* IE 9 */
  -webkit-transform: scale(1.3); /* Safari 3-8 */
  transform: scale(1.3); 
}
	</style>
	
	<body>
    <nav>
        <div id="logo"><img src="./Images/logo.jpeg" alt="Logo" style=" margin-top: 0px;"></div>

        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop" />
            <ul class="menu"style="padding-right: 60px;" >
                <li><a href="#">Home</a></li>
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-1" class="toggle">Products</label>
                    <a href="#">Products</a>
                    <input type="checkbox" id="drop-1"/>
                    <ul>
                        <li><a href="#">Themes</a></li> <hr style="margin-top: 0px; margin-bottom: 0px;">
                        <li><a href="#">Plugins</a></li> <hr style="margin-top: 0px; margin-bottom: 0px;">
                        <li><a href="#">Tutorials</a></li> <hr style="margin-top: 0px; margin-bottom: 0px;">
                    </ul> 

                </li>
                <li>

                <!-- First Tier Drop Down -->
                <label for="drop-2" class="toggle">Services</label>
                <a href="#">Services</a>
                <input type="checkbox" id="drop-2"/>
                <ul>
                    <li><a href="#">Resources</a></li> <hr style="margin-top: 0px; margin-bottom: 0px;">
                    <li><a href="#">Links</a></li> <hr style="margin-top: 0px; margin-bottom: 0px;">
                   <!--<li> --->
                       
                    <!-- Second Tier Drop Down -->        
                    <!---<label for="drop-3" class="toggle">Tutorials +</label>
                    <a href="#">Tutorials</a>         
                    <input type="checkbox" id="drop-3"/>

                    <ul>
                        <li><a href="#">HTML/CSS</a></li>
                        <li><a href="#">jQuery</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                    </li> -->
                </ul>
                </li>
                <li><a href="#">Fire Alaram</a></li>
                <li><a href="#">Inspiration</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About Us</a></li>
				<li><a href="#">Search</a></li>
            </ul>
        </nav>
       
	   

        <div class="w3-content w3-section" style="max-width:1500px">
            <img class="mySlides" src="./Images/cctv_banner1.jpg" style="width:100%">
            <img class="mySlides" src="./Images/cctv_banner2.jpg" style="width:100%">
            <img class="mySlides" src="./Images/15421566444039.jpg" style="width:100%">
        </div>

            <script>
                let myIndex = 0;
                    carousel();

                    function carousel() {
                    let i;
                    let x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                    }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                    x[myIndex-1].style.display = "block";  
                    setTimeout(carousel, 2000); // Change image every 2 seconds
                }
            </script>
        <div class="vl"></div>
        <div class="container-fluid" style="margin-top:80px;">
                <h1>STAR PRODUCT</h1>
                <p></p>
                <p>Originally founded in 2018,L&PDigiTech Ltd .is a private high-tech entity specialize in CCTV  surveillance products.</p>
                <div class="row" style="margin-left: 150px;">
				
               <!--<div class="col-sm-3" style="background-color:;margin:30px;height:250px" >
			    
				<img  src="./Images/7460ffa4d9c84099175144d7cd63f99e.jpg" class="image" style="width:104%;height:250px;">
				</div>-->
				<div class="col-sm-3" style="background-color:;margin:30px;height:250px" >
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img  src="./Images/7460ffa4d9c84099175144d7cd63f99e.jpg"  style="width:104%;height:250px;">
                            </div>
                            <div class="flip-box-back" style="width:104%;height:250px;">
                            <img  src="./Images/7460ffa4d9c84099175144d7cd63f99e.jpg"  style="width:104%;height:250px;">
                            </div>
                        </div>
                    </div>
                    </div>
				
                <!--<div class="col-sm-3" style="background-color:;margin:30px;height:250px" >
				<img  src="./Images/281facebdf78ac8e411361896627506b.jpg" class="image" style="width:104%;height:250px;">
				</div>-->
				
				
				<div class="col-sm-3" style="background-color:;margin:30px;height:250px" >
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img  src="./Images/281facebdf78ac8e411361896627506b.jpg"  style="width:104%;height:250px;">
                            </div>
                            <div class="flip-box-back" style="width:104%;height:250px;">
                            <img  src="./Images/281facebdf78ac8e411361896627506b.jpg"  style="width:104%;height:250px;">
                            </div>
                        </div>
                    </div>
                    </div>
				
                <!--<div class="col-sm-3" style="background-color:;margin:30px;height:250px">
				<img  src="./Images/53b987cd37f4fb14b1ca6903806b03de.jpg" class="image" style="width:104%;height:250px;">
				</div>-->
				
				<div class="col-sm-3" style="background-color:;margin:30px;height:250px" >
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img  src="./Images/53b987cd37f4fb14b1ca6903806b03de.jpg"  style="width:104%;height:250px;">
                            </div>
                            <div class="flip-box-back" style="width:104%;height:250px;">
                             <img  src="./Images/53b987cd37f4fb14b1ca6903806b03de.jpg"  style="width:104%;height:250px;">
                            </div>
                        </div>
                    </div>
                    </div>
				
				
                </div>
				
                <div class="row" style="margin-left: 150px;">
				
                <!--<div class="col-sm-3" style="background-color:;margin:30px;height:250px">
				<img  src="./Images/b991822184eaab838249117266843b34.jpg" class="image" style="width:104%;height:250px;">
				</div>-->
				
				<div class="col-sm-3" style="background-color:;margin:30px;height:250px" >
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img  src="./Images/b991822184eaab838249117266843b34.jpg"  style="width:104%;height:250px;">
                            </div>
                            <div class="flip-box-back" style="width:104%;height:250px;">
                            <img  src="./Images/b991822184eaab838249117266843b34.jpg"  style="width:104%;height:250px;">
                            </div>
                        </div>
                    </div>
                    </div>
				
				
                <!--<div class="col-sm-3" style="background-color:;margin:30px;height:250px">
				<img  src="./Images/f6abdfa3c298e847c6e6a2e10adfbdca.jpg" class="image" style="width:104%;height:250px;">
				</div>-->
				
				
				<div class="col-sm-3" style="background-color:;margin:30px;height:250px" >
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img  src="./Images/f6abdfa3c298e847c6e6a2e10adfbdca.jpg"  style="width:104%;height:250px;">
                            </div>
                            <div class="flip-box-back" style="width:104%;height:250px;">
                            <img  src="./Images/f6abdfa3c298e847c6e6a2e10adfbdca.jpg"  style="width:104%;height:250px;">
                            </div>
                        </div>
                    </div>
                    </div>
				
				
                <!---<div class="col-sm-3" style="background-color:;margin:30px;height:250px">
				<img  src="./Images/5d63f099a7f57570963f68b9800c2c9d.jpg" class="image" style="width:104%;height:250px;">
				</div>--->
				
				
				<div class="col-sm-3" style="background-color:;margin:30px;height:250px" >
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img  src="./Images/f6abdfa3c298e847c6e6a2e10adfbdca.jpg"  style="width:104%;height:250px;">
                            </div>
                            <div class="flip-box-back" style="width:104%;height:250px;">
                            <img  src="./Images/f6abdfa3c298e847c6e6a2e10adfbdca.jpg"  style="width:104%;height:250px;">
                            </div>
                        </div>
                    </div>
                    </div>
				
				
                </div>
        </div>
        <div class="vl"></div>
		<div class="container-fluid" style="margin-top:80px;">
                
                <div class="row">
                <div class="col-sm-12" style="background-color:#094e93;height:610px;color:#FFFFFF;"><h1>ABOUT US</h1>
				<div class="row" style=";">
                <div class="col-sm-6" style="background-color:#094e93;height:560px;font-size: 20px;line-height: 24px;text-transform: uppercase;font-family: 'lato-bold';">
				<p style="display: block;margin-block-start: 1em;margin-block-end: 1em;margin-inline-start: 0px;margin-inline-end: 0px;">L&PDigiTech Pvt. Ltd</p>
				<div class="in_about_d" style="font-size: 15px;line-height: 34px;color: #e8e8e8;overflow: hidden;max-height: 400px;margin-top: 19px;">Welcome To Our Company Providing world-class products and services to the world WINSAFE Technology 
				is a Leading developer and manufacture dvoted to PTZ Video Cameras, Audio Microphone, ATM Pinhole IP Cameras, Home Security 
				Wireless IP Camera and PTZ Accessies,with more than 14 years of industrial exprience, now we are "National Hi-Tech Enterprise",
				passed ISO9001 quality certification, with our product CE, FCC approved. WINSAFE has dozes of patents and software copies. Our R&amp;D
				team consists of 40+ members of Doctors, Masters and Senior engieers majored in video motion tracking, video analysis, face recognition,
				HD and IP tech etc. Our product are widely sold with warm acceptance from our distributors all over the world. We develop &amp; manufacture 
				the proper product by understanding completely what user's need, to keep our cooperated...</div>
				</div>
                <div class="col-sm-6" style="background-color:#094e93;height:560px;">
				<img src="./Images/eeef10f7e2c4cf3df6ac703db3b6dce7.png" style="width:100%">
				</div>
                </div>
				
				
				</div>
                
                </div>
                
        </div>
		<div class="vl"></div>
        <div class="fire_container-fluid" style="margin-top:100px;">
                <h1>Fire Alaram Products</h1>
                <p></p>
                <p>Originally founded in 2018,L&PDigiTech Ltd .is a private high-tech entity specialize in CCTV  surveillance products.</p>
                <div class="row" style="margin-left: 150px;">
                <div class="col-sm-3" style="background-color:;margin:30px;height:250px">
				<div class="zoom">
				<img  src="./Images/firealarm.png" style="width:104%;height:250px;">
				</div>
				</div>
                <div class="col-sm-3" style="background-color:;margin:30px;height:250px">
				<div class="zoom">
				<img  src="./Images/fireext2.png" style="width:104%;height:250px;">
				</div>
				</div>
                <div class="col-sm-3" style="background-color:;margin:30px;height:250px">
				<div class="zoom">
				<img  src="./Images/featured5.jpg" style="width:104%;height:250px;">
				</div>
				</div>
                </div>
               
        </div>
		
	    <div class="footer_container-fluid" style="margin-top:100px; background-color:#094e93;">
                <div class="row" style="margin-left: 150px;">
				<div class="col-sm-2" style="background-color:;margin:20px;height:250px;color: #e8e8e8;">
				<h3>Products</h3>
				<ul style=" list-style-type: none;padding-left: 50px;">
				<li>Maritime Thermal PTZ Cameras</li>
				<li>Mobile Rugged PTZ Cameras</li>
				<li>Lecture Recording Cameras</li>
				<li>Mobile Rugged PTZ Cameras</li>
				</ul>
				
				</div>
                <div class="col-sm-2" style="background-color:;margin:20px;height:250px;color: #e8e8e8;">
				<h3>Serviceses</h3>
				<ul style=" list-style-type: none;padding-left: 51px;">
				<li>Mobile Security</li>
				<li>Education Recording</li>
				<li>Video Conference</li>
				</ul>
				
				</div>
                <div class="col-sm-2" style="background-color:;margin:20px;height:250px;color: #e8e8e8;">
				<h3>Fire Alaram</h3>
				<ul style=" list-style-type: none;">
				<li>Introduction</li>
				<li>Honor & Certification</li>
				
				</ul>
				
				
				</div>
                <div class="col-sm-2" style="background-color:;margin:20px;height:250px;color: #e8e8e8;">
				<h3>About Us</h3>
				
				
				</div>
				<div class="col-sm-2" style="background-color:;margin:20px;height:250px;color: #e8e8e8;">
				<h3>Contact Us</h3>
				<h4 style="text-align:center;">+91-7483044700</h4>
				<h4 style="text-align:center;">ashwiniwanole@gmail.com</h4>
				
				</div>
                </div>
                <div class="row" style="">
                <div class="col-sm-12" style="background-color:#023f7c;margin:0px;height:70px">
				<p style="font-size: 15px;line-height: 34px;color: #e8e8e8;">Copyright © 2019 www.lpdigitech.com</p>
				</div>
                
                </div>
        </div>
		
	
	
	</body>
</html>