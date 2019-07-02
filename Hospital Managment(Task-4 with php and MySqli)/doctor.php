<?php
include "db.php";
session_start();
// echo $_SESSION['pwd'];
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
	<title>Doctor</title>
</head>
<body>

<div class="container">
		
	<h1 class="bg-info text-center">Doctor Details</h1>
	<table class="table">
            <thead>
                <tr>
                    <th>DID</th>
                    <th>Name</th>
                    <th>Birth of Date</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Join Date</th>
                    <th>Desgination</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                	<?php

                	$q = "SELECT did,name,birthdate,gender,address,joindate,desgination FROM doctor";
                	$res = mysqli_query($conn,$q);
                	while($row = mysqli_fetch_array($res,MYSQLI_BOTH)){
                		$did = $row['did'];
						$name = $row['name'];
						$birthdate = $row['birthdate'];
						$gender = $row['gender'];
						$address = $row['address'];
						$joindate = $row['joindate'];
						$desgination = $row['desgination'];
                	

                	?>



                   
                    <td><?php echo $did; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $birthdate; ?></td>
                    <td><?php echo $gender; ?></td>
                    <td><?php echo $address; ?></td>
                    <td><?php echo $joindate; ?></td>
                    <td><?php echo $desgination; ?></td>
                   



                </tr>
            </tbody>

                    <?php
                    }
                    ?>
        </table>
        <div class="row">
        	 <a class="btn btn-primary" href="newdoctor.php" role="button">ADD</a>
        </div>
</div>














<div style="margin-top:500px;"></div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>