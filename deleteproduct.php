<?php
include "connectsendo.php";
$idproduct = $_POST['idproduct'];

$query = "DELETE FROM product where id = '$idproduct'";
$data = mysqli_query($conn, $query);
if($data){
	echo "success";
}else {
	echo "fail";
}




?>