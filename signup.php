<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="finisher-header.es5.min.js" type="text/javascript"></script>

<link rel="preconnect" href="https://fonts.gstatic.com">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="">
  <title>demo</title>
  <style>
 
  .jumbotron{
  
    color:white;
    background-color:rgba(0,0,0,0.8);
    margin-top:20px;
    margin-bottom:20px;
   box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0); 
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
if($con){
  ?>
  <script>alert("connection successfull")</script>
<?php
}else{
  ?>
  <script>alert("connection not successfull")</script>
<?php
}

if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($con,$_POST['name']);
$email_id=mysqli_real_escape_string($con,$_POST['email_id']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$cpassword=mysqli_escape_string($con,$_POST['cpassword']);


$pass = password_hash($password, PASSWORD_BCRYPT);
$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

$regex='/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';

   if(!preg_match($regex,$email_id)){
     ?>
     <script>
     alert("invalid email");
     </script>
     <?php
    }
    $emailquery="select * from signup where email_id='$email_id'";
    $query=mysqli_query($con,$emailquery);

    $emailcount=mysqli_num_rows($query);

    if($emailcount>0){
      ?>
      <script>alert("email already exist");</script>
      <?php
    }else{
      if($password === $cpassword){

      $insertquery="insert into signup (name, email_id, password, cpassword) values('$name','$email_id','$pass','$cpass')";
      $iquery=mysqli_query($con,$insertquery);

      if($iquery)
      {
        ?>
        <script>alert("user inserted successfully")</script>
     <?php
     ?>
      <script>
      location.replace("login.php");
      </script>
      <?php
      }
     
    }else{
        ?>
        <script>alert("password is not matching")</script>
      <?php
      
    }
  }

}
  ?>
  <div class="header finisher-header" style="width: 100%; height: 100%;">

<div class="container">
<div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
<div class="jumbotron">
<form method="post" action="">
<center> <h1 style="font-size: 30px; text-align:center;"><strong><u>Create account</u></strong></h1>
            </center>
            <br>
           
                <div class="form-group">
                    <label for="name">Name</label>
                    <br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="full name" required >
                    </div>
                
                
         <div class="form-group">
                    <label for="emailid">Email Id</label> <span class="glyphicon glyphicon-envelope"></span>
                    <br>
                    <input type="text" class="form-control" id="emailid" name="email_id" placeholder="email id" required>
         </div>
                
         <div class="form-group">
               <label for="password">Password</label> <span class="glyphicon glyphicon-lock"></span>
               <br>
               <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
              
              
   
           </div>
           <div class="form-group">
          <label for="cpassword">Confirm Password</label> <span class="glyphicon glyphicon-lock"></span>
      <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="password" required>
</div>


  <!-- Trigger the modal with a button -->
  <label>
  <input type="checkbox" value="terms and conditions"data-toggle="modal" data-target="#myModal" checked="checked"> I accept the <strong style="color:green;">Terms to Use</strong> & <strong style="color:green;">Privacy policy</strong>
</label>
<br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog"\>
    <div class="modal-dialog modal-xs">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:black;">Terms & conditions</h4>
        </div>
        <div class="modal-body">
          <p style="color:black;font-size:15px;font-family:callibri;">These Terms and Conditions constitute a legally binding agreement made between you, whether personally or on behalf of an entity (“you”) and [business entity name] (“we,” “us” or “our”), concerning your access to and use of the [website name.com] website as well as any other media form, media channel, mobile website or mobile application related, linked, or otherwise connected thereto (collectively, the “Site”).

You agree that by accessing the Site, you have read, understood, and agree to be bound by all of these Terms and Conditions. If you do not agree with all of these Terms and Conditions, then you are expressly prohibited from using the Site and you must discontinue use immediately.

Supplemental terms and conditions or documents that may be posted on the Site from time to time are hereby expressly incorporated herein by reference. We reserve the right, in our sole discretion, to make changes or modifications to these Terms and Conditions at any time and for any reason.

We will alert you about any changes by updating the “Last updated” date of these Terms and Conditions, and you waive any right to receive specific notice of each such change.

It is your responsibility to periodically review these Terms and Conditions to stay informed of updates. You will be subject to, and will be deemed to have been made aware of and to have accepted, the changes in any revised Terms and Conditions by your continued use of the Site after the date such revised Terms and Conditions are posted.

The information provided on the Site is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or regulation or which would subject us to any registration requirement within such jurisdiction or country.

Accordingly, those persons who choose to access the Site from other locations do so on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable.

These terms and conditions were generated by Termly’s Terms and Conditions Generator.<br>

<br>
<br>
<strong>Privacy policy:</strong><br><br>

(1) all registration information you submit will be true, accurate, current, and complete; 
<br>
(2) you will maintain the accuracy of such information and promptly update such registration information as necessary;
<br>
(3) you have the legal capacity and you agree to comply with these Terms and Conditions;
<br>
(4) you are not under the age of 13;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    <script type="text/javascript">
new FinisherHeader({
  "count": 78,
  "size": {
    "min": 2,
    "max": 41,
    "pulse": 0
  },
  "speed": {
    "x": {
      "min": 0,
      "max": 0.4
    },
    "y": {
      "min": 0,
      "max": 0.6
    }
  },
  "colors": {
    "background": "#131218",
    "particles": [
      "#fbfcca",
      "#d7f3fe",
      "#ffd0a7"
    ]
  },
  "blending": "overlay",
  "opacity": {
    "center": 1,
    "edge": 0
  },
  "skew": 0,
  "shapes": [
    "c"
  ]
});
</script>
  </div>



               <br>
  
                 <br>
                  <center><a href="">  <button type="submit" value="submit" name="submit" class="btn btn-primary input-lg btn-block">Submit</button>     
                    </center> </a>
                  <center><br><strong>Already have an Account?</strong><a href="login.php"> Login</a>    
                        </center></form>
           
             
</div>
</div>
</div>
</div>
</body>
</html>