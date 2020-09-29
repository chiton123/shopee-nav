<?php
include "connectsendo.php";

$idsanpham = $_POST['idsanpham'];
$idcuahang = $_POST['idcuahang'];

$query = "SELECT * from product where idstore = '$idcuahang' and idtypeproduct = (select idtypeproduct from product where id = '$idsanpham')";
$data = mysqli_query($conn, $query);

class product{
	function product($id, $name, $image, $price, $idstore, $idtypeproduct, $salenumber, $number, $discount){
		$this->id = $id;
		$this->name = $name;
		$this->image = $image;
		$this->price = $price;
		$this->idstore = $idstore;
		$this->idtypeproduct = $idtypeproduct;
		$this->salenumber = $salenumber;
		$this->number = $number;
		$this->discount = $discount;
	}
}


$mang = array();

while($row = mysqli_fetch_assoc($data)){
	array_push($mang, new product(
		$row['id'],
		$row['name'],
		$row['image'],
		$row['price'],
		$row['idstore'],
		$row['idtypeproduct'],
		$row['salenumber'],
		$row['number'],
		$row['discount']));
}
echo json_encode($mang);



?>