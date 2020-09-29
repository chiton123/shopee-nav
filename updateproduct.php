<?php
include "connectsendo.php";
$idproduct = $_POST['idproduct'];
$price = $_POST['price'];
$number = $_POST['number'];

$query = "UPDATE product set number = '$number' and price = '$price' where id = '$idproduct'";
$data = mysqli_query($conn, $query);
if($data){
	echo "success";
}else {
	echo "fail";
}




?>