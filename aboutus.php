<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <title>demo</title>
  <style>

html{
      scroll-behavior: smooth;
    }
     .navbar {
    margin-bottom: 0;
    background-color: rgba(0,0,0,0.7);
    z-index: 9999;
    border-bottom: hidden;
    font-size: 14px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 4px;
  }
  .navbar li a, .navbar  {
    color: white !important;
    transition:.2s ease-in;
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
    background:url("https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=jay-wennington-N_Y88TWmGwA-unsplash.jpg") no-repeat center;
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
    background-color:#051820;

  }
  .image{
    opacity:0.7;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
    transition:0.3s ease-in;
  }
  .image:hover{
    opacity:1.0;
   
  }
  .thumbnail{
    border:none;
  }
  .img{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
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
      <ul class="nav navbar-nav navbar-right">
        <li ><a href="home.php">Home</a></li>
        <li class="active"><a href="">About</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="services.php">Services</a></li>
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
        <h1 style="font-family:Gabriola;font-size:50px;"class="animate__animated animate__fadeIn">WHO WE ARE</h1>
</div>
</div>
</div>
</div>
</div>
</div>

<!--about-->

<div class="background">
<div class="container">
  
  <center><h2 style="color:#c7ad18;font-family:Gabriola;"class="animate__animated animate__fadeIn animate__delay-2s"><strong>About Us</strong></h2></center>
  <div id="border-bottom">
</div>
<br>
<br>
<br>
<div class="row">
  <div class="col-md-6 col-sm-4">
    <div class="thumbnail">
      <img src="restuarant image/aboutus.jpg" style="height:410px;" class="img">
      </div>
    </div>
    <div class="col-md-6 col-sm-8 col-xs-12">
        <h3><strong style="font-family:Gabriola;color:black;"class="animate__animated animate__fadeIn animate__delay-2s">We Are Locally Crafted Food & Wine Serving Since 1978.</strong></h3>
        <h4 style="font-family:Gabriola;color:black;font-size:23px;"class="animate__animated animate__fadeIn animate__delay-2s"><p>It’s been called a “FOOD NATION” and “a work of art in its own right,” a restaurant “on the forefront of the Indian cuisine revolution” where “true culinary artistry is a constant.”

          For more than 4 years Food Nation Restaurant has been all that, putting Delhi City on the nation’s culinary map and introducing local fine dining fans to some of the country’s most celebrated chefs.
          
          But perhaps its best description is less about The Indian legendary food, service and ambiance, and more about the role it has played in Delhi Citians’ lives. It comes from the 3 people who studied in Bca, an CEO of food nation Harjas singh,Board of directors Hridesh Vij and Jaskirat singh, Inc., owner of the FOOD NATION restaurant.
          
           That, Food Nation most certainly been best, and continues to be.</p></h4>
        
        </div>
</div>
<br>
<br>
<br>
<div class="row">
  <div class="col-md-6 col-sm-8">
    <h3><strong style="font-family:Gabriola;color:black;">The Food Created By The Best Chefs In Town.</strong></h3>
    <h4 style="font-family:Gabriola;color:black;font-size:23px;"><p>Top chefs, sweet memories
      Over the years Food Nation hosted 18 Friends of Harjas singh Foundation dinners and dozens of Cooking School programs, introducing indian Citians to the talents of guest chefs from the nation’s most influential restaurants, from Ranbir brar to khanna, pop singer to hridesh vij.
      
       The Food Nation nurtured its own superstars, too, and its legacy reverberates throughout delhi City and the nation.
      
      Ajay and jagdeep, co-executive chefs from 2018 to 2021, brought Delhi City its first Youngest Award – the Oscar of the restaurant industry – when they were named “Best Chefs in the Delhi” in 2018. Celina Tio, who headed the kitchen from 2018 to 2021, earned one of her own in 2019. Celina and Debbie became known to national tv audiences,“Top Chef;” and the Food Channel’s “Khao-pio-ash-karo.”</p></h4>
  </div>
  <br>
  <div class="col-md-6 col-sm-4">
    <div class="thumbnail">
      <img src="restuarant image/chef.jpg" style="height:410px;" class="img">
      </div>
    </div>
</div>
<br>
<br>
<br>

<!--our team-->
<center><h2><Strong style="font-family:Gabriola;color:#c7ad18;"class="animate__animated animate__fadeInDown animate__delay-2s">Our Team</Strong></h2></center>
<div id="border-bottom"></div>
<br><br>
<div class="row">
  <div class="col-md-4 col-sm-6">
    <div class="thumbnail animate__animated animate__fadeInDown animate__delay-3s">
    <img src="restuarant image/gmanager.jpg"style="height:430px;" class="image">
    <div class="caption">
      <center><h3><strong style="font-family:Gabriola;color:rgb(0, 0, 0);">Julie vegas<br> General Manager</strong></h3></center>  
      </div>
  </div>  
  </div>
    <div class="col-md-4 col-sm-6">
      <div class="thumbnail animate__animated animate__fadeInDown animate__delay-3s">
        <img src="restuarant image/CEO.jpg" style="height:430px;width:300px;" class="image">
        <div class="caption">
        <center><h3><strong style="font-family:Gabriola;color:rgb(0, 0, 0);">Harjas singh<br> Ceo,Owner</strong></h3></center>  
        </div>
      </div>  
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="thumbnail animate__animated animate__fadeInDown animate__delay-3s">
          <img src="restuarant image/chef (2).jpg" style="height:430px;"class="image">
          <div class="caption">
            <center><h3><strong style="font-family:Gabriola;color:rgb(0, 0, 0);">Stenlie john<br>  Executive Chef</strong></h3></center>  
            </div>
        </div>  
        </div>
</div>
</div>
</div>

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
