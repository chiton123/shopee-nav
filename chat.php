<?php
include "connectsendo.php";
$idmain = $_POST['idmain'];
$idotheruser = $_POST['iduser'];
$message = $_POST['message'];



$query1 = "INSERT INTO chat VALUES(null, '$idmain', '$idotheruser', '$message')";
$data1 = mysqli_query($conn, $query1);
if($data1){
	echo "success";
}else {
	echo "fail";
}


?>