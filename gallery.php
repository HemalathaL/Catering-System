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
    .food
    {
      padding: 23px;   
    }
    .food img:hover
    {
        transform: scale(1.2);
       transition: all 0.3s ease-in-out;
       cursor:pointer;
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
                <div class="col-md-12 j" style="color:rgb(253,183,27);font-family:Poppins;font-size: 45px;"><b>Gallery</b></div>
                <br>
            </div>
            <br>
            <hr>
            <br><br><br>
             <div class="row">
                 <div class="col-md-4 food">
                     <img src="g3.webp" width="80%" height="32%">
                 </div>
                 <div class="col-md-4 food">
                     <img src="g2.jpg" width="85%">
                 </div>
                 <div class="col-md-4 food">
                     <img src="g1.jpg" width="100%">
                 </div>
                 
                 
                    
            </div>
              <div class="row">
                 <div class="col-md-4 food">
                     <img src="g5.png" width="70%">
                 </div>
                 <div class="col-md-4 food">
                     <img src="g6.jpg" width="85%">
                 </div>
                 <div class="col-md-4 food">
                     <img src="g7.jpg" width="100%" height="43%">
                 </div>
                    
            </div>
            <div class="row">
                 <div class="col-md-4 food" >
                     <img src="g8.jpg" width="100%" height="40%">
                 </div>
                 <div class="col-md-4 food">
                     <img src="g9.webp" width="85%" height="40%">
                 </div>
                 <div class="col-md-4 food">
                     <img src="g10.jpg" width="100%" height="40%">
                 </div>
                    
            </div>
        </div>
        <br><br><br>
            
            
            
            
            
            
            
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
