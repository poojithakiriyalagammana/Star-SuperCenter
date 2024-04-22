<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin page </title>
<link href="Assets/css/admin.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="websait icon" type="png" href="Assets/images/LOGO.png"> 
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

</head>
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
        <a href="#" class="active">Dashboard</a>
        <a href="admin/add-category.php">Add Category</a>
        <a href="admin/category.php">All Categories</a>
        <a href="admin/add-product.php">Add Product</a>
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
      <h2>Dashboard</h2>
      <div class="promo_card">
        <h1>Welcome To The Admin Panel</h1>
        <span>Customer is very happy.</span>

      </div>

      <div class="history_lists">
        <div class="list1">
          <div class="row">
            <h4>History</h4>
            <a href="#">See all</a>
          </div>
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Dates</th>
                <th>Name</th>
                <th>Type</th>
                <th>Ammount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>2, Aug, 2022</td>
                <td>Sam Tonny</td>
                <td>Premimum</td>
                <td>$2000.00</td>
              </tr>
              <tr>
                <td>2</td>
                <td>29, July, 2022</td>
                
                <td>Code Info</td>
                <td>Silver</td>
                <td>$5,000.00</td>
              </tr>
              <tr>
                <td>3</td>
                <td>15, July, 2022</td>
              
                <td>Jhon David</td>
                <td>Startup</td>
                <td>$3000.00</td>
              </tr>
              <tr>
                <td>4</td>
                <td>5, July, 2022</td>
                <td>Salina Gomiz</td>
                <td>Premimum</td>
                <td>$7000.00</td>
              </tr>
              <tr>
                <td>5</td>
                <td>29, June, 2022</td>
                <td>Gomiz</td>
                <td>Gold</td>
                <td>$4000.00</td>
              </tr>
              <tr>
                <td>6</td>
                <td>28, June, 2022</td>
                <td>Elyana Jhon</td>
                <td>Premimum</td>
                <td>$2000.00</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="list2">
          <div class="row">
            <h4>Documnets</h4>
            <a href="#">Upload</a>
          </div>
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Type</th>
                <th>Uplaoded</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>CNIC</td>
                <td>PDF</td>
                <td>20</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Passport</td>
                <td>PDF</td>
                <td>12</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Licence</td>
                <td>PDF</td>
                <td>9</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Pic</td>
                <td>Jpg</td>
                <td>22</td>
              </tr> 
              <tr>
                <td>5</td>
                <td>CNIC</td>
                <td>Jpg</td>
                <td>22</td>
              </tr> 
              <tr>
                <td>6</td>
                <td>Docx</td>
                <td>Word</td>
                <td>22</td>
              </tr> 
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="sidebar">
      <h4>Account Balance</h4>
      
      <div class="balance">
        <i class="fas fa-dollar icon"></i>
        <div class="info">
          <h5>Dollar</h5>
          <span><i class="fas fa-dollar"></i>25,000.00</span>
        </div>
      </div>
      
      <div class="balance">
        <i class="fa-solid fa-rupee-sign icon"></i>
        <div class="info">
          <h5>LKR</h5>
          <span><i class="fa-solid fa-rupee-sign"></i>300,000.00</span>
        </div>
      </div>

      <div class="balance">
        <i class="fas fa-euro icon"></i>
        <div class="info">
          <h5>Euro</h5>
          <span><i class="fas fa-euro"></i>25,000.00</span>
        </div>
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

