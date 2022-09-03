<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="">
  <title>demo</title>
  <style>
    html{
      scroll-behavior: smooth;
    }
     .navbar {
    margin-bottom: 0;
    background-color: rgba(0,0,0,0.5);
    z-index: 9999;
    border-bottom:hidden;
    font-size: 14px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 4px;
  }
  .navbar li a, .navbar  {
    color: white !important;
    transition: 0.2s;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color:#FFD700 !important;
    background-color: transparent !important;
 
    border-bottom:2px solid #FFD700;
  }
  .navbar-brand.navbar-image {
   padding: 0 20px 0 0;
   display: flex;
   color:white;
}
.navbar-brand.navbar-image:hover{
  color:#FFD700;
}
  .navbar-inverse .navbar-toggle  {
    border-color: white;
    color: red !important;
    
  }
  
  .content{
    min-height:100px;
}
.banner-image{
    
    margin-top:0px;
    padding-bottom:50px;
    text-align:center;
    color:#f8f8f8;
    background:url("https://images.unsplash.com/photo-1495754222495-ecc0bf8aa558?ixlib=rb-1.2.1&q=80") no-repeat center;
    background-size:cover;
    
}
.inner-banner-image{
     
    padding-top:15%;
    width:70%;
    margin-top:auto;
    margin-left:17%;
    
}
.banner_content{
  margin-top: 3%;
    position:relative;
    padding-top:8%;
    padding-bottom:8%;
    overflow:hidden;
    margin-bottom:18%;
    background-color:rgba(0,0,0,0.6);
    max-width:1200px; 
}
.background{
  background-color:white;
}
#border-bottom{ 
  border-bottom: 3px solid #ceb218;
  width: 6%;
  margin-left:47%;
}
  .footer{
    color:white;
    font-family:Gariola;
    font-size:16px;
    padding-top:25px;
    background-color:#051b25;
 }
  .thumbnail{
    border:none;
  }
  .btn{
    color:#bea723;
    background:transparent;
    border: 2px solid #FFD700;
    transition:0.3s;
  }
  .btn:hover{
    color:white;
    background:#115173;
    border:none;
    
  }
  .image{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  @keyframes fadeIn {
            0% {opacity: 0.3;}
            100% {opacity: 1;}
         }
  .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
            animation-duration: 4s;
         }
         #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:rgba(0,0,0,0.3);
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius:100%;
}

#myBtn:hover {
  background-color:rgba(0,0,0,0.6);
}
.glyphicon-chevron-up{
  color:#FFD700;
}
.follow{
  justify-content:center;
  display:flex;
}
    </style>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand navbar-image" href="home.php"><img src="restuarant image/FOOD NATION (10).png"alt="food nation" width="220px"height="50px"></a>
      </div>
      <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="nav navbar-nav navbar-right ">
        <li ><a href="home.php">Home</a></li>
        <li><a href="aboutus.php">About</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li ><a href="contact.php">Contact</a></li>
        <li ><a href="gallery.php">Gallery</a></li>
        <li class="active"><a href="">Services</a></li>
      </ul>
     
    </div>
  </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="content">
      <div class="banner-image ">       
  <div class="inner-banner-image">
      <div class="banner_content">
        <h1 style="font-family:Gabriola; font-size:55px;">Services</h1>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="background">
  <div class="container">
    <br><br><br>
    <center><h2><strong style="font-size:40px;font-family:Gabriola;color:#ceb218;">What We Offer </strong></h2></center>
    <div id="border-bottom">
      </div>
    <br>
    <br>
    <center><h2><strong style="font-size:40px;font-family:Gabriola;color:#ceb218;">YOU BRING THE GUESTS. LET US DO THE REST. </strong></h2></center>
  
    </div>
  </div>
      <br>
<br>
<br>

<!--services offerings-->

<div class="container">
  <div class="row">
  <div class="col-md-6 col-sm-6">
 <div class="thumbnail">
<img src="https://images.unsplash.com/photo-1510223861799-1b97de838135?ixlib=rb-1.2.1&q"alt="Responsive image" style="height:500px;width:90%;" class="image fadeIn">

</div>
</div>
 <br>
 <br>
 <br>
<div class="col-md-6 col-sm-6">
  <center><h1><strong style="font-family:Gabriola;color:black;">Wedding Party's</strong></h1>
  <h3 style="font-family:Gabriola;color:black;font-size:25px;"><p>Celebrate your special event in beautiful atmosphere of Royal Plate. Exquisite & creative cousine,
     friendly atmosphere and highly professional staff will make your special day beautiful & enjoyable. 
     You can select from couple of pre-made menus for every occasion that should please many different palates or work with us to create your own menu.

  </p></h3></center>
  <br>
  <center><a href="contact.php"><button type="submit" value="Reservation" class="btn input-lg ">Reservation</button></a></center>
</div>
  </div>
  <br><br><br>
<!--social event-->>
  <div class="row">
<div class="col-md-6 col-sm-6">
  <center><h1><strong style="font-family:Gabriola;color:black;">Corporate Party's</strong></h1>
  <h3 style="font-family:Gabriola;color:black;font-size:25px;padding-top:20px;"><p>Planning an important business meeting with your partners? 
    Impress them with lunch in Royal Plate. Royal Plate covers everything from business lunches, 
    to custom team building programs and corporate parties. No matter of party size and occasion, our catering specialist will plan your event to meet your needs.

  </p></h3></center>
  <br>
  <center><a href="contact.php"><button type="submit" value="Reservation" class="btn input-lg ">Reservation</button></a></center>
