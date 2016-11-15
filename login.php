<?php
require_once('includes/config.php');
if( $user->is_logged_in() ){ header('Location: index.php'); } 
?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Login screen</title>
	<link rel="stylesheet" href="login/style.css">
</head>

<body>

	<div class="login-page">
		<div class="form">
			<?php
			if(isset($_POST['submit'])){

				$username = trim($_POST['username']);
				$password = trim($_POST['password']);

				if($user->login($username,$password)){ 
					header("Location: " . $_SERVER["HTTP_REFERER"]);
					exit;
				} else {
					$message = '<p class="error">Wrong username or password</p>';
				}

			}

			if(isset($message)){ echo $message; }
			?>
			<form class="register-form" action="register.php" method="post">
				<input type="text" placeholder="Account Name" name="accname" />
				<input type="password" placeholder="password" name="passwd" />
				<input type="text" placeholder="email" name="mail" />
				<input type="text" placeholder="student card" name="studcard" />
				<input type="text" placeholder="CIN" name="cin" />
				<button type="submit" name="submit">create</button>
				<p class="message">Already registered? <a href="#">Sign In</a></p>
			</form>
			<form class="login-form" action="" method="post">
				<input type="text" name="username" placeholder="username"/>
				<input type="password" name="password" placeholder="password"/>
				<button type="submit" name="submit" value="Login">login</button>
				<p class="message">Not registered? <a href="#">Create an account</a></p>
			</form>
		</div>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="login/index.js"></script>

</body>
</html>