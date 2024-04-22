<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign in </title>
<link href="Assets/css/login.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="websait icon" type="png" href="Assets/images/LOGO.png"> 
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<style media="Screen">
	.alert-box{
	display: flex;
	justify-content: center;
	align-items:center;
	min-height: 5vh;
	width: 100%;
	background-position: center;
	background-size: cover;
	background-color: rgb(231, 230, 229);

}

	</style>	
	</head>

<body>
<?php 
session_start();
?>
<?php 
		if(isset($_SESSION['message']))
		{
			?>

			<div class="alert-box" role="alert">
			<strong>Hey!</strong> <?= $_SESSION['message']; ?>.
			</div>
			<?php
			unset($_SESSION['message']);
		}
		?>

<section>

  <div class="form-box">
	<div class="form-value">
	<form action="functions/authcode.php" method="POST">
		  	<span class="image"><img src="Assets/images/LOGO.png" width="200" height="65" alt=""/></span>
		<h2>Sign in</h2>
				<div class="inputbox">
					<input type="email" name="Email" required>
					<label>Email</label>
				</div>
				<div class="inputbox">
				  <input type="password" name="Password" required>
					<label>Password</label>
				</div>
		<div class="forget">
					<label><input type="checkbox">Remember Me <a href="#">Foget Password</a></label>
					
		</div>
		<button type="Submit"  name="login_btn">Log in </button>
		  <div class="register">
			  <p>Don't have a account <a href="register.php">Create Account</a> </p>
		  </div>
	  </form>
		
	</div>
	</div>
	
</section>
</body>
</html>
