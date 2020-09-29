<?php
include "connectsendo.php";
$username = $_POST['tendangnhap'];
// $username = 'nhu@gmail.com';
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
$query  = "SELECT o.id as 'idorder', p.id as 'idproduct', p.name, p.image, d.number, d.price, o.username,d.status, d.id as 'iddetail' FROM user u, product p, store s, detailorder d, orders o WHERE u.id = s.iduser and s.id = p.idstore and p.id = d.idproduct and o.id = d.idorders and u.email = '$username' and d.status = 3";
$data = mysqli_query($conn, $query);
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