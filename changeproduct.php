<?php
include "connectsendo.php";
$idstore = $_POST['idstore'];
$x = $_POST['x'];

class product{
	function product($id, $name, $image, $price, $salenumber, $number, $like){
		$this->id = $id;
		$this->name = $name;
		$this->image = $image;
		$this->price = $price;
		$this->salenumber = $salenumber;
		$this->number = $number;
		$this->like = $like;
	}
}
if($x == 1){
	$query = "SELECT p.id, p.name, p.image, p.price, p.salenumber, p.number, count(l.id) as 'like' FROM product p  left join productlike l on p.id = l.idproduct where p.idstore = '$idstore' group by p.id limit 10";
}else if($x == 2){
	$query = "SELECT p.id, p.name, p.image, p.price, p.salenumber, p.number, count(l.id) as 'like' FROM product p  left join productlike l on p.id = l.idproduct where p.idstore = '$idstore' group by p.id";
}else {
	$query = "SELECT p.id, p.name, p.image, p.price, p.salenumber, p.number, count(l.id) as 'like' FROM product p  left join productlike l on p.id = l.idproduct where p.idstore = '$idstore' and p.number = 0 group by p.id ";
}


$data = mysqli_query($conn, $query);
$mang = array();
while($row = mysqli_fetch_assoc($data)){
	if($row['like'] == 0){
		array_push($mang, new product(
		$row['id'],
		$row['name'],
		$row['image'],
		$row['price'],
		$row['salenumber'],
		$row['number'],
		0));
	}else {
		array_push($mang, new product(
		$row['id'],
		$row['name'],
		$row['image'],
		$row['price'],
		$row['salenumber'],
		$row['number'],
		$row['like']));
	}
	
}
echo json_encode($mang);





?>