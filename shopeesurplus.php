<?php
include "connectsendo.php";

$iduser = $_POST['iduser'];
$surplus = 0;

$query = "SELECT * FROM shopeewallet WHERE iduser = '$iduser'";
$data = mysqli_query($conn, $query);
class wallet{
	function wallet($bankname, $surplus){
		$this->bankname = $bankname;
		$this->surplus = $surplus;
	}
}
$mang = array();
while($row = mysqli_fetch_assoc($data)){
	array_push($mang, new wallet(
		$row['bankname'],
	 	$row['surplus']));
}

echo json_encode($mang);



?>