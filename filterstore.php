<?php
include "connectsendo.php";
$idloaisp = $_POST['idloaisp'];
$noiban = $_POST['noiban'];

$query = "SELECT p.id, p.name, p.image, p.price, p.idstore, p.idtypeproduct, p.quantity, p.salequantity, p.discount FROM product p, store s WHERE p.idcuahang = s.id AND s.address like '$noiban' and p.idtypeproduct = '$idloaisp'";
$data = mysqli_query($conn, $query);
$mang = array();
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
while($row = mysqli_fetch_assoc($data)){
	array_push($mang, new basket(
		$row['id'],
		$row['name'],
		$row['image'],
		$row['price'],
		$row['idstore'],
		$row['idtypeproduct'],
		$row['salequantity'],
		$row['quantity'],
		$row['discount']));
}

echo json_encode($mang);


?>