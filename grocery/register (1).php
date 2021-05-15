<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet"https="//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style2.css">
</head>
<body>
  
    <nav>
        <div class="lin">
            <ul class="bar">
                <li><a href="Index.php">LOG IN</a></li>
                <li><a href="register.php">SIGN IN</a></li>
                <li><a href="main.php">SHOP</a></li>
                <li><a href="#">CONTACT US</a></li>
            </ul>
        </div>
    </nav>
    <form action="server.php" method="post">
    <div class="log-box">
        <h1>REGISTER</h1>
        
        <div class="textbox">
            <i class="fas fa-envelope-square"></i>
            <input type="email" placeholder="EMAIL"  id="email"
                  name="email">
        </div>
        <div class="textbox">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="USERNAME" id="username"
                  name="username" >
        </div>
        <div class="textbox">
            <i class="fa fa-key" aria-hidden="true"></i>
            <input type="password" placeholder="PASSWORD"  id="password"
                  name="password">
        </div>
        <input type="submit" class="btn btn-primary" />
        
    

</div>
</form>
   
</body>  
</html>