<?php
session_start();
include("include/connection.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$number=$_POST['number'];
$jobname=$_POST['jobname'];
$email=$_POST['email'];
$experience=$_POST['experience'];
$password=$_POST['password'];
if(!empty($email)&& !empty($password)&& !is_numeric($email)){
$query="INSERT INTO `partner`(`fname`, `lname`, `number`, `job name`, `experience`, `email`, `password`) VALUES
 ('$fname','$lname','$number','$jobname','$experience','$email','$password')";
mysqli_query($con,$query);
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
	.signin{
	width:360px;
	height:620px;
	margin:auto;
	background:white;
	border-radius:3px;
	}
	h2{
	text-align:center;
	}
	form{
	width:300px;
	margin-left:20px;
	}
	form label{
	display:flex;
	margin-top:20px;
	font-size:15px;
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
	font-size:15px;
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
	<div class="signin">
	<h2>SignIn</h2>
    <form method="POST">
		<label for="fname">First Name:</label></td>
        <input type="text" name="fname" required></td></tr>
		<label for="lname">Last Name:</label></td>
        <input type="text" name="lname" required></td></tr>
		<label for="number">Mobile Number:</label></td>
        <input type="mobile Number" name="number" required></td></tr>
		<label for="jobname">Job Name:</label></td>
        <input type="text" name="jobname" required></td></tr>
		<label for="experience">Experience:</label></td>
        <input type="text" name="experience" required></td></tr>
		<label for="email">Email:</label>
        <input type="email" name="email" required>
		<label for="password">password:</label>
        <input type="text" id="password" name="password" required>
		<input type="submit" value="Register">
		
    </form>
	<p> already have an account.<a href="plogin.php">LogIn here</a></p>
</body>
</html>
