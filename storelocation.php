<?php
include "connectsendo.php";
$idcuahang = $_POST['idcuahang'];
$query = "SELECT * FROM store WHERE id = '$idcuahang'";
$data = mysqli_query($conn, $query);

class location{
	function location($vido, $kinhdo){
		$this->vido = $vido;
		$this->kinhdo = $kinhdo;
	}
}
$mang = array();
while($row = mysqli_fetch_assoc($data)){
	array_push($mang, new location(
		$row['latitude'],
		$row['longitude']));
}
echo json_encode($mang);


?>