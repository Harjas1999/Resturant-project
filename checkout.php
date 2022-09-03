<?php
session_start();
if(!isset($_SESSION['name'])){
?>
  ?>
  <script>alert("You are Logged Out")</script>
<?php
?>
<script>location.replace("login.php")</script>
<?php
}
$con = mysqli_connect("localhost", "root", "", "resturant");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
			
				echo '<script>window.location="cart.php"</script>';
				
			}
		}
	}
}

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
 html{
      scroll-behavior: smooth;
    }
    .navbar {
    margin-bottom: 0;
    background-color: rgba(0,0,0,0.9);
    z-index: 9999;
    border-bottom: 1px solid white;
    font-size: 14px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 4px;
  }
  .navbar li a, .navbar  {
    color: white !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color:#FFD700 !important;
    background-color: transparent !important;
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
  .border-bottom{
    border-bottom:1px solid;
  }
  .follow{
    justify-content:center;
    display:flex;
  }
  .footer{
  background-color:#04151d;
    color:white;
    font-family:Gariola;
    font-size:16px;
    padding-top:25px;
  }
  .jumbotron{
    box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.10);
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
  </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
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
        <li><a href="onlinemenu.php"><img src="restuarant image/icons8-restaurant-menu-64.png"style="width:20px;height:20px;">Menu</a></li>
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
        <li style="color:white; margin-top:8px;padding-left:15px;"><span class="glyphicon glyphicon-user" style="color:white;margin-top:7px;"></span> <?php echo $_SESSION['name'];?></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>logout</a></li>
      </ul>
     
    </div>
  </div>
  </nav>
<br>
<br>
<br>
<br>
<br>
<!--checkout form-->
<?php
if(isset($_POST['submit'])){
$full_name=mysqli_real_escape_string($con,$_POST['full_name']);
$email_id=mysqli_real_escape_string($con,$_POST['email_id']);
$pin_code=mysqli_real_escape_string($con,$_POST['pin_code']);
$billing_address=mysqli_real_escape_string($con,$_POST['billing_address']);
$phone_number=$_POST['phone_number'];
$card_holder=mysqli_real_escape_string($con,$_POST['card_holder']);


$regex='/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';
if(strlen($phone_number)<10 || (strlen($phone_number)>10)) {
  
  ?>
  <script>
  alert("phone number is not correct");
  </script>
 <?php
 }
   
   elseif(!preg_match($regex,$email_id)){
     ?>
     <script>
     alert("invalid email");
     </script>
     <?php
    }
   else{
    $user_order_query="insert into checkout(full_name,email_id,pin_code,billing_address, phone_number, card_holder ) values('$full_name','$email_id','$pin_code','$billing_address','$phone_number','$card_holder')";
    $user_order_submit=mysqli_query($con,$user_order_query) or die(mysqli_error($con));
    
    if($user_order_submit){
    ?>
    <script>
    alert("user payment successfull ");
    </script>
   
   <?php
	 ?>
	 <script>
	 location.replace('thanku.php');
	 </script>
	 <?php
  }
}
  }
  
?>
<div class="container">
<div class="row">
<div class="col-md-7 col-sm-7 col-md-offset-1 col-sm-offset-1">
<form method="post" action="">
<center><h2><strong>Billing Address</strong></h2></center>

    <div class="form-group ">
    <label for="fullname">Full Name</label>
    <input type="text" id="fullname" class="form-control" name="full_name" placeholder="Your name.." required>
</div>

    
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" id="email" class="form-control" name="email_id" placeholder="Your Email.." required>
   </div>

   



  <div class="form-group">
    <label for="pincode">Pin Code</label>
    <input type="text" id="pincode" name="pin_code" class="form-control" placeholder="pin code.." required>
  </div>

<div class="form-group">
    <label for="address1"> Billing Address</label>
    <textarea id="address1" name="billing_address" class="form-control" placeholder="Write your address.." required></textarea>
  </div>

  
<div class="form-group ">
    <label for="number">Phone number</label>
    <input type="text" name="phone_number"class="form-control" placeholder="phone number.."id="number" inputmode="numeric" required></textarea>
    </div>
    <br>
 <div class="border-bottom"></div>
<br>
    <input type="checkbox" value="" > Shipping address is same as my billing address
    </input>
    <br>
    <input type="checkbox" value="" > Save this information for later</input>
    <br><br>
    <div class="border-bottom"></div>
    <br>
  <div class="form-group">
    <h3><label for="payment">Payment</label></h3>
  <input type="radio" value="cashondelivery" id="payment" name="card" required> Cash on delivery
  <br>
  <input type="radio" onclick="debitform" value="debitcard"data-toggle="modal" name="card" data-target="#myModal" id="payment"> Debit card
  <br>
  <input type="radio" value="creditcard"data-toggle="modal" data-target="#myModal" name="card" id="payment"> credit card         
</div>



  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
  <br>

    <div class="modal-dialog modal-md">
      <div class="modal-content">
   
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Payment</h4>
        </div>
        <div class="modal-body">
        <center>
        <div class="form-group form-inline">
    <label for="card">Card details*</label>
		<br>
    <input type="text" class="form-control" placeholder="Card holders name.."id="card" name="card_holder" required>
    

		<div class="form-group  ">
    <input type="text"  class="form-control" inputmode="numeric"placeholder="XXXX-XXXX-XXXX-XXXX" required>
    </div>
		</div>
    
    <div class="form-group form-inline">
    <input type="month"  class="form-control"  placeholder="MM/YY.." required>
   

    <div class="form-group ">
    <input type="password" class="form-control" inputmode="numeric" placeholder="CVV.." required>
    </div>
    </div>
    <div class="visa">
		
		<img src="restuarant image/mastercard.png"width="50" height="50">
		<img src="restuarant image/visacard.png"width="50"height="50">
		<img src="restuarant image/paypal.png"width="80"height="50">
 
		</div>
    <button type="submit" class="btn btn-success" data-dismiss="modal">Confirm</button>

    </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


    

   <center> 
<a href="thanku.php"><button type="submit" value="submit" name="submit" class="btn btn-primary input-lg"> Confirm order</button>
</a>
</center>      
</form>
      </div>

<!--order summary-->
      <?php
      $query = "SELECT * FROM maincourse ORDER BY id ASC";
      $result = mysqli_query($con, $query);
      if(mysqli_num_rows($result) > 0)
      {
        while($row = mysqli_fetch_array($result))
        {
        
       
      ?>
  
    <?php
        }
      }
    ?>
 
      <div class="col-md-4 col-sm-4">
     <center> <h2><strong>Your Cart<strong style="padding-left:5px;"><span class="badge"><?php if(isset($_SESSION['shopping_cart'])) { echo count($_SESSION["shopping_cart"]);} else {echo "0";}?></strong></span></strong></h2></center>
        <div class="jumbotron">
        <center><h4><strong>Order Summary</strong></h4></center>
        <?php
        
        if(!empty($_SESSION["shopping_cart"]))
        {
          
          $total = 0;
          foreach($_SESSION["shopping_cart"] as $keys => $values)
          {
            
        ?>
        
        <div class="border-bottom"></div>
          <h5><strong>Item Name:</strong>     <?php echo $values["item_name"]; ?></h5>
          
         <h5><strong>Quantity:</strong>      <?php echo $values["item_quantity"]; ?></h5>
          <h5><strong>Price: </strong>       Rs.<?php echo $values["item_price"]; ?></h5>
        
         
      
        <?php
            $total = $total + ($values["item_quantity"] * $values["item_price"]);
         
          }
          
        ?>
        <div class="border-bottom"></div>
         <h5><strong>GST:</strong><strong style="padding-left:13px;">2%</strong></h5>
         <h5><strong>SGST:</strong><strong style="padding-left:5px;">2%</strong></h5>
         <h5><strong>Delivery Charges:</strong> Rs. 0</h5>
         <div class="border-bottom"></div>
            <h5 style="padding-left:0px;"><strong>Grand Total:</strong>  Rs.<?php echo number_format($total,2); ?></h5>
        
        
       <?php
        }
       ?>
       </div>
        </div>

        </div>
        </div>

<br>
<br>
        <!--footer-->

        <div class="footer">
 <div class="container-fluid">
        
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