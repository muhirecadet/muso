<?php
session_start();
if (!empty($_SESSION['admin'])&&!empty($_SESSION['type'])) {
	header("Location: admin/");
}
elseif (!empty($_SESSION['laboratory'])&&!empty($_SESSION['type'])) {
	header("Location: laboratory/");
}
elseif (!empty($_SESSION['doctor'])&&!empty($_SESSION['type'])) {
	header("Location: doctor/");
}
elseif (!empty($_SESSION['reception'])&&!empty($_SESSION['type'])) {
	header("Location: reception/");
}
elseif (!empty($_SESSION['bursar'])&&!empty($_SESSION['type'])) {
	header("Location: reception/");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hospital Management System - Login</title>
	<style type="text/css">
	body
	{
		background-color: #;
	}
		.wrapper
		{
	height: 250px;
	width: 700px;
	background-color: #C6F;
	border: 1px solid #C2C5BA;
	margin: 0 auto;
	margin-top: 150px;
	color: #D6D6D6;
	background-repeat: repeat;
		}
		.left
		{
	height: 170px;
	width: 400px;
	border-right: 1px solid #C2C5BA;
	float: left;
	font-family: "Times New Roman", Times, serif;
	font-size: 25px;
	text-align: center;
	padding-top: 80px;
	color: #933;
		}
		.right
		{
	height: 250px;
	width: 299px;
	float: left;
	text-align: center;
	font-family: Arial;
	background-color: #CCC;
		}
		hr
		{
			border-bottom: 1px solid #ccc;
			border-top: 1px solid white;
		}
		.input
		{
			height: 30px;
			width: 80%;
			padding-left: 20px;
		}
		.btn
		{
			height: 35px;
			width: 90%;
			border: 0;
			background-color: #408080;
			margin: 0;
			color: white;
			font-weight: bold;
			cursor: pointer;
		}
	.wrapper .right h3 {
	color: #933;
}
    </style>
	<link href="Accessible_Design.css" rel="stylesheet" type="text/css" media="color-index">
</head>
<body>
<div class="wrapper">
	<div class="left">
    <em><strong>Hospital Management System<br><br>(HMS)</strong></em> </div>
	<div class="right">
	  <h3>Login Here</h3><hr>
		<form action="index.php" method="post">
			<input type="text" class="input" name="username" placeholder="Enter Username"><br><br>
			<input type="password" class="input" name="password" placeholder="Enter Password"><br><br>
			<input type="submit" class="btn" name="btn" value="Login"><br>
		</form>
<?php
		extract($_POST);
		if (isset($btn) && !empty($username) && !empty($password)) {
			require 'includes/users.php';
		 	login();
		 } 
		 ?>
	</div>
</div>
</body>
</html>