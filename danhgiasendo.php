<?php
include "connectsendo.php";
$masanpham = $_POST['masanpham'];

class remark{
	function remark($idproduct, $username, $remark, $star){
		$this->idproduct = $idproduct;
		$this->username = $username;
		$this->remark = $remark;
		$this->star = $star;
		
	}
}
$query = "SELECT * FROM evaluation WHERE idproduct = '$masanpham'";
$data = mysqli_query($conn, $query);
$mang = array();
while($row = mysqli_fetch_assoc($data)){
	array_push($mang, new remark(
		$row['idproduct'],
		$row['username'],
		$row['remark'],
		$row['star']));
}
echo json_encode($mang);




?>