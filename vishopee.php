<?php
include "connectsendo.php";
$iduser = $_POST['iduser'];
$bank = $_POST['bank'];
$account = $_POST['account'];
$pin = $_POST['pin'];

$query = "INSERT INTO shopeewallet VALUES (null, '$iduser', '$bank', '$account', '$pin', 0)";
$data = mysqli_query($conn, $query);
if($data){
	echo "success";
}else {
	echo "fail";
}

?>