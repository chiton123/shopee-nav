<?php
include "connectsendo.php";

$iduser = $_POST['iduser'];
$money = $_POST['money'];

$query = "UPDATE shopeewallet set surplus = surplus - '$money' where iduser = '$iduser'";
$data = mysqli_query($conn, $query);
if($data){
	echo "success";
}else {
	echo "fail";
}



?>