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
    background:url("https://images.unsplash.com/photo-1578974721235-ecce3a0d8dcf?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=shaafi-ali-Uck7TR7XYFo-unsplash.jpg") no-repeat center;
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
  background-color:rgb(250, 245, 235);
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
    background-color:#04151d;
  }
  .image{
    opacity:0.7;
  }
  .image:hover{
    opacity:1.0;
  }
  .col-md-4:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.1); 
}
.content1{
    min-height:100px;
}
.banner-image1{
    
    margin-top:0px;
    padding-bottom:50px;
    text-align:center;
    color:#f8f8f8;
    background:url("https://images.unsplash.com/photo-1567850174684-a9e79e49ee50?ixlib=rb-1.2.1&q=") no-repeat center;
    background-size:cover;
    
}

.banner_content1{
 
    padding-top:20%;
    padding-bottom:8%;
    overflow:hidden;
    margin-bottom:18%;
    max-width:1200px; 
}
.background2{
  background-color:rgb(249, 253, 232);
}

  .btn{
    color:#bea723;
    background:transparent;
    border: 2px solid #FFD700;
  }
  .btn:hover{
    color:white;
    background:#115173;
    border:none;
  }
  .content2{
    min-height:100px;
}
.banner-image2{
    
    margin-top:0px;
    padding-bottom:50px;
    text-align:center;
    color:#f8f8f8;
    background:url("https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&q=8") no-repeat center;
    background-size:cover;
    
}

.banner_content2{
 
    padding-top:20%;
    padding-bottom:8%;
    overflow:hidden;
    margin-bottom:18%;
    max-width:1200px; 
}
.content3{
    min-height:100px;
}
.banner-image3{
    margin-top:0px;
    padding-bottom:50px;
    text-align:center;
    color:#f8f8f8;
    background:url("https://images.unsplash.com/photo-1495754222495-ecc0bf8aa558?ixlib=rb-1.2.1&q=8") no-repeat center;
    background-size:cover;
    
}
.inner-banner-image3{
     
    padding-top:15%;
    width:70%;
    margin-top:auto;
    margin-left:17%;
    
}
.banner_content3{
  margin-top: 3%;
    position:relative;
    padding-top:8%;
    padding-bottom:8%;
    overflow:hidden;
    margin-bottom:18%;
    background-color:rgba(0,0,0,0.6);
    max-width:1200px; 
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
        <li><a href="aboutus.php">About</a></li>
        <li class="active"><a href="">Menu</a></li>
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
        <h1 style="font-family:Gabriola; font-size:55px;"> Our Menu</h1>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="background">
<div class="container">
  <br>
  <center><h2 style="color:#cfb316;font-family:Gabriola;">pull up a chair<br><br><strong style="font-size:40px;">Have  A Taste Of Snacks</strong></h2></center>
  <div id="border-bottom">
    </div>
    <br><br><br>
<div class="row">
  <div class="col-md-6">
    <h3 style="font-family:Gabriola;color:black;font-size:30px;">Paneer tikka ....................................​Rs.220
      <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">are marinated in a spiced yogurt-based marinade arranged on skewers 
        and grilled in the oven.</strong>
        <br><br>Aloo tikki.........................................​Rs.340
        <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">crispy, crusty and so good. In Hindi language, aloo are potatoes and tikki are patties</strong>
        <br><br>Dahi vada .......................................​Rs.360
            <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);"> food snack where lentil dumplings are dunked in a creamy whipped yogurt topped with spicy and sweet chutneys.</strong>
            <br><br>Panni puri ......................................​Rs.220
            <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">where crisp fried dough balls (puri) are stuffed with potatoes, sprouts, spicy tangy water or sweet chutney</strong>
            <br><br>Veg cutlet ........................................​Rs.120
            <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">hese are crisp and tasty veg patties made with mixed vegetables. </strong>
           
  </strong></h3>
  </div>

<div class="col-md-6">
<h3 style="font-family:Gabriola;color:black;font-size:30px;">Paneer tikka ....................................​Rs.220
      <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">are marinated in a spiced yogurt-based marinade, arranged on skewers 
        and grilled in the oven.</strong>
        <br><br>Aloo tikki.........................................​Rs.340
        <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">crispy, crusty and so good. In Hindi language, aloo are potatoes and tikki are patties</strong>
        <br><br>Dahi vada .......................................​Rs.360
            <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);"> food snack where lentil dumplings are dunked in a creamy whipped yogurt topped with spicy and sweet chutneys.</strong>
            <br><br>Panni puri ......................................​Rs.220
            <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">where crisp fried dough balls (puri) are stuffed with potatoes, sprouts, spicy tangy water or sweet chutney</strong>
            <br><br>Veg cutlet ........................................​Rs.120
            <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">hese are crisp and tasty veg patties made with mixed vegetables. </strong>
           

  </strong></h3>
</div>
</div>
<br><br><br>
<br>
</div>
</div>

<!--main course image-->

<div class="container-fluid">
  <div class="row">
  <div class="content2">
  <div class="banner-image2 ">       
  <div class="banner_content2">
    
    </div>
    </div>
    </div>
    </div>
</div>

