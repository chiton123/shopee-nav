<?php
include "connectsendo.php";
class loaisanpham {
	function loaisanpham($id, $tenloaisanpham, $hinhanhloaisanpham){
		$this->id = $id;
		$this->tenloaisanpham = $tenloaisanpham;
		$this->hinhanhloaisanpham = $hinhanhloaisanpham;
	}
}


$query = "SELECT * FROM type_product";
$mangloaisp = array();
$data = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($data)){
	array_push($mangloaisp, new loaisanpham(
		$row['id'],
		$row['typename'],
		$row['image']
	));
}
echo json_encode($mangloaisp);

?>