</div>

  <div class="col-md-6 col-sm-6">
    <div class="thumbnail">
    <img src="https://images.unsplash.com/photo-1515169067868-5387ec356754?ixlib=rb-1.2.1&q="alt="Responsive image"  style="height:500px;width:95%;"  class="image fadeIn">
    
   
   </div>
  </div>
  </div>
<br>
<br>
<br>
<!--birtday party-->
<div class="row">
<div class="col-md-6 col-sm-6">
 <div class="thumbnail">
<img src="https://images.unsplash.com/photo-1575132246077-e597d2f15549?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=bia-OoVxXh1AQZY-unsplash.jpg"alt="Responsive image" style="height:500px;width:90%;"  class="image fadeIn">

</div>
</div>
<br>
<br>
<br>
<div class="col-md-6 col-sm-6">
  <center><h1><strong style="font-family:Gabriola;color:black;">Birthday Party's</strong></h1>
  <h3 style="font-family:Gabriola;color:black;font-size:25px;padding-top:20px;"><p>Celebrate your special day in beautiful atmosphere of Food nation. Exquisite & creative cousine,
     friendly atmosphere and highly professional staff will make your special day beautiful & enjoyable. 
     You can select from couple of pre-made menus for every occasion that should please many different palates or work with us to create your own menu.

  </p></h3></center>
  <br>
  <center><a href="contact.php"><button type="submit" value="Reseravtion" class="btn input-lg ">Reservation</button></a></center>
</div>
  </div>
  <br><br><br>
  <!--renuion party-->
  <div class="row">
<div class="col-md-6 col-sm-6">
  <center><h1><strong style="font-family:Gabriola;color:black;">Social Party's</strong></h1>
    <h3 style="font-family:Gabriola;color:black;font-size:25px;padding-top:20px;"><p>Weather you are celebrating your birthday, have a family reunion or something else,
       we’ll make it enjoying and memorable. Our experts have years of experience in party planning and will make sure it is a delicious success, 
      enjoying and memorable for you and your guests! Time to put your party hat on!
  
    </p></h3></center>
    <br>
<center><a href="contact.php"><button type="submit" value="Reseravtion" class="btn input-lg ">Reservation</button></a></center>
</div>

<div class="col-md-6 col-sm-6">
<div class="thumbnail">
  <img src="https://images.unsplash.com/photo-1541532713592-79a0317b6b77?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=john-arano-_qADvinJi20-unsplash.jpg"alt="Responsive image" style="height:500px;width:88%;"  class="image fadeIn">

</div>
</div>
</div>
</div>
<br><br><br>
<!--why choose us-->
<center><h2><strong style="font-size:40px;font-family:Gabriola;color:#ceb218;">Why Choose Us </strong></h2></center>
    <div id="border-bottom">
      </div>
  
    <center><h2><strong style="font-size:25px;font-family:Gabriola;color:black;">We provide the Best Services than any other Restaurants we have the services that<br> U never seen anywhere in the town.</strong></h2></center>
    <br><br><br>

    <!--free services-->

    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="thumbnail">
          <img src="restuarant image/wifi1.png"alt="wifi">
          <div class="caption">
            <center><h3 style="font-family:'Imprint MT Shadow', Times, serif;font-size:40px;">Free Wifi</h3>
            </center>
          </div>
          </div>
        </div>
        
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="thumbnail">
            <img src="restuarant image/parking.png" alt="food">
          <div class="caption">
            <center><h3 style="font-family:'Imprint MT Shadow', Times, serif;font-size:40px;">Free Parking</h3>
            </center>
          </div>  
          </div>
    </div>
    
      <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="thumbnail">
        <img src="restuarant image/music.png" alt="food"><br>
      <div class="cation">
        <center><h3 style="font-family:'Imprint MT Shadow', Times, serif;font-size:40px;">Best Music </h3>
        </center>
      </div>  
      </div>
      </div>
    </div>
    <br><br>
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="thumbnail">
          <img src="restuarant image/food.png" alt="food">
        <div class="caption">
          <center><h3 style="font-family:'Imprint MT Shadow', Times, serif;font-size:40px;">New Flavors</h3>
          </center>
        </div></div>
        </div>
    
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="thumbnail">
            <img src="restuarant image/location.png" alt="food">
          <div class="caption">
            <center><h3 style="font-family:'Imprint MT Shadow', Times, serif;font-size:40px;">Best location</h3>
            </center>
          </div>
          </div>
          </div>
    
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="thumbnail">
              <img src="restuarant image/best.png" alt="food">
            <div class="caption">
              <center><h3 style="font-family:'Imprint MT Shadow', Times, serif;font-size:40px;">Best Food</h3>
              </center>
            </div>
            </div>
            </div>
          </div>

          <br>
          <br>
          <!--footer-->
            <div class="container-fluid">
            <div class="row">
            <div class="footer">
              <center>Copyright © Food Nation<br>All Right Reserved|Contact Us:9999251393
             <br> Follow us at:</center>
             <div class="follow">
             <div class="facebook">
              <a href="https://www.facebook.com/"target="blank"><img src="https://img.icons8.com/color/2x/facebook.png"width="30">
              </a>
              </div>
              <div class="twitter">
              <a href="https://twitter.com/"target="blank"><img src="https://img.icons8.com/color/2x/twitter-circled.png"width="30">
              </a>
              </div>
              
              <div class="Google">
              <a href="https://mail.google.com/"target="blank"></a><img src="https://img.icons8.com/color/2x/google-plus.png"width="30">
              </a>
            </center>
              </div>
            </div>
          </div>
          </div>
</div>

          <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-chevron-up"></button>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
          </body>
          </html>