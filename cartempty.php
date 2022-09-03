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
  .footer{
  background-color:#04151d;
    color:white;
    font-family:Gariola;
    font-size:16px;
    padding-top:25px;
  }
  .follow{
    justify-content:center;
    display:flex;
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
        <li><a href=""><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
        <li style="color:white; margin-top:8px;padding-left:15px;"><span class="glyphicon glyphicon-user" style="color:white;margin-top:7px;"></span> <?php echo $_SESSION['name'];?></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>logout</a></li>
      </ul>
     
    </div>
  </div>
  </nav>
<br>
<br>
<br>
<center>

<h2>Order Details</h2>
<div class="row">
<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 ">
<div class="jumbotron">
<img src="restuarant image/emptycart.png">
<h3>Your Cart is Empty </h3><h4>add items to cart</h4>
</div>
</div>
</div>
</center>

<center>	<a href=""><button type="submit"  id="myBtn" value="Checkout"name="Checkout"class="btn btn-success input-lg" disabled> Continue to Checkout</button></a>
</center>
<br>
<br>

<br>
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

</body>
</html>