<?php
include "connectsendo.php";

$name = $_POST['name'];
$image = $_POST['image'];
$price = $_POST['price'];
$idstore = $_POST['idstore'];
$idtype = $_POST['idtype'];
$idbrand = $_POST['idbrand'];
$number = $_POST['number'];
$ship = $_POST['ship'];

$query = "INSERT INTO product VALUES (null, '$name', '$image', '$price', '$idstore', '$idtype', '$idbrand', '$number', 0, 0, '$ship')";
$data = mysqli_query($conn, $query);
if($data){
	echo "success";
}else {
	echo "fail";
}



?>