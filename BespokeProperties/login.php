<?php
include "server.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./assets/css/login.css" />
	<style>
		.transparent a {
			text-decoration: none;
			color: white;
		}
	</style>
	<title>BESPOKE</title>
</head>

<body>
	<div class="container">
		<div class="forms-container">
			<div class="signin-signup">
				<!-- --------Login Form--------- -->
				<form action="login.php" method="post" class="sign-in-form">
					<h2 class="title">Sign in</h2>
					<?php include "errors.php"; ?>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" name="Username" placeholder="Username" />
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" name="Password" placeholder="Password" />
					</div>
					<input type="submit" value="Login" name="login_user" class="btn solid" />
					<div class="forgot_password">
						<a href="ForgotPasswd.php">Forgot Password</a>
					</div>
					<p class="social-text">Or Sign in with social platforms</p>
					<div class="social-media">
						<a href="#" class="social-icon">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="#" class="social-icon">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="#" class="social-icon">
							<i class="fab fa-google"></i>
						</a>
						<a href="#" class="social-icon">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</div>
				</form>
				<!-- --------Register form------ -->
				<form action="login.php" method="post" class="sign-up-form">
					<h2 class="title">Sign up</h2>
					<?php include "errors.php"; ?>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" name='Username' placeholder="Username" value="<?php echo $username ?>" />
					</div>
					<div class="input-field">
						<i class="fas fa-envelope"></i>
						<input type="email" name="Email" placeholder="Email" value="<?php echo $email ?>" />
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" name="Password" placeholder="Password" />
					</div>
					<!-- <input type="submit" class="btn" name="reg_user" value="Sign up" />-->
					<input type="submit" value="Sign up" name="reg_user" class="btn solid" />
					<p class="social-text">Or Sign up with social platforms</p>
					<div class="social-media">
						<a href="#" class="social-icon">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="#" class="social-icon">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="#" class="social-icon">
							<i class="fab fa-google"></i>
						</a>
						<a href="#" class="social-icon">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</div>
				</form>
			</div>
		</div>

		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
					<h3>New here ?</h3>
					<p>
						Sign up now to unlock exclusive access to our platform. Join our community today and start
						exploring a world
						of possibilities. It only takes a moment to create your account!
					</p>
					<button class="btn transparent" id="sign-up-btn">
						Sign up
					</button>
					<button class="btn transparent" id="sign-in-btn">
						<a href="./index.php">Back</a>
					</button>
				</div>
				<img src="./assets/images/log.svg" class="image" alt="" />
			</div>
			<div class="panel right-panel">
				<div class="content">
					<h3>One of us ?</h3>
					<p>
						Welcome back! Please sign in to access your account and explore our platform further. We're glad
						to have you here.
					</p>
					<button class="btn transparent" id="sign-in-btn">
						Sign in
					</button>
					<button class="btn transparent" id="sign-in-btn">
						<a href="./index.php">Back</a>
					</button>
				</div>
				<img src="./assets/images/register.svg" class="image" alt="" />
			</div>
		</div>
	</div>

	<script src="./assets/js/app.js"></script>
</body>

</html>