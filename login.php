<?php
session_start();
include("include/connection.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
	$email=$_POST['email'];
	$password=$_POST['password'];
	if(!empty($email)&& !empty($password)&& !is_numeric($email)){
		$query="select* from customer where email='$email' limit 1";
		$result=mysqli_query($con,$query);
		if($result){
			if($result && mysqli_num_rows($result)>0)
			{
				$user_data=mysqli_fetch_assoc($result);
				if($user_data['password']==$password){
					header("location:home.php");
					die;
				}
			}
		}
		echo"<script type='text/javascript'> alert('wrong email or password')</script>";
	}
}
	
?>
<html lang="en">
<head>
    <style>
	body{
	width:100%;
	height:100vh;
	font-family:sans-serif;
	}
	.login{
	width:360px;
	height:280px;
	margin:auto;
	background:white;
	border-radius:3px;
	}
	h1{
	text-align:center;
	}
	form{
	width:300px;
	margin-left:20px;
	}
	form label{
	display:flex;
	margin-top:20px;
	font-size:18px;
	}
	form input{
	width:100%;
	padding:7px;
	border:none;
	border:1px solid gray;
	border-radius:6px;
	outline:none;
	}
	input[type="submit"]{
	width:320px;
	height:35px;
	margin-top:20px;
	border:none;
	background-color:#ff7200;
	color:black;
	font-size:18px;
	cursor:pointer;
	}
	input[type="submit"]:hover{
	color:black;
	background:rgb(13,211,247);
	}
	</style>
</head>
<body background="images/kk.jpg">
	<header>
    </header>
	<div class="login">
	<h1>Login</h1>
    <form method="POST">
		<label for="email">Email:</label>
        <input type="email" name="email" required>
		<label for="password">Password:</label>
        <input type="text" name="password" required>
		<input type="submit" value="Login">
	</form>
	<p> New User?<a href="signin.php">SignUp here</a></p>
</body>
</html>
