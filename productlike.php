<?php
include "connectsendo.php";
$iduser = $_POST['iduser'];
$idproduct = $_POST['idproduct'];
$query = "INSERT INTO productlike VALUES (null, '$iduser', '$idproduct')";
$data = mysqli_query($conn, $query);
if($data){
	echo "success";
}else {
	echo "fail";
}



?>