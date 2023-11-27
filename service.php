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
        body
        {
            background-color: rgb(52,51,52);
        }
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
           
           font-size:19px;
           padding:4px;
       }
       a
       {
           color:white;
           
       }
       li{
           list-style-type: none;
           
       }
        a:hover
       {
           color:rgb(253,183,27);
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
           color:white;
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
       .j
       {
           color:rgb(253,183,27);
       }
        hr{
        height: 2px;
        background-color: rgb(253,183,27);
        border: none;
        width: 80%;
        margin-left: 0;
        
    }
   .zoom img:hover
    {
       transform: scale(1.2);
       transition: all 0.3s ease-in-out;
       cursor:pointer;
    }
    img
    {
       border-radius: 14px; 
    }

         </style>
    <body>
        <div class="container">
            <div class="row h">
                
                 <div class="col-md-6">
                     <a href="index.php" class="Logo"> Hema Catering Service</a>
                 </div>
                    <div class="col-md-6 h">
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
            <br><br>
            <div class="row">
                <div class="col-md-12 j" style="color:rgb(253,183,27);font-family:Poppins;font-size: 45px;"><b>Services</b></div>
                <br>    
            </div>
            
            <hr>
            <br>
            <div class="row"><div class="col-md-12 text-center j" style="color:rgb(253,183,27);font-family:Poppins;font-size: 35px;"><b>Let us make your event even more special !</b></div></div><br><br>
            <div class="row" >
                <div class="col-md-3" style=""></div>
                <div class="col-md-6" style="">
                    <img src="img9.jpeg" height="60%" width="99%">  <br><br><br>
                </div>
                                  
                <div class="col-md-3" style=""></div>
                 <div class="col-md-12">
                    <p style="color:white;text-align: center;font-size: 24px;font-family: poppins;">Beautiful venue, spectacular stage setup, dazzling decorations and engaging entertainment are all crucial for a big grand event. However, what connects the guests is the delicious food. The guests may forget the lighting and the grandeur but will rarely forget the food served.<br><br>This is exactly why Ahmed Catering is popular for. As one of the best catering services in Chennai, we serve amazing food which is remembered, even long after the parties.<br><br>Be it a brilliant lunch or a beautiful evening Dinner. Leaf service or a buffet spread, you can count on us.<br><br>Come the ‘Big day’, you can enjoy the limelight and merrily meet and chat with your near and dear ones. We will delight your guests with both our food and service !</p>
                </div>
                <div class="row">
                    <div class="col-md-6 zoom" style="padding:54px;">
                        <img src="img10.webp" width="75%" height="50%">
                    </div>
                    <div class="col-md-6 text-center" style="padding: 60px; ">
                        <p style="color:white;font-family: poppins;font-size:54px;">Wedding Catering</p><br><br>
                        <p style="color:rgb(253,183,27);font-family: poppins;font-size:34px;">We are Biryani Experts , Non-Veg Express</p>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-6 text-center" style="padding: 60px; ">
                        <p style="color:white;font-family: poppins;font-size:54px;">Corporate Events</p><br><br>
                        <p style="color: rgb(253,183,27);font-family: poppins;font-size:34px;">Awesome Food, Splendid times!</p>
                    </div>
                    <div class="col-md-6 zoom" style="padding:54px;">
                        <img src="img11.jpg" width="75%" height="50%">
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-6 zoom" style="padding:54px;">
                        <img src="img12.webp" width="75%" height="50%">
                    </div>
                    <div class="col-md-6 text-center" style="padding: 60px; ">
                        <p style="color:white;font-family: poppins;font-size:49px;">Birthday party Catering</p><br><br>
                        <p style="color:rgb(253,183,27);font-family: poppins;font-size:34px;">We turn parties to Memories</p>
                    </div>
                </div>   
                 <div class="row">
                    <div class="col-md-6 text-center" style="padding: 60px; ">
                        <p style="color:white;font-family: poppins;font-size:54px;">Private Functions</p><br><br>
                        <p style="color:rgb(253,183,27);font-family: poppins;font-size:34px;">Making Celebrations Yummy!</p>
                    </div><div class="col-md-6 zoom" style="padding:54px;">
                        <img src="img13.jpg" width="75%" height="50%">
                    </div>
                </div>   
            </div>
        </div>
                <div class="row"><footer style="text-align:center;background-color: black;color:white; padding: 24px;"><b>Copyright 2022 - Hema Catering</b></footer></div>
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
            </script>
        </body>
</html>
