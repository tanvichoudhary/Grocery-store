 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        
        <h2>Profile</h2>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>About</a></li>
            <li><a href="#"><i class="fa fa-key"></i> Login</a></li>
            <li><a href="#"><i class="fas fa-sign-in-alt"></i>Sign Up</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
            <li><a href="#"><i class="fas fa-map-pin"></i>Map</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header">PERSONAL DASHBOARD</div>  
        <div class="info">
            <?php
	$username = $_POST['username'];
 $email = $_POST['email'];
	$password = $_POST['password'];


	// Database connection
	$conn = new mysqli('localhost','root','','grocerry');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into log(username, email, password) values(?, ?, ?)");
		$stmt->bind_param("sss", $username, $email, $password);
		$execval = $stmt->execute();
		echo nl2br("\n");
        echo nl2br("\n");
        echo nl2br("\n");
        echo nl2br("\n");
		
		echo "Welcome   ";
        echo nl2br("\n");
        echo nl2br("\n");
        echo nl2br("\n");
        echo nl2br("\n");
        echo "Name:  ";
        echo  $username ;
        echo nl2br("\n");
        echo nl2br("\n");
        echo nl2br("\n");
        echo nl2br("\n");
		echo "EMAIL:   ";
        echo $email;
        echo nl2br("\n");
        echo nl2br("\n");
        echo nl2br("\n");
        echo nl2br("\n");
        echo "Phone:  208000345";
        
		$stmt->close();
		$conn->close();
	}
?>

      </div>
    </div>
</div>

</body>
</html>