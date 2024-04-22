<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Product</title>
<link href="Assets/css/userHome.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="icon" type="image/png" href="Assets/images/LOGO.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
<style>
    .category {
        width: 100%;
        color: #000000;
        margin-top: 10px;
        border-radius: 8px;
        padding: 0.5rem 1rem 1rem 3rem;
        background: rgb(255, 255, 255);
    }
    .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 1rem 0;
    }
    table {
        width: 100%;
        background: #fff;
        padding: 1rem;
        text-align: left;
        border-radius: 8px;
        border: 1px solid rgb(191, 191, 191);
    }
    table td,
    th {
        padding: 1rem 1rem;
        border-bottom: 1px solid rgb(191, 191, 191);
        text-align: center;
    }
    table th {
        font-size: 20px;
    }
    table td {
        font-size: 16px;
        color: rgb(100, 100, 100);
    }
    table td a {
        background-color: rgb(2, 194, 130);
        color: rgb(0, 0, 0);
        padding: 10px 20px;
        border-radius: 10px;
    }
    table td a:hover {
        background-color: rgb(0, 0, 0);
        color: rgb(255, 255, 255);
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
            <a href="index.php"><img src="Assets/images/LOGO.png" width="200" height="65" alt=""></a>
        </div>
        <div class="search">
            <a href="#"><input type="search" placeholder="Search here"><i class="fas fa-search"></i></a>
        </div>
        <div class="navi">
            <a href="index.php"><i class="fas fa-home"></i> Home</a>
            <a href="#" class="facart"><i class="fas fa-user"></i> LogOut</a>
        </div>
    </nav>
    <nav class="navbar2">
        <li>
            <a class="sh" href="#"><b>Shop By Category</b> <i class="fas fa-caret-down"></i></a>
            <ul class="drop">
                <li>
                    <?php
                    $categories = getAllActive('categories');
                    if(mysqli_num_rows($categories) > 0) {
                        foreach($categories as $item) {
                            ?>
                            <a href="viewproducts.php?category=<?= $item['slug']; ?>">
                                <h7><?= $item['name']; ?></h7>
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
        <a href="#"><b>About us</b></a>
    </nav>
</header>
<div class="container ">
    <div class="main-body">
        <div class="category ">
            <div class="list1 product_data">
                <div class="row ">
                    <h2>Cart</h2>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Remove Product</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $item = getCartItems();
                        foreach($item as $citem) {
                            ?>
                            <tr>
                                <td>
                                    <img src="uploads/<?= $citem['image']; ?>" width="50px" height="50px" alt="Image">
                                </td>
                                <td>
                                    <h3><?= $citem['name']; ?></h3>
                                </td>
                                <td>
                                    <h3>Rs. <?= $citem['selling_price']; ?></h3>
                                </td>
                                <td>
                                    <div class="qty">
                                        <input type="hidden" class="prodId" value="<?= $citem['prod_id']; ?>">
                                        <button class="group-text decrement-btn updateQty">-</button>
                                        <input type="text" class="form-control input-qty" value="<?= $citem['prod_qty']; ?>">
                                        <button class="group-text increment-btn updateQty">+</button>
                                    </div>
                                </td>
                                <td>
                                    <button class="fa fa-trash deleteItem" value="<?= $citem['cid']; ?>"><i></i><b>Remove</b></button>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                <style>
                    table td a {
                        background-color: rgb(2, 194, 130);
                        color: rgb(0, 0, 0);
                        padding: 10px 30px;
                        border-radius: 10px;
                    }
                    table td a:hover {
                        background-color: rgb(0, 0, 0);
                        color: rgb(255, 255, 255);
                    }
                    table td i {
                        padding: 0px 6px 0px 0px;
                    }
                    table td button {
                        font-size: 16px;
                        background-color: rgb(209, 73, 96);
                        color: rgb(0, 0, 0);
                        padding: 10px 15px;
                        border-radius: 10px;
                        align-items: center;
                        margin: 1rem 0;
                    }
                    table td button:hover {
                        background-color: rgb(0, 0, 0);
                        color: rgb(255, 255, 255);
                    }
                    .qty .form-control {
                        border: 1px solid #000;
                        margin: 50px .1px;
                        padding: 8px 10px;
                        font-size: 16px;
                        font-weight: 700;
                        color: #000;
                        margin-bottom: 15px;
                        border-radius: 6px;
                        width: 70px;
                        text-align: center;
                    }
                    .qty .group-text {
                        color: #000000;
                        font-weight: 700;
                        background-color: #bababa;
                        border-radius: 6px;
                        padding: 8px 10px;
                        cursor: pointer;
                        display: inline;
                    }
                    .qty {
                        margin: -70px 0;
                    }
                </style>
            </div>
        </div>
    </div>
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
                    <a href="#"><i class="fab fa-facebook"></i> FACEBOOK</a><br>
                    <a href="#"><i class="fab fa-twitter"></i> TWITTER</a><br>
                    <a href="#"><i class="fab fa-pinterest"></i> PINTEREST</a><br>
                </div>
            </div>
        </div>
        <hr>
        <div class="policy">
            <a href="#">Terms and Conditions</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Return Policy</a>
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
