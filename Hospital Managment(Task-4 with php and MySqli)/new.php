<?php
session_start();
//echo $_SESSION['pwd'];
include "db.php";
if (!isset($_SESSION['pwd'])) {
	header("location:logout.php");
}
if (isset($_POST['submit'])) {
	
	$password = $_SESSION['pwd'];
	$pid = $_POST['pid'];
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$birth = $_POST['birth'];
	$phone = $_POST['phone'];
	$rname = $_POST['rname'];
	$raddress = $_POST['raddress'];
	$rphone = $_POST['rphone'];
	$rrwp = $_POST['rrwp'];
	$diseases = $_POST['diseases'];
	$docname = $_POST['docname'];
	$roomno = $_POST['roomno'];
	$bedno = $_POST['bedno'];
	$adate = $_POST['adate'];
	$status = 'new';
	if (!empty($password)&&!empty($pid)&&!empty($name)&&!empty($gender)&&!empty($age)&&!empty($address)&&!empty($birth)&&!empty($phone)&&!empty($rname)&&!empty($raddress)&&!empty($rphone)&&!empty($rrwp)&&!empty($diseases)&&!empty($docname)&&!empty($roomno)&&!empty($bedno)&&!empty($adate)) {
			
			$q = mysqli_query($conn, "INSERT INTO patient VALUES ('$password', '$pid', '$name', '$gender', '$age', '$address', '$birth' ,'$phone', '$rname', 'raddress', '$rphone', '$rrwp', '$diseases', '$docname', '$roomno', '$bedno', '$adate', '$status')");
			if(!$q){echo mysqli_error($conn);}else{header("location:home.php");}

	}else{
		echo "Pls fill all filds...";
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
	<title>New Patient</title>
</head>
<body>


<div class="container">
	<h1 class="bg-info text-center">Patient Details</h1>
	<form action="new.php" method="post">
		<div class="form-group">
			<div class="row">
				<div class="col">
					Patient ID:
					<input type="text" name="pid" class="form-control">
				</div>
				<div class="col">
					Name:
					<input type="text" name="name" class="form-control">
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
					<div class="row">
						<div class="col">
                <label>Address</label>
                <textarea name="address" rows="2" class="form-control"></textarea>
            		</div>
            	</div>
            		<div class="row">
            			<div class="col">
            			Date of birth:
            			<input type="Date" name="birth" class="form-control">
            		</div>
            		</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					Age:
					<input type="number" name="age" class="form-control">
				</div>
				<div class="col">
					Phone:
					<input type="tel" name="phone" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col">
					 Relative Name:
					 <input type="text" name="rname" class="form-control">
				</div>
				<div class="col">
				Relative Address:
                <textarea name="raddress" rows="1" class="form-control"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col">
					Relative Phone:
					<input type="tel" name="rphone" class="form-control">
				</div>
				<div class="col">
					Relative Relation With Patient:
					<input type="text" name="rrwp" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col">
					Diseases:
					<input type="text" name="diseases" class="form-control">
				</div>
				<div class="col">
					Doctor Name:
					<input type="text" name="docname" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col">
				Room No:
				<input type="text" name="roomno" class="form-control">
			</div>
			<div class="col">
				Bed No:
				<input type="text" name="bedno" class="form-control">
			</div>
			</div>
			<div class="row">
				<div class="col">
					Admit Date:
					<input type="Date" name="adate" class="form-control">
				</div>
			</div>
			<br>
			<div class="row">
				<input type="submit" name="submit" value="ADD Details" class="form-control btn btn-info">
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