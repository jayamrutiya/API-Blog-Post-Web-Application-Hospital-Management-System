<?php

$conn = mysqli_connect('localhost', 'root', '', 'hospital');
if ($conn) {
	echo " ";
}else{
	echo mysqli_error($conn);
}


?>