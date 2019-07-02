<?php
session_start();
include "db.php";
if (isset($_POST['submit'])) {
	$userid = $_POST['userid'];
	$password = $_POST['password'];
	if (!empty($userid) && !empty($password)) {
		$q = mysqli_query($conn, "SELECT userid,password FROM login WHERE userid='$userid' AND password='$password'") or die(mysqli_error($conn));

		$data = mysqli_fetch_array($q,MYSQLI_BOTH);
		if ($data>0) {
			$_SESSION['pwd'] = $password;
			header("location:home.php");
		}else{
			echo "Your ID & Password is worng";
		}

	}else{
		echo "Pls enter Userid and Password";
	}
}

?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>LogIn</title>
</head>
<body>
	<div id="main">
	<div class="loginBox">
		<img src="user.png" class="user">
		<h2>Log In Here</h2>
		<form action="login.php" method="post">
			<p>User Id</p>
			<input type="text" name="userid" placeholder="Enter UserId">
			<p>Password</p>
			<input type="password" name="password" placeholder="**********">
			<input type="submit" name="submit" value="Sign In"> 
		</form>
	</div>
</div>

</body>
</html>