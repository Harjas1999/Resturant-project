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
				echo '<script>window.location="shirt.php"</script>';
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
    background-color: rgba(0,0,0,0.7);
    z-index: 9999;
    border-bottom: 1px solid white;
    font-size: 14px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 3px;
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
  .content{
    min-height:100px;
}
.banner-image{
    
    margin-top:0px;
    padding-bottom:50px;
    text-align:center;
    color:#f8f8f8;
    background:url("https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-1.2.1&q") no-repeat center;
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
#border-bottom{ 
  border-bottom: 3px solid #ceb218;
  width: 6%;
  margin-left:47%;
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
.content1{
    min-height:100px;
}
.banner-image1{
    
    margin-top:0px;
    padding-bottom:50px;
    text-align:center;
    color:#f8f8f8;
    background:url("https://images.unsplash.com/photo-1559842438-2942c907c8fe?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=cody-chan-ZJ9KJJnY0PY-unsplash.jpg") no-repeat center;
    background-size:cover;
    
}

.banner_content1{
 
    padding-top:20%;
    padding-bottom:8%;
    overflow:hidden;
    margin-bottom:18%;
    max-width:1200px; 
}
.footer{
  background-color:#04151d;
    color:white;
    font-family:Gariola;
    font-size:16px;
    padding-top:25px;
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
  border:none;
}
.img:hover{
  transform:scale(1.1);
  transition:0.3s;
}
.badge{
  border-radius:none;
  background-color:#115173;
  padding-right:0px;
  padding-left:2px;
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
        <li><a href=""><img src="restuarant image/icons8-restaurant-menu-64.png"style="width:20px;height:20px;">Menu</a></li>
        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span><span class="badge"><?php if(isset($_SESSION['shopping_cart'])) { echo count($_SESSION["shopping_cart"]);} else {echo "0";}?></span>Cart</a></li>
        <li style="margin-top:15px;padding-left:15px;"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['name'];?></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>logout</a></li>
      </ul>
    
    </div>
  </div>
  </nav>


<!--online ordering image-->
  <div class="container-fluid">
    <div class="row">
      <div class="content">
      <div class="banner-image ">       
  <div class="inner-banner-image">
      <div class="banner_content">
      <h1 style="font-family:Gabriola; font-size:45px;color:#c7ad18;">Exquisite cuisine</h1>
      <h1 style="font-family:Gabriola;font-size:45px;">HAVE A LOOK AT OUR MENU</h1>


</div>
</div>
</div>
</div>
</div>
</div>
<br>
<!--snacks heading-->
<center><h2 style="color:#cfb316;font-family:Gabriola;"><strong style="font-size:40px;">Have  A Taste Of Snacks</strong></h2></center>
<div id="border-bottom">
    </div>
<br>
<br>
<br>
<!--snacks photos-->
<div class="container-fluid">
<?php
				$query = "SELECT * FROM snacks ORDER BY id ASC";
				$result = mysqli_query($con, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4 col-sm-4">
				<form method="post" action="onlinemenu.php?action=add&id=<?php echo $row["id"]; ?>">
					<div class="thumbnail">
						<center>
						<img src="restuarant image/<?php echo $row["image"]; ?>" class="img" style="height:230px;width:95%;"/><br />
             
						<h3 class="text-black" style="font-family:Gabriola;color:black;font-size:30px;"><strong><?php echo $row["item_name"];?></strong></h3>

						<h5 class="text-black" style="font-family:Gabriola;color:black;font-size:30px;">Rs.<?php echo $row["price"]; ?></h5>

						<input type="number" name="quantity" value="" class="form-control" placeholder="Quantity" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["item_name"];?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary input-lg btn-block" value="Add to Cart" />
          </center>
					</div>
					

				</form>
        </div>
        
        <?php
					}
				}
			?>
      </div>
<br>
<br>
<br>
<!--main course photo-->
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
<br>
<!--main course heading-->
<center><h2 style="color:#c7ad18;font-family:Gabriola;"><strong style="font-size:40px;">Take A Look At Main Course</strong></h2></center>
<div id="border-bottom">
  </div>
<br>
<br>
<br>
<!--main course -->
<div class="container-fluid">
<?php
				$query = "SELECT * FROM maincourse ORDER BY id ASC";
				$result = mysqli_query($con, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4 col-sm-4">
				<form method="post" action="onlinemenu.php?action=add&id=<?php echo $row["id"]; ?>">
					<div class="thumbnail">
						<center>
						<img src="restuarant image/<?php echo $row["image"]; ?>" class="img" style="height:230px;width:95%;"/><br />
             
						<h3 class="text-black" style="font-family:Gabriola;color:black;font-size:30px;"><strong><?php echo $row["item_name"];?></strong></h3>

						<h5 class="text-black" style="font-family:Gabriola;color:black;font-size:30px;">Rs.<?php echo $row["price"]; ?></h5>

						<input type="number" name="quantity" value="" class="form-control" placeholder="Quantity" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["item_name"];?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary input-lg btn-block" value="Add to Cart" />
          </center>
					</div>
					

				</form>
        </div>
        
        <?php
					}
				}
			?>
      </div>
<br>
<br>
<br>
<!--drinks photo-->
<div class="contaner-fluid">
<div class="content1">
  <div class="banner-image1 ">       
  <div class="banner_content1">
    </div>
    </div>
    </div>
    </div>
<br>
    <!--drinks heading-->
    <center><h2 style="color:#c7ad18;font-family:Gabriola;"><strong style="font-size:40px;">Took It And Drink It</strong></h2></center>
<div id="border-bottom">
  </div>
<br>
<br>
<br>
<!--drinks-->
<div class="container-fluid">
<?php
				$query = "SELECT * FROM drinks ORDER BY id ASC";
				$result = mysqli_query($con, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4 col-sm-4">
				<form method="post" action="onlinemenu.php?action=add&id=<?php echo $row["id"]; ?>">
					<div class="thumbnail">
						<center>
						<img src="restuarant image/<?php echo $row["image"]; ?>" class="img" style="height:230px;width:94%;"/><br />
             
						<h3 class="text-black" style="font-family:Gabriola;color:black;font-size:30px;"><strong><?php echo $row["item_name"];?></strong></h3>

						<h5 class="text-black" style="font-family:Gabriola;color:black;font-size:30px;">Rs.<?php echo $row["price"]; ?></h5>

						<input type="number" name="quantity" value="" class="form-control" placeholder="Quantity" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["item_name"];?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-primary input-lg btn-block" value="Add to Cart" />
          </center>
					</div>
					

				</form>
        </div>
        
        <?php
					}
				}
			?>
      </div>
<br>
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