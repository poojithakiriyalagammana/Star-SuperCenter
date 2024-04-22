<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Product </title>
<link href="Assets/css/userHome.css" rel="stylesheet" type="text/css">
<link href="Assets/css/product-view.css" rel="stylesheet" type="text/css">
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
	.container::before
	{
		opacity: 0.9;
	}
	.container .details .dis{
		padding:0px 170px 0px 0px;
	}
</style>

</head>
<body>

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
		<a href="index.php"><i class="fa-solid fa-user"></i> Home</a>
		<a href="cart.php" class="facart"><i class="fa-solid fa-cart-plus" ></i> Cart</a>
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
	  <a href="#"><b>Contact Us</b></a>
		<a herf="#"><b>About us</b></a>
	</nav>
</header>


<section>

<?php
if(isset($_GET['product']))
{
    $product_slug =$_GET['product'];
    $product_data = getSlugActive("products",$product_slug);
    $product = mysqli_fetch_array($product_data);
    
    if($product)
    {
        ?>
                <div class="container product_data ">
                    <div class="box one">
                    <div class="details">
                        <div class="topic"><?=$product['name']?></div>
                        <div class="dis"><?=$product['description']?></div>
                        <div class="small"><?=$product['small_description']?></div>
                        <div class="price-box">

                            <div class="discount">Rs. <?=$product['original_price']?></div>
                            <div class="price">Rs. <?=$product['selling_price']?></div>
                        </div>
                    </div>
                    <div class=qty>
                            <button class="group-text decrement-btn">-</button>
                            <input type="text" class="form-control input-qty " value="1">
                            <button class="group-text increment-btn">+</button>
                    </div>
                    <div class="button1">
                        <button class="addToCartBtn "value="<?=$product['id']?>">Add to Cart</button>
                        
                    </div>
                    </div>
                    <div class="box two">
                    <div class="image-box">
                        <div class="image">
                        <img src="uploads/<?=$product['image']?>" alt="Product image ">
                        </div>
                        <div class="info">
                        <div class="name"><?=$product['name']?></div>
                        <span><?php if($product['trending']){echo "Trending";} ?></span>
                        
                        
                        <div class="button2">
                            <button>Add to Wishlist</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
        
        <?php
    }
    else 
        {
            echo "Something went Wrong";
        }
}

else 
{
    echo "Something went Wrong";
}
?>
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
		<script src="Assets/js/custom.js"></script>
 <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>   
    alertify.set('notifier','position', 'top-right');
    <?php if(isset($_SESSION['message'])) { ?>
        
        alertify.success('<?= $_SESSION['message']; ?>');
    <?php
        unset($_SESSION['message']); 
        }
     ?>
 </script>       	
</body>
</html>
