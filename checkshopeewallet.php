<?php
include "connectsendo.php";
$iduser = $_POST['iduser'];
$query = "SELECT * FROM shopeewallet WHERE iduser = '$iduser'";
$data = mysqli_query($conn, $query);
if($data){
	$number = mysqli_num_rows($data);
	if($number == 1){
		echo "exits";
	}else {
		echo "not";
	}
}



?>