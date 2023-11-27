<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <style>
        .Logo
        {
            text-align: center;
            font-size:34px;
            font-family: poppins;
            color:white;
            
        }
        
       .h
       {
           font-family: poppins;
           background: black;
           
           font-size:19px;
           padding:4px;
       }
       a
       {
           color:white;    
       }
       a:hover
       {
           color:rgb(253,183,27);
       }
       li{
           list-style-type: none;
       }
       
       .toggle-btn
       {
           width: 35px;
           position: absolute;
           right:80px;
           top:15px;
           display: none;
       }
       .toggle-btn span
       {
           display: inline-block;
           width: 100%;
           height:2px;
           background-color: white;
           float: left;
           margin-bottom: 8px;
       }
       @media (max-width:991px)
       {
           .toggle-btn{
               display: block;
           }
           nav
           {
               display: none;
               width: 100%;
               border-top: 1px solid #000;
               padding-top: 20px;
               margin-top: 30px;
           }
           nav ul li{
               padding: 15px 0px;
               width:100%;
           }
           nav.show
           {
               display: block;
           }
       }
       video
       {
           position: absolute;
           object-fit: cover;
           width: 98%;
           height: 97%;
           transition: all 200ms linear;
           z-index: 11;
       }
      
       .slide1
       {
           opacity: 1;
       }
       .slide2
       {
           opacity: 1;
       }
       .slide3
       {
           opacity: 1;
       }
       .slide4
       {
           opacity: 1;
       }
       .slider
       {
           width: 100%;
           height: 90vh;
       }
       .j
       {
           background-color: rgb(50,47,48);
           padding: 23px;
       }
       
    </style>
    <body>
        <div class="container-fluid">
            <div class="row h">
                
                 <div class="col-md-6 ">
                     <a href="index.php" class="Logo"> Hema Catering Service</a>
                 </div>
                    <div class="col-md-6 ">
                      <nav id="nav">
                        <ul>
                            <div class="col-md-3 h"><li><a href="index.php">Home</a></li></div>
                            <div class="col-md-3 h"><li><a href="about.php">About us</a></li></div>
                            <div class="col-md-3 h"><li><a href="service.php">Services</a></li></div>
                           
                            <div class="col-md-3 h"><li><a href="gallery.php">Gallery</a></li></div>
                        </ul>   
                      </nav>
                    </div>
                    
                        <div class="toggle-btn" onclick="myFunction();">
                                  <span></span>
                                  <span></span>
                                  <span></span>
                        </div>    
               
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="slider">
                        <video src="v1.mp4" class="slide1" id="slide1" autoplay muted ></video>
                        <video src="v2.mp4" class="slide2" id="slide2" autoplay muted ></video>
                        <video src="v3.mp4" class="slide3" id="slide3" autoplay muted ></video>
                        <video src="v4.mp4" class="slide4" id="slide4" autoplay muted ></video>
                    </div>
                </div>
             </div>
            <div class="row j">
                <div class="col-md-2 "></div>
                <div class="col-md-8  text-center">
                    <h1><span style="color:rgb(170,170,170);">Best Catering Service</span></h1>
                </div>
                <div class="col-md-2 "></div>
                <div class="col-md-12 j text-center" style="color: #ffcf64;font-family:Pristina;font-size: 25px;">Discover</div>
                <div class="col-md-12 j text-center" style="color: #ffcf64;font-family:Poppins;font-size: 35px;"><b>Our Menu</b></div>
                <div class="col-md-12 j text-center" style="color: white;font-family:Poppins;font-size: 22px;padding: 8%;">At Ahmed Catering, we understand that each customer and their requirements are different and unique. We are flexible when it comes to the menu. In any function, there would be some guests who are vegetarians.&nbsp;We take care of your Vegetarian catering needs as well.</div>
                <div class="row">
                <div class="col-md-6"   style="">`
                    <img src="img1.png">
                </div>
                <br><br><br><br>
                <div class="col-md-6 " style="padding:64px;">`
                    <span style="color: #ffcf64;font-family:poppins;font-size: 35px;">Non-Vegetarian<br><br></span>
                    <span style="color: white;font-family:poppins;text-align: right;font-size: 22px;">Our Mouth-watering Non Veg dishes will surely entice your guests !<br><br>Right from ‘Melt in the mouth’ starters to Mind Blowing Biryanis and yummy gravies, we have it all.<br><br>Simply explore our menu to find more.</span>
                </div>
                </div>
               <div class="row"> 
                <div class="col-md-6 " style="padding:114px;">`
                    <span style="color: #ffcf64;font-family:poppins;font-size: 35px;">Sweets<br><br></span>
                    <span style="color: white;font-family:poppins;text-align: right;font-size: 22px;">We serve sensational sweets from various traditions – be it Mughal, Rajasthani, Bengali or South indian. Our fascinating sweets will leave a lingering taste and a memory to cherish !</span>
                </div>   
                <div class="col-md-6"   style="">`
                    <img src="img2.png">
                </div>
               </div>   
                   <div class="row">
                <div class="col-md-6"   style="">`
                    <img src="img3.png">
                </div>
                
                <div class="col-md-6 " style="padding:64px;">`
                    <span style="color: #ffcf64;font-family:poppins;font-size: 35px;">Vegetarian<br><br></span>
                    <span style="color: white;font-family:poppins;text-align: right;font-size: 22px;">Be it a North Indian Thali or a South Indian Meal, our vegetarian dishes will serve the taste buds.<br><br>Crunchy starters, Flavorful Ghee rice, Awesome Veg Biryanis, Tempting gravies are all in our range.<br><br>Take a look at our menu to find more.</span>
                </div>
                </div>
                <div class="row"> 
                <div class="col-md-6 " style="padding:114px;">`
                    <span style="color: #ffcf64;font-family:poppins;font-size: 35px;">Our Specialities<br><br></span>
                    <span style="color: white;font-family:poppins;text-align: right;font-size: 22px;">Pamper your guests ! Treat them “extra” special with our Special dishes. <br><br>Check the menu for our specialties.</span>
                </div>   
                <div class="col-md-6"   style="">`
                    <img src="img4.png">
                </div>
               </div> 
                <div class="col-md-12 j text-center" style="color: #ffcf64;font-family:Pristina;font-size: 25px;">Quality First</div>
                 <div class="col-md-12 j text-center" style="color: #ffcf64;font-family:Poppins;font-size: 35px;"><b>We use the best ingredients</b></div>
                 <div class="col-md-12 j text-center" style="color: white;font-family:Poppins;font-size: 22px;padding:3%;">At Ahmed Catering , we are very particular about Quality and Hygiene. We use the best ingredients , fresh meat and masalas. We don’t compromise. Our food speaks for our quality !</div>
                 
            </div>
            <div class="row"><footer style="text-align:center;background-color: black;color:white; padding: 24px;"><b>Copyright 2022 - Hema Catering</b></footer></div>
            </div>
            
                
        
        
        <script type="text/javascript">
            function myFunction()
            {
                var navbar=document.getElementById('nav');
                navbar.classList.toggle('show');
            }
            
            
            var slide1=document.getElementById('slide1');
            var slide2=document.getElementById('slide2');
            var slide3=document.getElementById('slide3');
            var slide4=document.getElementById('slide4');
            slide1.onended=function()
            {
                slide2.play();
                slide1.style.opacity=0;
                slide2.style.opacity=1;
            }
             slide2.onended=function()
            {
                slide3.play();
                slide2.style.opacity=0;
                slide3.style.opacity=1;
            }
             slide3.onended=function()
            {
                slide4.play();
                slide3.style.opacity=0;
                slide4.style.opacity=1;
            }
             slide4.onended=function()
            {
                slide1.play();
                slide4.style.opacity=0;
                slide1.style.opacity=1;
            }
            
        </script>                
    </body>
</html>
