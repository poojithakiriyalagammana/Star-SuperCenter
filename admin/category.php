<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin page </title>
<link href="../Assets/css/category.css" rel="stylesheet" type="text/css">
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
<?php 
include('../functions/myfuntions.php');
?>
<body>

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
        <a href="add-category.php">Add Category</a>
        <a href="category.php" class="active">All Categories</a>
        <a href="add-product.php">Add Product</a>
        <a href="product.php">All Products</a>
        <a href="#">My Account</a>
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
      <h2>All Categories</h2>


      <div class="category">
        <div class="list1">
          <div class="row">
            <h4>Categories</h4>
          </div>
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Status</th>
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $category =getall("categories");

                    if(mysqli_num_rows($category) > 0)
                    {
                        foreach($category as $item)
                        {
                            ?>
                                <tr>
                                    <td><?=  $item['id']; ?></td>
                                    <td><?= $item['name'];?></td>
                                    <td>
                                        <img src="../uploads/<?= $item['image'];?>" width="50px" height="50px" alt="<?= $item['name'];?>">
                                    </td>
                                    <td>
                                        <?= $item['status']=='0' ?"Visible":"Hidden" ?>
                                    </td>
                                    <td>
                                        <a href="edit-category.php?id=<?=  $item['id']; ?>" class="btn">Edit </a>
                                        <form action="code.php" method="POST">
                                            <input type="hidden" name="category_id" value ="<?=  $item['id']; ?>">
                                            <button class="btn-delete" type = "submit" name = "delete_category_btn">Delete</button>
                                        </form> 
                                    </td>
                                </tr>
                            <?php
                        }
                    }
                    else
                    {
                        echo "No records found";
                    }
                ?>

              
            </tbody>
          </table>
          <style>
              table td a {
              background-color: rgb(2, 194, 130);
              color: rgb(0, 0, 0);
              padding:10px 30px;
              border-radius: 10px; 
              }
              table td a:hover {
                backgro und-color: rgb(0, 0, 0);
                color: rgb(255, 255, 255);
              }

              table td button {
                font-size: 16px;
              background-color: rgb(209, 73, 96);
              color: rgb(0, 0, 0);
              padding:10px 21px;
              border-radius: 10px; 
              display: flex;
              justify-content: space-between;
              align-items: center;
              margin: 1rem 0;
              }
              table td button:hover {
                background-color: rgb(0, 0, 0);
                color: rgb(255, 255, 255);
              }
              </style>
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

