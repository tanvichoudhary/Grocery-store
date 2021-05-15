<?php

session_start();

 //initializing variables

$username = "";
$email="";

$errors= array();

 //connect to db

$db= mysqli_connect('localhost','root','','customer_info') or die("could not connect to database");

 //register users

$username= mysqli_real_escape_string($db, $_POST['username']);
$email= mysqli_real_escape_string($db, $_POST['email']);
$password_1= mysqli_real_escape_string($db, $_POST['pswd']);
$password_2= mysqli_real_escape_string($db, $_POST['r-pswd']);

 //form validation

if(empty($username)) {array_push($errors, "Username is required");}
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($password_1)) {array_push($errors, "Password is required");}
if($password_1 != $password_2){array_push($errors, "Passwords do not match");}

// check db for existing user with same username

$user_check_query= "SELECT * FROM customer WHERE username = '$username' or email = '$email' LIMIT 1 ";


$results = mysqli_query($db,$user_check_query);
$customer= mysqli_fetch_assoc($result);

if($customer) {
	if($customer['username'] === $username){array_push($errors, "Username already exists");}
	if($customer['email'] === $email){array_push($errors, "This email id already has a registered username");}
	

}

//register the user if no error

if(count($errors) == 0){

	$password= md5($password_1);//this will encrypt password
	$query= "INSERT INTO customer(username,email,password) VALUES ('$username', '$email', '$password')";

	mysqli_query($db,$query);
	$_SESSION['username']= $username;
	$_SESSION['username']= "You are now logged in";

	header('location: index.php');
}



if(isset($_POST['login_user'])) {

	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['pswd']);

	if(empty($username)){
		array_push($errors, "Username is required");
	}
	 if(empty($password)){
	 	array_push($errors, "Password is required");
	 }
	 if(count($errors) == 0 ){
	 	$password = md5($password);

	 	$query = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
	 	$results = mysqli_query($db, $query);
	 if(mysqli_num_rows($results)) {

	 		$_SESSION['username'] = $username;
	 		$_SESSION['success'] = "Logged in successfully";
	 		header('location: index.php');
	 		}else{
	 			array_push($errors, "Wrong username/password combination. Please try again");}
	 }

	}
?>    
