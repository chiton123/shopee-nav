<?php
include "connectsendo.php";

$idchitietdonhang = $_POST['idchitietdonhang'];
$query = "UPDATE detailorder set tinhtrang = 1 WHERE id = '$idchitietdonhang'";
$data = mysqli_query($conn, $query);
if($data){
	echo "success";
}else {
	echo "fail";
}


?>