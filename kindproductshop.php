<?php
include "connectsendo.php";
$idcuahang = $_POST['idcuahang'];
$idloai = $_POST['idloai'];
$tanggiam = $_POST['tanggiam'];
$x = $_POST['x'];


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
$query = "SELECT * FROM product WHERE idtypeproduct = '$idloai' and idstore = '$idcuahang' ORDER BY id DESC";

if($x == 1){
	$query = "SELECT * FROM product WHERE idtypeproduct = '$idloai' and idstore = '$idcuahang'";
}else if($x == 2) {
	if($tanggiam %2 == 0){
		$query = "SELECT * FROM product WHERE idtypeproduct = '$idloai' and idstore = '$idcuahang' ORDER BY price ASC";
	}else {
		$query = "SELECT * FROM product WHERE idtypeproduct = '$idloai'and idstore = '$idcuahang' ORDER BY price DESC";
	}
}

$data = mysqli_query($conn, $query);
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