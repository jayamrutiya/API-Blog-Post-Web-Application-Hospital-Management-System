<?php
session_start();

//echo $_SESSION['pwd'];
if (!isset($_SESSION['pwd'])) {
	header("location:logout.php");
}

?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="logo">
		<h1 data-text="PolloHospital">PolloHospital</h1>
	</div>
	<div class="button">
		<a href="new.php">New Patient</a>
		<a href="spd.php">Show Patient Details</a>
		<a href="doctor.php">Doctor Details</a>
		<a href="sapd.php">Old Case?</a>
	</div>

</body>
</html>