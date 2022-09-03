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
    background-color:transparent !important;
   
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
    background:url("https://images.unsplash.com/photo-1578474846511-04ba529f0b88?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=adrien-olichon-ZgREXhl8ER0-unsplash.jpg") no-repeat center;
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
    background-color:#04151d;
  }
 
  .background1{
    background-color:rgb(250, 245, 235);
  }
  .btn1{
    background:#115173;
  width: 110px;
  height: 45px;
  line-height: 42px;
  padding: 0;
  color:white;
  }
  .btn1:hover{
    color:#FFD700;
  }
  .btn {
  background:#115173;
  width: 110px;
  height: 45px;
  line-height: 42px;
  padding: 0;
  color:white;
}
.btn:hover{
  color:#FFD700;
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
.thumbnail{
  box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.10); 
}
.mapouter{
  position:relative;
  text-align:right;
  height:365px;
  width:100%;
 
  }
  .gmap_canvas {
    overflow:hidden;
    background:none!important;
    height:365px;
    width:100%;
    display:center;
    }
    .follow{
  justify-content:center;
  display:flex;
}
input[type="text"]{
  transition: width .3s;
}
input[type="text"]:focus{
  width:600px;
}
input[type="text"]:valid{
  border: 1px solid green;
}
input[type="email"]{
  transition: width .3s;
}
input[type="email"]:focus{
  width:600px;

}
input[type="email"]:valid{
  border: 1px solid green;
}
textarea{
  transition: width .3s;
}
textarea:focus{
  width:600px;
}
textarea:valid{
  border: 1px solid green;
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
        <li class="active"><a href="">Contact</a></li>
        <li ><a href="gallery.php">Gallery</a></li>
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
        <h1 style="font-family:Gabriola; font-size:55px;">Contact Us</h1>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="background">
  <div class="container">
    <br>
    <center><h2 style="color:#c7ad18;font-family:Gabriola;">join us<br><br><strong style="font-size:40px;">Come And See Us </strong></h2></center>
    <div id="border-bottom">
      </div>
    </div>
  </div>
      <br>
<br>
 
<div class="container">
  <div class="row">
  <div class="col-md-6 col-sm-12">
  <div class="thumbnail">
 <br><center><img src="https://img.icons8.com/material/2x/taxi-location.png"alt="Responsive image" class="img"></center>
 <div class="caption">
<center><h3><strong style="font-family:Gabriola;font-size:40px;">Main Restaurant address</strong></h3></center>

      <center><h4>N-185,block-6, Main road,Delhi-110004</h4>
</center>
<center><h4>Near Punjabi bagh,INDIA</h4>
</center>


</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
 <div class="thumbnail">
 <br><center><img src="https://img.icons8.com/fluent-systems-filled/2x/clock.png"alt="Responsive image"></span></center>
 <div class="caption">
 <center><h3><strong style="font-family:Gabriola;font-size:40px;">Opening hour</strong></h3>
</center>

      <center><h4>Mon-Fri: 10.00 AM-11.00 PM</h4>
</center>
<center><h4 style="color:rgb(243, 16, 16);">Sunday: Closed</h4>
</center>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6 col-sm-12">
 <div class="thumbnail">
<br><center><img src="https://img.icons8.com/material-outlined/2x/ringing-phone.png"alt="Responsive image"></center>
<div class="caption">
<center><h3><strong style="font-family:Gabriola;font-size:40px;">Phone numbers</strong></h3>
</center>

      <center><h4>For Tech support: +91 9999251393<br><br>For Booking: +91 8375841596</h4>
</center>
</div>
</div>
</div>
<div class="col-md-6 col-sm-12">
 <div class="thumbnail">
<br><center><img src="https://img.icons8.com/fluent-systems-filled/2x/filled-message.png"alt="Responsive image"></center>
<div class="caption">
      <center><h3><strong style="font-family:Gabriola;font-size:40px;">Email addresses</strong></h3>
</center>
<center><h4>For Customers: Foodnation@gmail.com<br><br>For Tech Support: TechFoodnation@gmail.com</h4>
</center>
</div>
</div>
</div>
</div>
</div>
<br><br><br>
 <!--join us -->

<div class="background1">
<div class="container">
  <br>
  <center><h2 style="color:#c7ad18;font-family:Gabriola;">get in touch<br><br><strong style="font-size:40px;">Send Us A Message</strong></h2></center>
  <div id="border-bottom">
    </div>
  </div>

<br>

<!--send us message-->
<?php
$con=mysqli_connect("localhost","root","","resturant") or die(mysqli_error($con));

if($con){
	?>
	<script>alert("connection successfull");</script>
	<?php
}else{
	?>
	<script>alert("not successfull");</script>
	<?php
}


if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$subject=mysqli_real_escape_string($con,$_POST['subject']);
$message=mysqli_real_escape_string($con,$_POST['message']);


$regex='/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';
 
   if(!preg_match($regex,$email)){
     ?>
     <script>
     alert("invalid email");
     </script>
     <?php
    }
   else{
    $query="insert into message(name,email,subject,message) values('$name','$email','$subject','$message')";
    $user_submit=mysqli_query($con,$query) or die(mysqli_error($con));
    
    if($user_submit){
    ?>
    <script>
    alert("Message sent successfull ");
    </script>
   
   <?php
	 
  }
}
  }
  
?>

  <div class="container">
    <div class="row">
  <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
    <form action="" method="post">
    <br>
  
      <div class="form-group">
      <label for="name">Name</label>
      <input type="text" id="name" class="form-control" name="name" placeholder="Your name.." required>
  </div>
      <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" class="form-control" name="email" placeholder="Your last name.." required>
     </div>

      <div class="form-group">
      <label for="subject">Subject</label>
      <input type="text" id="subject" name="subject" class="form-control" placeholder="Write something.." required>
  </div>
      
  <div class="form-group ">
      <label for="message">Message:</label>
      <textarea id="message" name="message"class="form-control" placeholder="Write something.." rows="4" required></textarea>
      </div>
  <br>
  
  <center><button type="submit" name="submit" value="Send message" class="btn input-lg">Send message</button></center>
  
    </form>
  </div>
  </div>
  </div>

<br>
<br>
<center>
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="mapouter">
<div class="gmap_canvas">
<iframe width="115%" height="365px" id="gmap_canvas" src="https://maps.google.com/maps?q=food%20nation%20delhi&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
<a href="https://embedgooglemap.net/maps/23"></a>
<br>
<a href="https://www.embedgooglemap.net">interactive maps for websites free</a>
</div>
</div>
</div>
</div>
</div>
</center>
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
