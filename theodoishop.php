<?php
include "connectsendo.php";

$iduser = $_POST['iduser'];
$idcuahang = $_POST['idcuahang'];
$query = "SELECT * FROM follow where iduser = '$iduser' and idstore = '$idcuahang'";
$data = mysqli_query($conn, $query);
$check = mysqli_num_rows($data);
if($check > 0){
	echo "datheodoi";
}else {
	$query1 = "INSERT INTO follow VALUES(null, '$idcuahang', '$iduser')";
	$data1 = mysqli_query($conn, $query1);
}

?>