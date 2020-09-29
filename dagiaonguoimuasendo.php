<?php
include "connectsendo.php";
$idchitietdonhang = $_POST['idchitietdonhang'];
$query = "UPDATE detailorder SET status = 3 WHERE id = '$idchitietdonhang'";
$data = mysqli_query($conn, $query);
if($data){
	echo "success";
}else {
	echo "fail";
}


?>