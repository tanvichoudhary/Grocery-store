<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Register</title>
	<link rel="stylesheet" href="shopping1.css">
</head>
<header><h1>V-Mart</h1></header>
<body>
	<form action="register.php" method="post">
		<div class="Rform">
			<h2>REGISTER</h2>
			<P>Please fill in the details</P>

			<label for="username"><b>Username</b></label><br>
			<input type="text" placeholder=" Enter Username" name="username" required="name"><br><br>

			<label for="email"><b>Email</b></label><br>
			<input type="text" placeholder="Enter Email" name="email" required="email"><br><br>

			<label for="pswd"><b>Password</b></label><br>
			<input type="password" placeholder="Enter Password" name="pswd" required="charset"><br><br>

			<label for="r-pswd"><b>Re-enter Password</b></label><br>
			<input type="password" placeholder="Re-enter Password" name="r-pswd" required><br><br>

			<button type="submit" class="rbtn">
               <a href="index.php" style="display: none;"></a>Register
            </button>
			<br><br><br>
	
			<p>Already have an account?
			<a href="login.php">Sign in</a></p>
		</div>

	</form>

</body>
</html>