<?php
include "connectsendo.php";

class kind{
	function kind($id, $name, $image){
		$this->id = $id;
		$this->name = $name;
		$this->image = $image;
	}
}
$mang = array();
$query = "SELECT * FROM type_product";
$data = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($data)){
	array_push($mang, new kind(
		$row['id'],
		$row['typename'],
		$row['image']));
}
echo json_encode($mang);


?>