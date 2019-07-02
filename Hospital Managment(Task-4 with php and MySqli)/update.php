<?php
include "db.php";
session_start();
// echo $_SESSION['pwd'];
// echo $_SESSION['pid'];
$pid = $_SESSION['pid'];
if (!isset($_SESSION['pwd'])) {
	header("location:logout.php");
}



?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<title>Update</title>
</head>
<body>

	<?php

	$q = "SELECT * FROM patient WHERE pid='$pid'";
	$res = mysqli_query($conn,$q);
	while ($row = mysqli_fetch_array($res,MYSQLI_BOTH)) {
		$pid = $row['pid'];
		$name = $row['name'];
		$gender = $row['gender'];
		$age = $row['age'];
		$address = $row['address'];
		$birth = $row['birth'];
		$phone = $row['phone'];
		$rname = $row['rname'];
		$raddress = $row['raddress'];
		$rphone = $row['rphone'];
		$rrwp = $row['rrwp'];
		$diseases = $row['diseases'];
		$docname = $row['docname'];
		$roomno = $row['roomno'];
		$bedno = $row['bedno'];
		$adate = $row['adate'];
		$ddate = $row['ddate'];
	

	?>
<div class="container">
	<h1 class="bg-info text-center">Patient Details</h1>
	<form action="update.php" method="post">
		<div class="form-group">
			<div class="row">
				<div class="col">
					Patient ID:
					<input type="text" name="pid" readonly="readonly" value="<?php echo $pid; ?>" class="form-control">
				</div>
				<div class="col">
					Name:
					<input type="text" name="name" value="<?php echo $name; ?>" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					 
                <legend>Gender</legend>
                <div class="form-check">
                  <label class="form-check-label">
                      <input type="text" name="gender" value="<?php echo $gender; ?>" class="form-check-input">
                      
                  </label>
                </div>
                
            
				</div>
				<div class="col-10">
					<div class="row">
						<div class="col">
                <label>Address</label>
                <input type="text" name="address" rows="2" class="form-control" value="<?php echo $address; ?>">
            		</div>
            	</div>
            		<div class="row">
            			<div class="col">
            			Date of birth:
            			<input type="date" name="birth" value="<?php echo $birth; ?>" class="form-control">
            		</div>
            		</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					Age:
					<input type="number" name="age" value="<?php echo $age; ?>" class="form-control">
				</div>
				<div class="col">
					Phone:
					<input type="tel" name="phone" value="<?php echo $phone; ?>" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col">
					 Relative Name:
					 <input type="text" name="rname" value="<?php echo $rname; ?>" class="form-control">
				</div>
				<div class="col">
				Relative Address:
                <input type="text" name="raddress" rows="1" value="<?php echo $raddress; ?>" class="form-control"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col">
					Relative Phone:
					<input type="tel" name="rphone" value="<?php echo $rphone; ?>" class="form-control">
				</div>
				<div class="col">
					Relative Relation With Patient:
					<input type="text" name="rrwp" value="<?php echo $rrwp; ?>" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col">
					Diseases:
					<input type="text" name="diseases" value="<?php echo $diseases; ?>" class="form-control">
				</div>
				<div class="col">
					Doctor Name:
					<input type="text" name="docname" value="<?php echo $docname; ?>" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col">
				Room No:
				<input type="text" name="roomno" value="<?php echo $roomno; ?>" class="form-control">
			</div>
			<div class="col">
				Bed No:
				<input type="text" name="bedno" value="<?php echo $bedno; ?>" class="form-control">
			</div>
			</div>
			<div class="row">
				<div class="col">
					Admit Date:
					<input type="Date" name="adate" value="<?php echo $adate; ?>" class="form-control">
				</div>
			</div>
			<br>
			<div class="row">
				<input type="submit" name="update" value="Update Details" class="form-control btn btn-info">
			</div>
		</div>
	</form>
</div>



<?php

}
?>

<?php
echo $pid;
if (isset($_POST['update'])) {
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

	$q = "UPDATE patient SET name='$name', gender='$gender', age='$age', address='$address', birth='$birth', phone='$phone', rname='$rname', raddress='$raddress', rphone='$rphone', rrwp='$rrwp', diseases='$diseases', docname='$docname', roomno='$roomno', bedno='$bedno', adate='$adate' WHERE pid='$pid'";
	$res = mysqli_query($conn, $q);
	if ($res) {
		header("location:home.php");
	}else{
		echo mysqli_error($conn);
	}
}



?>















<div style="margin-top:500px;"></div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>