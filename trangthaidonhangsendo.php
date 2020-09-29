<?php
include "connectsendo.php";
$id = $_POST['idchitietdonhang'];
$trangthai = $_POST['trangthai'];

$query = "UPDATE detailorder SET status = '$trangthai' WHERE id = '$id'";
$data = mysqli_query($conn, $query);
if($data){
	echo "success";
}else {
	echo "fail";
}



?>