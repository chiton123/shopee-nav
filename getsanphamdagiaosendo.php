<?php
include "connectsendo.php";

$tendangnhap = $_POST['tendangnhap'];

$query = "SELECT o.id as 'idorder', p.id as 'idproduct', p.name, p.image, d.number, d.price, o.username,d.status, d.id as 'iddetail' FROM orders o, detailorder d, product p WHERE o.email = '$tendangnhap' and p.id = d.idproduct and o.id = d.idorders AND d.status = 3";
$data = mysqli_query($conn, $query);


class basket {
	function basket($idorders, $idproduct, $productname, $image, $number, $price, $username, $status, $iddetail){
		$this->idorders = $idorders;
		$this->idproduct = $idproduct;
		$this->productname = $productname;
		$this->image = $image;
		$this->number = $number;
		$this->price = $price;
		$this->username = $username;
		$this->status = $status;
		$this->iddetail = $iddetail;
	}
}

$mang = array();
while($row = mysqli_fetch_assoc($data)){
	array_push($mang, new basket(
		$row['idorder'],
		$row['idproduct'],
		$row['name'],
		$row['image'],
		$row['number'],
		$row['price'],
		$row['username'],
		$row['status'],
		$row['iddetail']));
}
echo json_encode($mang);


?>