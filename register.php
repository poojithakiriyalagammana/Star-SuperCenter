<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration </title>
<link href="Assets/css/register.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="websait icon" type="png" href="Assets/images/LOGO.png"> 
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
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

	<div class="container">
		

	
			<div class="contact-box">
			<div class="contact-left">
				<span class="image"><img src="Assets/images/LOGO.png" width="200" height="65" alt=""/></span>
			<h3>Create account</h3>
			<form action="functions/authcode.php" method="POST">
				<div class="input-row">
					<div class="input-group">
						<label><b>Full Name</b></label>	
						<input type="text" name="Full_Name" required placeholder="Enter Your Name">
					</div>
					
					<div class="input-group">
						<label><b>Username</b></label>	
						<input type="text" name="Username" required placeholder="Enter Your Username" >
					</div>
					<div class="input-group">
						<label><b>Email</b></label>	
						<input type="email" name="Email" required placeholder="example@email.com">
					</div>
					
				</div>
				
				<div class="input-row">
					<div class="input-group">
						<label><b>Phone Number</b></label>	
						<input type="number" name="Phone_Number" required placeholder="XXX XXXX XXX" >
					</div>
					<div class="input-group">
						<label><b>Password</b></label>	
						<input type="Password" name="Password" required placeholder="At least 6 characters">
					</div>
					<div class="input-group">
						<label><b>Re-enter Password</b></label>	
						<input type="Password" name="cpassword" required >
					</div>
				</div>
				<div class="input-row">
					<div class="input-group">
						<label><b>Address</b></label>	
						<textarea rows="5"  name="Address" required ></textarea>
					</div>
					<div class="input-group">
						<label><b>Nearest City</b></label>	
						<input type="text"  name="City"  placeholder="Enter Your City" >
					</div>
				</div>
				<button type="submit" name="register_btn">Continue</button>
				<div class="register">
			  <p>Already have an account? <a href="login.php">Sign in</a> </p>
		  		</div>
			</form>
			</div>
		</div>
		
	</div>
	

</section>
</body>
</html>
