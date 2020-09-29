<?php
include "connectsendo.php";

$username = $_POST['username'];
$sotien = $_POST['sotien'];
$query = "UPDATE user SET airpay = '$sotien' WHERE email = '$username'";
$data = mysqli_query($conn, $query);
if($data){
	echo "1";
}else {
	echo "0";
}

?>