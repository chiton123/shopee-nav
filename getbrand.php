<?php
include "connectsendo.php";

class brand {
	function brand($id, $name){
		$this->id = $id;
		$this->name = $name;
	}
}

$query = "SELECT * FROM brand";
$data = mysqli_query($conn, $query);
$mang = array();
while($row = mysqli_fetch_assoc($data)){
	array_push($mang, new brand(
		$row['id'],
		$row['name']));

}
echo json_encode($mang);

?>