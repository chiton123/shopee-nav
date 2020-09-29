<?php
include "connectsendo.php";
// $username = $_POST['tendangnhap'];
$idchitietdonhang = $_POST['idchitietdonhang'];
$query = "UPDATE detailorder set status = 4 WHERE id = '$idchitietdonhang'";
$data = mysqli_query($conn, $query);
if($data){
	echo "success";
}else {
	echo "fail";
}


?>