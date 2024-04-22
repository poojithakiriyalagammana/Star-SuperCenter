<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home page </title>
<link href="Assets/css/userHome.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="websait icon" type="png" href="Assets/images/LOGO.png"> 
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<style media="Screen">
	.home{
	display: flex;
	align-items: center;
	min-height: 83.8vh;
	background:url("Assets/images/home.png") no-repeat;
	background-size: cover;
	background-position: center;
	height: 1px	
	}
	</style>
</head>
<body>
<style>
								h3{
									color: #000;
								}
							</style>
<?php 
session_start();
include('functions/userfuntions.php');
?>
<header>
	
	<nav class="navbar">
		<div class="LOGO">
		<a href="index.php"><img src="Assets/images/LOGO.png" width="200" height="65" alt=""> </a> 
		</div>
		<div class="search">
			<a href="#"><input type="search" placeholder="Search here"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a>
		</div>
		<div class="navi">
		<a href="login.php"><i class="fa-solid fa-user"></i> Sign in</a>
		<a href="#" class="facart"><i class="fa-solid fa-cart-plus" ></i> Cart</a>
		</div>
	</nav>
	<nav class="navbar2">
			<li>
			<a class="sh" href="#"><b>Shop By Category</b> <i class="fa-solid fa-caret-down"></i></a>
			<ul class="drop">
				<li> <?php $categories = getAllActive('categories');
			if(mysqli_num_rows($categories) > 0)
				{
					foreach($categories as $item)
					{
						?>
						<a href="viewproducts.php?category=<?= $item['slug'];?>">
						<h7><?= $item['name'];?></h7>
						</a>
						<?php
					}
				}
			?>
			</li>
			</ul>
			</li>	
			<a href="#features"><b>Our Features</b></a>
	  <a href="Contact Us Page.html"><b>Contact Us</b></a>
		<a herf="#"><b>About us</b></a>
	</nav>
</header>

<section class="home" id="home">
		<div class="content">
			<h3>Shop Smarter Live Better</h3>
			<span>"Your Ultimate Online Supermarket Experience!"</span>
			<p>Experience the convenience of online shopping with our vast selection of fresh, high-quality groceries and household essentials, delivered right to your door.</p>
			<a href="#banner1" class="btn">Get Started</a>
		</div>
</section>
<section class="banner1" id="banner1">
	<a href="#"><img src="Assets/images/banner1.png" width="1460" height="181" alt=""/></a>
</section>
	
<section class="features" id="features">
		<h3>Our Features</h3>
		<div class="box-container">
			
			<div class="box">
				<input id="ch" type="checkbox">
				<div class="img"><img src="Assets/images/fast delivery.png" width="150" height="94" alt=""/> </div>
		<div class="image">
	   	<p>Fast delivery is a service that allows customers to receive their orders in a shorter timeframe than traditional shipping methods.</p>
				<div class="Content">
					<p>At Star Supercenter, we understand that our customers value convenience and speed, which is why we offer fast delivery options to meet their needs. Our fast delivery service allows customers to receive their orders on the same day, depending on their location and selected shipping method. With our reliable and efficient delivery service, customers can rest assured that their demands will arrive in a timely manner, allowing them to enjoy their purchases</p>
					<label for="ch">Show less</label>
				</div>
				<div class="x">	
				<label for="ch">Read more</label>
			  	</div>
				</div>	
				</div>
			
			<div class="box">
				<input id="ch1" type="checkbox">
				
				<div class="img"><img src= "Assets/images/easypay.png" width="150" height="94" alt=""/></div> 
				<div class="image">
				<p>Star Supercenter allows EasyPay customers to use their preferred payment method, not just cash or credit cards.</p>
				<div class="Content">
					<p>With EasyPay, customers can link their payment information to their Star Supercenter account, making it easy to complete transactions quickly and securely. This payment option is designed to make the shopping experience more seamless, allowing customers to focus on finding the products they need without worrying about payment. EasyPay is available both in-store and online, making it a flexible payment option for all types of purchases. With the security features built into EasyPay, customers can trust that their payment information is safe and protected at all times.</p>
					<label for="ch1">Show less</label>
				</div>
				<div class="x">	
				<label for="ch1">Read more</label>
			  	</div>
				</div>		
				</div>
			</div>
</section>
	
<section class="products" id="products">
		<h1> Shop by Category</h1>
		<div class="box-container">

			<?php $categories = getAllActive('categories');
			if(mysqli_num_rows($categories) > 0)
			{
				foreach($categories as $item)
				{
					?>
					<a href="viewproducts.php?category=<?= $item['slug'];?>">
					<div class="box">
						<div class="image">
							<img src="uploads/<?= $item['image'];?>" alt="Category Image" width="250" height="211">
							<h3><?= $item['name'];?></h3>
						</div>
					</div>
					</a>
					<?php
				}
			}
			else
			{
				echo "No data Available";
			}
			?>
	
	  </div>
</section>
	
<section class="footer" id="footer">
		
  <div class="box-container">
	<div class="col-1">
		<h3><b>MORE ABOUT COMPANY</b></h3>
			<p>As for Star Supercenter, it appears to be a grocery store chain that specializes in providing a wide range of daily necessities, including food items, household goods, and personal care products. The company aims to provide customers with a convenient and affordable shopping experience. Star Supercenter may offer a range of products from different brands, as well as their own private-label products. The stores may also offer services such as in-store bakery and deli sections, as well as online ordering and home delivery.</p><br>	
			<a href="Contact Us Page.html"><b>Contact Us</b></a>
			</div>
	<div class="col-2">
			<h3><b>KEEP CONNECTED</b></h3>
		<div class="social">
			<a href="#"><i class="fa-brands fa-facebook"></i> FACEBOOK</a><br>
			<a href="#"><i class="fa-brands fa-twitter"></i> TWITTER</a><br>
			<a href="#"><i class="fa-brands fa-pinterest"></i> PINTEREST</a><br>
		</div>
	 </div>
 </div>
	<hr>
	<div class="policy">
		<a href="#">Terms and Conditions</a>
		<a href="#">Privacy Policy</a>
		<a href="#">Retum Policy</a>
		<a href="#">FAQ</a>
	</div>
	<hr>
	<p class="copy">Copyrights 2023 - Pankaja Kiriyalagammana</p>
</section>			
</body>
   <!-- JavaScript -->
   <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>    
    <?php if(isset($_SESSION['message'])) { ?>
        alertify.set('notifier','position', 'top-right');
        alertify.success('<?= $_SESSION['message']; ?>');
    <?php
        unset($_SESSION['message']); 
        }
     ?>
 </script>
</html>
