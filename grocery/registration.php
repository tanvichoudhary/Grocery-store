<!DOCTYPE html>
<html lang="en">
<head>
	<title>Shopping Mart</title>
	<link rel="stylesheet" type="text/css" href="shopping1.css">
</head>
<body class="main">
	<img src="gcery logo.png">
       <form action="server.php" method="post">
 	      <div class="container">
             <h2 style="color: white;">REGISTER</h2>
             <p>Please fill in this form to create an account.</p>
             <hr>

             <label for="username"><b>Username</b></label>
             <input type="text" placeholder="Enter Username" name="username" id="username" required="name">
 
             <label for="email"><b>Email</b></label>
             <input type="text" placeholder="Enter Email" name="email" id="email" required="email">
             <br>
             <br>
             <label for="psw"><b>Password</b></label>
             <input type="password" placeholder="Enter Password" name="password" id="psw" required="charset">
             <br>
             <br>
             <!-- <label for="psw-repeat"><b>Repeat Password</b></label>
             <input type="password" placeholder="Repeat Password" name="pswrepeat" id="pswrepeat" required="charset">
             <hr>  --> 

             <button type="submit"class="registerbtn"><nav>Register</nav>
             </button>
             <p>Already have an account?<nav><a href="login.php">Sign in</a></nav></p>
           </div>
       </form>
        
</body>
</html>