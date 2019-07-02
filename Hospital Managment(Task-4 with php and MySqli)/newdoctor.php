<?php
include "db.php";
session_start();
//echo $_SESSION['pwd'];
if (!isset($_SESSION['pwd'])) {
	header("location:logout.php");
}
if (isset($_POST['submit'])) {
	$password = $_SESSION['pwd'];
	$did = $_POST['did'];
	$name = $_POST['name'];
	$birthdate = $_POST['birthdate'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$joindate = $_POST['joindate'];
	$desgination = $_POST['desgination'];
	if (!empty($did)&&!empty($name)&&!empty($birthdate)&&!empty($gender)&&!empty($address)&&!empty($joindate)&&!empty($desgination)) {
		
		$q = mysqli_query($conn, "INSERT INTO doctor VALUES ('$password', '$did', '$name', '$birthdate', '$gender', '$address', '$joindate', '$desgination')");
		if(!$q){echo mysqli_error($conn);}else{header("location:home.php");}

	}else{
		echo "Pls fill all filds";
	}
}




?>









<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<title>Doctor</title>
</head>
<body>

<div class="container">
	
	<h1 class="bg-info text-center">Doctor Details</h1>
	<form action="newdoctor.php" method="post">
	<div class="form-group">
		<div class="row">
			<div class="col">
			Doctor ID:
			<input type="text" name="did" class="form-control">
		</div>
		</div>
		<div class="row">
			<div class="col">
				Dr_Name:
				<input type="text" name="name" class="form-control">
			</div>
			<div class="col">
				Date of Birth:
				<input type="Date" name="birthdate" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<legend>Gender</legend>
                <div class="form-check">
                  <label class="form-check-label">
                      <input type="radio" name="gender" class="form-check-input" value="male">
                      Male
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                      <input type="radio" name="gender" class="form-check-input" value="female">
                      Female
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                      <input type="radio" name="gender" class="form-check-input" value="other">
                      Other
                  </label>
                </div>
			</div>
			<div class="col-10">
				Address:
				<textarea name="address" rows="4" class="form-control"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col">
				Date of Join:
				<input type="Date" name="joindate" class="form-control">
			</div>
			<div class="col">
				Desgination:
				<input type="text" name="desgination" class="form-control">
			</div>
		</div>
		<br>
		<div class="row">
				<input type="submit" name="submit" value="Add Details" class="form-control btn btn-info">
		</div>
	</div>
</form>
</div>














<div style="margin-top:500px;"></div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>