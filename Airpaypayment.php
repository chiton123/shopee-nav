<?php
include "connectsendo.php";
$tongtien = $_POST['tongtien'];
$username = $_POST['username'];

$query = "UPDATE user SET airpay = airpay - '$tongtien' where email = '$username'";
$data = mysqli_query($conn, $query);
if($data){
	echo "1";
}else {
	echo "0";
}

?>