<!--main course-->
<div class="background1">
<div class="container">
<br><br><br>
<center><h2 style="color:#c7ad18;font-family:Gabriola;">Take a taste <br><br><strong style="font-size:40px;">Main Course</strong></h2></center>
<div id="border-bottom">
  </div>
  <br><br><br>

  <div class="row">
    <div class="col-md-6">
      <h3 style="font-family:Gabriola;color:black;font-size:30px;">Paneer butter masala ...................​Rs.220
        <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">most popular cottage cheese curry served in most Indian restaurants and is also made for special occasion.
         </strong>
          <br><br>Masala dosa....................................​Rs.320
          <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);"> they are usually had with coconut chuntey and sambar</strong>
          <br><br>Dal makhni ....................................​Rs.320
              <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);"> lentil recipe made in North India with whole urad dal and rajma.</strong>
              <br><br>Palak paneer ..................................​Rs.320
              <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">reamy dish is made with fresh spinach leaves, paneer (firm cottage cheese), onions, tomatoes, herbs and spices</strong>
              <br><br>Shahi Paneer ..................................​Rs.320
              <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">made with stuffed paneer and cream.</strong>
  
    </strong></h3>
    </div>
  
  <div class="col-md-6">
  <h3 style="font-family:Gabriola;color:black;font-size:30px;">Paneer butter masala ...................​Rs.220
        <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">most popular cottage cheese curry served in most Indian restaurants and is also made for special occasion.
         </strong>
          <br><br>Masala dosa....................................​Rs.320
          <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);"> they are usually had with coconut chuntey and sambar</strong>
          <br><br>Dal makhni ....................................​Rs.320
              <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);"> lentil recipe made in North India with whole urad dal and rajma.</strong>
              <br><br>Palak paneer ..................................​Rs.320
              <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">reamy dish is made with fresh spinach leaves, paneer (firm cottage cheese), onions, tomatoes, herbs and spices</strong>
              <br><br>Shahi Paneer ..................................​Rs.320
              <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">made with stuffed paneer and cream.</strong>
  
    </strong></h3>
  </div>
  </div>
  </div>
</div>
<br><br><br>
<!--Drinks image-->
<div class="contaner-fluid">
<div class="content1">
  <div class="banner-image1 ">       
  <div class="banner_content1">
    </div>
    </div>
    </div>
    </div>

    <!--drinks menu-->

    <div class="background2">
      <div class="container">
        <br>
        <center><h2 style="color:#cfb316;font-family:Gabriola;">drink and blush<br><br><strong style="font-size:40px;">Drinks</strong></h2></center>
        <div id="border-bottom">
          </div>
          <br><br><br>
      <div class="row">
        <div class="col-md-6">
          <h3 style="font-family:Gabriola;color:black;font-size:30px;">Caprioska.........................................​Rs.220
            <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">lime, vodka and sugar. Throw in some mint leaves for added freshness.
             </strong>
              <br><br> Mojito................................................​Rs.320
              <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);"> refreshing hit of mint and lime that is sure to be your favourite cocktail in a summer sundowner!</strong>
              <br><br> Bloody Mary....................................​Rs.320
                  <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">  a spicy undertone with a vodka base and the tang of tomato juice and zing of Tabasco and Worcestershire sauce..</strong>
                  <br><br> Pina Colada ...................................​Rs.320
                  <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">cocktail is made with balmy flavours of cream coconut and pineapple blended or shaken with ice and rum.</strong>
                  <br><br> Sangria ............................................​Rs.320
                  <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">Red wine is beautifully blended with fruits and liqueurs.</strong>
      
      
        </strong></h3>
        </div>
      
      <div class="col-md-6">
      <h3 style="font-family:Gabriola;color:black;font-size:30px;">Caprioska.........................................​Rs.220
            <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">lime, vodka and sugar. Throw in some mint leaves for added freshness.
             </strong>
              <br><br> Mojito................................................​Rs.320
              <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);"> refreshing hit of mint and lime that is sure to be your favourite cocktail in a summer sundowner!</strong>
              <br><br> Bloody Mary....................................​Rs.320
                  <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">  a spicy undertone with a vodka base and the tang of tomato juice and zing of Tabasco and Worcestershire sauce..</strong>
                  <br><br> Pina Colada ...................................​Rs.320
                  <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">cocktail is made with balmy flavours of cream coconut and pineapple blended or shaken with ice and rum.</strong>
                  <br><br> Sangria ............................................​Rs.320
                  <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">Red wine is beautifully blended with fruits and liqueurs.</strong>
      
      
        </strong></h3>
      </div>
      </div>
      <br><br>
      </div>
      </div>
      
      <!--reservation-->
      <div class="container-fluid">
        <div class="row">
          <div class="content3">
          <div class="banner-image3 ">       
      <div class="inner-banner-image3">
          <div class="banner_content3">
      <center><h2 style="color:#cfb316;font-family:Gabriola;font-size:45px;">join us<br><br><strong style="font-size:40px;color:#f8f8f8;">BOOK YOUR TABLE NOW COME AND SEE US</strong></h2></center>
  <div id="border-bottom">
    </div>
    <br>
    <br>
    <br>
<center><a href="contact.php"><button type="submit" value="reservation" class="btn input-lg">Reservation</button></a>
</center>
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
  

    