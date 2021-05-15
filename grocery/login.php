<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="shopping1.css">
</head>
</head>
<header><h1>V-Mart</h1></header>
<body>
	<form action="login.php" method="post">
		<div class="Lform" id="Lform">
			<h2>LOGIN</h2>
			<label for="username"><b>Username</b></label><br>
			<input type="text" placeholder="Enter username" name="username" required><br><br>

			<label for="password"><b>Password</b></label><br>
			<input type="Password" placeholder="Enter Password" name="pswd" required><br><br>

            <button type="submit" class="lbtn">
                <nav><a href="index.php" style="display: none;">Login</a></nav>Login
            </button>
			<br><br><br>
			
			
		</div>	

	</form>

</body>
</html>