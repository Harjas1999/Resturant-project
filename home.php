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
    background:url("https://images.unsplash.com/photo-1563551342926-21cc8d785013?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80") no-repeat center;
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
.btn {
  background:#115173;
  width: 110px;
  height: 45px;
  line-height: 42px;
  padding: 0;
  color:white;
  transition:0.3s;
 ;
}
.btn:hover{
   color:#FFD700;
  
}
.btn1{
    color:#bea723;
    background:transparent;
    border: 2px solid #FFD700;
    transition:0.3s;
  }
  .btn1:hover{
    color:white;
    background:#0e3b53;
    border:none;
    
  }
  .btn2{
    color:#ffffff;
    background:#0e3b53;
    border:None;
  }
 
.image{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
}
.thumbnail{
  border:none;
}
.content1{
    min-height:100px;
}
.banner-image1{
    
    margin-top:0px;
    padding-bottom:50px;
    text-align:center;
    color:#f8f8f8;
    background:url("https://images.unsplash.com/photo-1496412705862-e0088f16f791?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=brooke-lark-M4E7X3z80PQ-unsplash.jpg") no-repeat center;
    background-size:cover;
    
}
.inner-banner-image1{
     
    padding-top:15%;
    width:70%;
    margin-top:auto;
    margin-left:17%;
    
}
.banner_content1{
  margin-top: 3%;
    position:relative;
    padding-top:8%;
    padding-bottom:8%;
    overflow:hidden;
    margin-bottom:18%;
    background-color:rgba(0,0,0,0.6);
    max-width:1200px; 
}
.content2{
    min-height:100px;
}
.banner-image2{
    
    margin-top:0px;
    padding-bottom:50px;
    text-align:center;
    color:#f8f8f8;
    background:url("https://images.unsplash.com/photo-1511690656952-34342bb7c2f2?ixlib=rb-1.2.1&q=") no-repeat center;
    background-size:cover;
    
}
.inner-banner-image2{
     
    padding-top:15%;
    width:70%;
    margin-top:auto;
    margin-left:17%;
    
}
.banner_content2{
  margin-top: 3%;
    position:relative;
    padding-top:8%;
    padding-bottom:8%;
    overflow:hidden;
    margin-bottom:18%;
    background-color:rgba(0,0,0,0.6);
    max-width:1200px; 
}
.col-md-4 {
 
  transition:0.5s;
}
.col-md-4:hover {
  -ms-transform: scale(1.1); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
}
.content3{
    min-height:100px;
}
.banner-image3{
    
    margin-top:0px;
    padding-bottom:50px;
    text-align:center;
    color:#f8f8f8;
    background:url("https://images.unsplash.com/photo-1578474846511-04ba529f0b88?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=adrien-olichon-ZgREXhl8ER0-unsplash.jpg") no-repeat center;
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

  .footer{
    color:white;
    font-family:Gariola;
    font-size:16px;
    padding-top:25px;
    background-color:#04151d;
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
.items{
 justify-content:center;
 align-items:center;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
  
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1.0)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1.0)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 50px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
 
  
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="aboutus.php">About</a></li>
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
       <div class="animate__animated animate__zoomIn"> <h1 style="font-family:Gabriola; font-size:45px;color:#c7ad18;">Welcome To<strong> FOOD NATION</strong></h1>
      <h1 style="font-family:Gabriola;font-size:25px;"> WE HAVE THE BEST FOOD IN TOWN. JUST SCROLL IT AND BELIVE IT </h1>
      <div id="border-bottom">
      </div>
      </div>
       <br>
        <a href="contact.php"><button type="submit" value="Reservation" class="btn2 input-lg animate__animated animate__fadeInDown">Reservation</button></a>

        <a href="signup.php"><button type="submit" value="Order online" class="btn1 input-lg  animate__animated animate__fadeInDown">Order online</button></a>
        
</div>
</div>
</div>
</div>
</div>
</div>
<br>
<div class="background">
<div class="container ">
  <center><h2 style="color:#c7ad18;font-family:Gabriola;"><strong>About Us</strong></h2></center>
  <div id="border-bottom">
</div>
<br>
<br>
<!--about image-->
<div class="row">
  <div class="col-md-6 col-sm-5">
    <div class="thumbnail">
      <img src="restuarant image/aboutus.jpg " style="height:350px;" class="image fadeIn">
      </div>
    </div>
    <div class="col-md-6 col-sm-7 col-xs-12">
        <h3><strong style="font-family:Gabriola;color:black;">We Are Locally Crafted Food & Wine Serving Since 1978.</strong></h3>
        <p style="font-family:Gabriola;color:black;font-size:19px;">It’s been called a “FOOD NATION” and “a work of art in its own right,” a restaurant “on the forefront of the Indian cuisine revolution” where “true culinary artistry is a constant.”

          For more than 4 years Food Nation Restaurant has been all that putting Delhi City

          But perhaps its best description is less about The Indian legendary food, service and ambiance, and more about the role it has played in Delhi Citians’ lives. It comes from the 3 people who studied in Bca, an CEO of food nation Harjas singh,Board of directors Hridesh Vij and Jaskirat singh, Inc., owner of the FOOD NATION restaurant.
          
          That, Food Nation most certainly has been, and continues to be. </p>
         <br>
          <a href="aboutus.php"><center><button type="submit" value="Read more" class="btn input-lg">Read more</center></button></a>
        
        </div>
</div>
</div>
</div>
<br>
<br>
<br>
<!--menu bar-->

<div class="container-fluid">
  <div class="row">
    <div class="content1">
    <div class="banner-image1">       
<div class="inner-banner-image1">
    <div class="banner_content1">
      <h1 style="font-family:Gabriola; font-size:45px;color:#c7ad18;"class="animate__animated animate__fadeInDown animate__delay-4s">Exquisite cuisine</h1>
      <h1 style="font-family:Gabriola;font-size:45px;"class="animate__animated animate__fadeInDown animate__delay-4s">A FEAST FOR YOUR SENSES</h1>
      <div id="border-bottom">
      </div>
       
</div>
</div>
</div>
</div>
</div>
</div>
<br>
<div class="background">
  <div class="container">
    
    <center><h2 style="color:#c7ad18;font-family:Gabriola;">from the menu<br><br><strong style="font-size:40px;"class="animate__animated animate__fadeInDown animate__delay-4s">Special Offers</strong></h2></center>
    <div id="border-bottom">
  </div>
  </div>
<br>
<br>

  <!--special food-->
<div class="container">
  <div class="row">
    <div class="col-md-6 col-sm-5">
      <div class="thumbnail">
        <img src="restuarant image/foodlanding.jpg.jpg" style="height:370px;" class="image animate__animated animate__fadeInLeft animate__delay-4s">
        </div>
      </div>
      <div class="col-md-6 col-sm-7 col-xs-12">
      
          <center><h2><strong style="font-family:Gabriola;color:black;">EXCLUSIVE THALIS:</strong></h2>
          </center>
          <div class="items">
          <center>
          <h3 style="font-family:Gabriola;color:black;font-size:30px;"><p>Punjabi Thali ................................​Rs.220
            <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">Shahi paneer,Dal makhni,Gulab jamun,Rice,3 Butter naan</strong>
            <br><br>Indian Thali ..................................​Rs.320
            <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">Matar paneer,Dal makhni,Gulab jamun,Rice,2 Lacha paratha</strong>
            <br><br>South Indian Thali .....................​Rs.400
            <br><strong style="font-family:Candara Light;font-size:15px;color:rgb(156, 156, 155);">Masala dosa, Idli, Rice, Chutney, Spring rolls</strong>
          </center>
          <br><br>
          </div>
          </div>
          
          <a href="menu.php"><center><button type="submit" value="Full menu" class="btn input-lg">Full menu</center></button></a>
  </div>
  
</div>

<br>
<br>
<br>
<!--Gallery-->

<div class="container-fluid">
  <div class="row">
    <div class="content2">
    <div class="banner-image2 ">       
<div class="inner-banner-image2">
    <div class="banner_content2">
      <h1 style="font-family:Gabriola; font-size:45px;color:#c7ad18;"class="animate__animated animate__fadeInDown animate__delay-5s">Exclusive food</h1>
      <h1 style="font-family:Gabriola;font-size:45px;"class="animate__animated animate__fadeInDown animate__delay-5s">LOOK AT OUR PHOTO GALLERY</h1>
      <div id="border-bottom">
      </div>
</div>
</div>
</div>
</div>
</div>
</div>
<br>
<br>

<!--photo gallery-->

<div class="container">

<div class="row">
  <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="thumbnail">
      <img src="restuarant image/gallery (4).jpg"alt="khathi Roll"style="height:285px;width:400px;"class="image" id="myImg">
      </div>
    </div>

    <div id="myModal" class="modal">
  <img class="modal-content" target="_blank" id="img01">
  <div id="caption"></div>
  <span class="close">&times;</span>
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="thumbnail">
        <img src="restuarant image/gallery (5).jpg" alt="food"style="height:285px;width:400px;"class="image" id="myImg1">
        </div>
</div>


<div id="myModal" class="modal">
  <img class="modal-content" target="_blank" id="img01">
  <div id="caption"></div>
  <span class="close">&times;</span>
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg1");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

  <div class="col-md-4 col-sm-4 col-xs-12">
  <div class="thumbnail">
    <img src="restuarant image/gallery (16).jpg" alt="food"style="height:285px;width:400px;"class="image" id="myImg2">
    </div>
  </div>
</div>


<div id="myModal" class="modal">
  <img class="modal-content" target="_blank" id="img01">
  <div id="caption"></div>
  <span class="close">&times;</span>
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg2");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

<div class="row">
  <div class="col-md-4 col-sm-4 col-xs-12">
    <div class="thumbnail">
      <img src="restuarant image/gallery (1).jpg"alt="food"style="height:285px;width:400px;" class="image" id="myImg3">
      </div>
    </div>


    <div id="myModal" class="modal">
  <img class="modal-content" target="_blank" id="img01">
  <div id="caption"></div>
  <span class="close">&times;</span>
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg3");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

    <div class="col-md-4 col-sm-4 col-xs-12">
      <div class="thumbnail">
        <img src="restuarant image/gallery (2).jpg" alt="food" style="height:285px;width:400px;"class="image" id="myImg4">
        </div>
</div>


<div id="myModal" class="modal">
  <img class="modal-content" target="_blank" id="img01">
  <div id="caption"></div>
  <span class="close">&times;</span>
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg4");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

  <div class="col-md-4 col-sm-4 col-xs-12">
  <div class="thumbnail">
    <img src="restuarant image/gallery (13).jpg" alt="food" style="height:285px;width:400px;" class="image" id="myImg5">
    </div>
  </div>
</div>
</div>


<div id="myModal" class="modal">
  <img class="modal-content" target="_blank" id="img01">
  <div id="caption"></div>
  <span class="close">&times;</span>
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg5");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

<br>
<a href="gallery.php"><center><button type="submit" value="View" class="btn input-lg">View gallery</center></button></a>
<br><br>
<!--contact-->

<div class="container-fluid">
  <div class="row">
    <div class="content3">
    <div class="banner-image3 ">       
<div class="inner-banner-image3">
    <div class="banner_content3">
      <h1 style="font-family:Gabriola; font-size:45px;color:#c7ad18;">Visit Us At Food Nation</h1>
      <h1 style="font-family:Gabriola;font-size:45px;">BOOK YOUR TABLE</h1>
      <div id="border-bottom">
      </div>
      <br>
      <br>
      <a href="contact.php"><center><button type="submit" value="reservation table" class="btn1 input-lg">Reservation</center></button></a>
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
