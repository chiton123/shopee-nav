<?php
include "connectsendo.php";
$iduser = $_POST['iduser'];
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
$query = "SELECT d.id, d.name, d.image, d.price, d.idstore, d.idtypeproduct, d.salenumber, d.number , d.discount FROM product d, productlike k where d.id = k.idproduct and k.iduser = '$iduser'";
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