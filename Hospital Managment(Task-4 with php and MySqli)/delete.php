<?php
include "db.php";
session_start();
// echo $_SESSION['pwd'];
// echo $_SESSION['pid'];
$pid = $_SESSION['pid'];
$st = "old";
if (!isset($_SESSION['pwd'])) {
	header("location:logout.php");
}
	$qu = "UPDATE patient SET status='$st' WHERE pid='$pid'";
     if(mysqli_query($conn,$qu)){
     	header("location:home.php");
     	
     }else{
     	echo mysqli_error($conn);
     }

// $q = "SELECT password,pid,name,gender,age,address,birth,phone,rname,raddress,rphone,rrwp,diseases,docname,roomno,bedno FROM patient WHERE pid='$pid'";
//                 	$res = mysqli_query($conn, $q);
//                 	while($row = mysqli_fetch_array($res,MYSQLI_BOTH)){
//                 		$password = $row['password'];
//                 		$pid = $row['pid'];
// 						$name = $row['name'];
// 						$gender = $row['gender'];
// 						$age = $row['age'];
// 						$address = $row['address'];
// 						$birth = $row['birth'];
// 						$phone = $row['phone'];
// 						$rname = $row['rname'];
// 						$raddress = $row['raddress'];
// 						$rphone = $row['rphone'];
// 						$rrwp = $row['rrwp'];
// 						$diseases = $row['diseases'];
// 						$docname = $row['docname'];
// 						$roomno = $row['roomno'];
// 						$bedno = $row['bedno'];


// 						$q = mysqli_query($conn, "INSERT INTO oldpatient VALUES('$password', '$pid', '$name', '$gender', '$age', '$address', '$birth' ,'$phone', '$rname', 'raddress', '$rphone', '$rrwp', '$diseases', '$docname', '$roomno', '$bedno')");
						

// 						$qu = "DELETE FROM patient WHERE pid='$pid'";
// 						// if(!$qu){echo mysqli_error($conn);}else{echo "Deleted";}
// 						if(!$q && !$qu){
// 							echo mysqli_error($conn);
// 						}else{
// 							echo "Inserted & Delete";
// 						}	
// 					}
?> 