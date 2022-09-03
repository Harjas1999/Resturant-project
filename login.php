<?php
session_start();
?>
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
  .background{
    background:url("https://images.unsplash.com/photo-1543007630-9710e4a00a20?ixlib=rb-1.2.1&q=80&") no-repeat center;
    background-size:cover;
  }
  .jumbotron{
    color:white;
    background-color:rgba(0,0,0,0.8);
    margin-top:80px;
    margin-bottom:70px;
   box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.10); 
  }
  .form-control{
   background-color:black;
   color:white;
  }
  </style>
  </head>
  <body>
  <?php
  $con=mysqli_connect("localhost","root","","signupform") or die(mysqli_error($con));
  if(isset($_POST['submit'])){

    $email_id=$_POST['email_id'];
    $password=$_POST['password'];
  
    $email_search="SELECT * FROM  signup  where email_id='$email_id'";
    $query=mysqli_query($con,$email_search);
  
   
    $email_count=mysqli_num_rows($query);
  
    
        
         ?>
        <script>location.replace("onlinemenu.php");
        </script>
      <?php 
      }
       
      else{
        ?>
         <script>alert("email is not registered ");</script>      
      <?php
        }
  
  ?>
   
   <div class="background">
<div class="container">
<div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
<div class="jumbotron">
<form method="post" action="">
<center> <h1 style="font-size: 30px; text-align:center;"><strong><u>Login</u></strong></h1>
            </center>
            <br>

            <div class="form-group">
                    <label for="email_id">Email Id</label> <span class="glyphicon glyphicon-envelope"></span>
                    <br>
                    <input type="text" class="form-control" placeholder="email id" id="email_id" name="email_id" required >
               </div>
                    <div class="form-group">
                    <label for="password">Password</label> <span class="glyphicon glyphicon-briefcase"></span>
                    <br>
                    <input type="password" class="form-control" name="password" placeholder="password" id="password" required >
                    <input type="checkbox" onclick="myFunction()"> Show password
               <br>
              
              <script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script> 
</div>
    <button type="Submit"name="submit" value="submit" class="btn btn-primary input-lg btn-block ">Submit</button>
<br><center><strong>Doesn't have an Account?</strong><a href="signup.php"> Signup</a></center>
</form>

</div>
</div>
<br>
<br>
</div>
</div>

</body>
</html>