<?php
include "db.php";
session_start();
//echo $_SESSION['pwd'];
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
	<title>SPD</title>
</head>
<body>



	<table class="table" border="1">
            <thead>
                <tr>
                    <th>PID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Birth of Date</th>
                    <th>Phone</th>
                    <th>Relative Name</th>
                    <th>Relative Address</th>
                    <th>Relative Phone</th>
                    <th>Relative Relation With Patient</th>
                    <th>Diseases</th>
                    <th>Doctor Name</th>
                    <th>Room No</th>
                    <th>Bed No</th>
                    <th>Admit Date</th>
                    <th>Add Again</th>
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                	<?php

                	$q = "SELECT pid,name,gender,age,address,birth,phone,rname,raddress,rphone,rrwp,diseases,docname,roomno,bedno,adate FROM patient WHERE status='old'";
                   
                	$res = mysqli_query($conn,$q);
                     
                	while($row = mysqli_fetch_array($res,MYSQLI_BOTH)){
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
                	

                	?>



 					<form action="sapd.php" method="post">
                    <td><input type="text" size="1" readonly="readonly" name="pid" style="border: none;" value="<?php echo $pid; ?>"></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $gender; ?></td>
                    <td><?php echo $age; ?></td>
                    <td><?php echo $address; ?></td>
                    <td><?php echo $birth; ?></td>
                    <td><?php echo $phone; ?></td>
                    <td><?php echo $rname; ?></td>
                    <td><?php echo $raddress; ?></td>
                    <td><?php echo $rphone; ?></td>
                    <td><?php echo $rrwp; ?></td>
                    <td><?php echo $diseases; ?></td>
                    <td><?php echo $docname; ?></td>
                    <td><?php echo $roomno; ?></td>
                    <td><?php echo $bedno; ?></td>
                    <td><?php echo $adate; ?></td>
                    <td><input type="submit" name="addagain" value="Add Again"></td>
                    </form>

                    
                </tr>
            </tbody>
            <?php
                    }
                    ?>
        </table>


<?php
if (isset($_POST['addagain'])) {
    $pid = $_POST['pid'];
    $qu = "UPDATE patient SET status='new' WHERE pid=$pid";
    $res = mysqli_query($conn,$qu);
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