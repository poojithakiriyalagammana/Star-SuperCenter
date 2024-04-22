<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Category</title>
<link href="../Assets/css/add-category.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="websait icon" type="png" href="../Assets/images/LOGO.png"> 
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

</head>

<body>
<?php 
session_start();
?>
<style media="Screen">
  header .navbar{

  background:#333333;
  padding: .1rem 3%;
  display: flex;
  align-items: center;
  justify-content: space-between;

  }
  header .navbar .search{
  display: flex;
  margin: auto 0;
  height: 35px;
  line-height:35px;
  flex-basis: 70%;
  }
  header .navbar .search input{
  outline:1px solid #000000;
  background: #FFFFFF;
  height: 120%;
  padding: 0 10px;
  font-size: 20px;
  width: 797px;
  border-top: 100px;
  border-radius:9px 0 0 9px;

  }
  header .navbar .search i{
  color: #FFFFFF;
  height: 115%;
  width: 40px;
  padding: 8px;
  font-size: 21px;
  position: relative;
  cursor: pointer;
  z-index: 1;
  border-radius:0 9px 9px 0;
  outline:1px solid #333333;
  bottom: 0.5px;
  border-bottom: 100px;
  background-color: #000000;

  }
  header .navbar .search i::after{
  height: 100%;
  width: 0%;
  content: '';
  background:#261B1B  ;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  border-radius:0 9px 9px 0;

  }
  header .navbar .search i:hover::after{
  width: 100%;

  }
  header .navbar .navi a{
  font-size: 20px;
  padding: 15px 10px;
  color:#FFFFFF ;
  }
  header .navbar .navi a:hover{
  outline:1px solid #FFFFFF;
  border-radius:5px;

  }
  header .navbar2{
  list-style: none;
  background:#000000;
  padding:  1px 50px;
  }
  header .navbar2  .sh{
  font-size: 12px;
  }
  header .navbar2 a{
  padding: 15px 25px;
  color: aliceblue;
  text-decoration: none;
  text-align: center;
  font-size: 12px;
  }/*
  header .navbar2 li{
  display: inline-block;
  position: relative;	
  }
  header .navbar2 li a{
  display: block;
  padding: 15px 25px;
  color: aliceblue;
  text-decoration: none;
  text-align: center;
  font-size: 20px;
  }
  header .navbar2 li ul.drop li{
  display: block;
  }
  header .navbar2 li ul.drop{
  width: 100%;
  background: #000000;
  position: absolute;
  display: none;
  }
  header .navbar2 li a:hover{
  background: #474747;
  }
  header .navbar2 li:hover ul.drop{
  display: block;
  }
  header .navbar2 a:hover{
  background: #474747 ;
  }*/
</style>
<header>
	
	<nav class="navbar">
		<div class="LOGO">
		<a href="index.php"><img src="../Assets/images/LOGO.png" width="200" height="65" alt=""> </a> 
		</div>
		<div class="search">
			<a href="#"><input type="search" placeholder="Search here"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a>
		</div>
		<div class="navi">
		<a href="login.php"><i class="fa-solid fa-user"></i> Sign in</a>
		<a href="#" class="facart"><i class="fa-solid fa-house" ></i> Home</a>
		</div>
	</nav>
	<nav class="navbar2">
            <a class="sh" href="#"><b></b> <i class=""></i></a>
            <a href="#features"><b></b></a>
            <a href="Contact Us Page.html"><b></b></a>
            <a herf="#"><b></b></a>
	</nav>
</header>

  <div class="container">
    <nav>
      <div class="side_navbar">
        <span>Main Menu</span>
        <a href="../admin.php" >Dashboard</a>
        <a href="add-category.php" class="active">Add Category</a>
        <a href="category.php">All Categories</a>
        <a href="add-product.php">Add Product</a>
        <a href="product.php">All Products</a>
        <a href="#">Documnets</a>

        <div class="links">
          <span>Quick Link</span>
          <a href="#">Paypal</a>
          <a href="#">EasyPay</a>
          <a href="#">SadaPay</a>
        </div>
      </div>
    </nav>

    <div class="main-body">
      <h2>Add Category</h2>
      <div class="promo_card">
        <form action="code.php" method="POST" enctype="multipart/form-data">
				<div class="input-row">
					<div class="input-group">
						<label><b>Name</b></label>	
						<input type="text" name="name" required placeholder="Enter Category Name">
					</div>
					
					<div class="input-group">
						<label><b>slug</b></label>	
						<input type="text" name="slug" required placeholder="Enter Slug">
					</div>
				
				</div>
                <div class="input-row">
                    <div class="input-group">
						<label><b>Description</b></label>	
						<textarea rows="3" name="description" required placeholder="Enter Description"></textarea>
					</div>
                    
					
                </div>
				<div class="input-row1">
                    <div class="input-group">
						<label><b>Upload Image</b></label>	
						<input type="file" name="image">
					</div>
                </div>    
				<div class="input-row">
					
					<div class="input-group">
                    <div class="inputgroup">
						<label><b>Meta Title</b></label>	
						<input type="text" name="meta_title" required placeholder="Enter Meta Title">
					</div>	
                    </div>			
				</div>
                <div class="input-row">
                     <div class="input-group">
						<label><b>Meta Description</b></label>	
						<textarea rows="3"  name="meta_description"placeholder="Enter Meta Description"></textarea>
					</div>
                </div>
				<div class="input-row">
					<div class="input-group">
						<label><b>Meta Keyword</b></label>	
						<textarea rows="3"   name="meta_keywords"  placeholder="Enter Meta Keywords" ></textarea>
					</div>
				</div>

                <div class="inputrow">
					<div class="inputgroup">
						<label><b>Status</b></label>	
						<input type="checkbox" name="status">
					</div>
					
					<div class="inputgroup">
						<label><b>Popular</b></label>	
						<input type="checkbox" name="popular">
					</div>
				
				</div>
                <button type="submit" name="add_category_btn">Save</button>
			</form>
      </div>
    </div>


  </div>

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

</body>
</html>

