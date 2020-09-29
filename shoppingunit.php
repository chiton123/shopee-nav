<?php
include "connectsendo.php";

class unit{
	function unit($id, $name, $cost){
		$this->id = $id;
		$this->name = $name;
		$this->cost = $cost;
	}
}

$query = "SELECT * FROM shippingunit";
$data = mysqli_query($conn, $query);
$mang = array();
while($row = mysqli_fetch_assoc($data)){
	array_push($mang, new unit(
		$row['id'],
		$row['name'],
		$row['cost']));
}
echo json_encode($mang);

?>