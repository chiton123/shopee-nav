<?php
include "connectsendo.php";
$iduser = $_POST['iduser'];
$idproduct = $_POST['idproduct'];
$query = "DELETE FROM productlike where iduser = '$iduser' and idproduct = '$idproduct'";
$data = mysqli_query($conn, $query);
if($data){
	echo "success";
}else {
	echo "fail";
}



?>