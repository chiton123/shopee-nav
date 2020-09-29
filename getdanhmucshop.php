<?php
include "connectsendo.php";
$idcuahang = $_POST['idcuahang'];

class loaisanphamshop{
	function loaisanphamshop($idloaisanpham, $tenloai, $hinhanhloaisp, $soluong){
		$this->idloaisanpham = $idloaisanpham;
		$this->tenloai = $tenloai;
		$this->hinhanhloaisp = $hinhanhloaisp;
		$this->soluong = $soluong;
	}
}
$query = "SELECT t.id, t.typename, t.image, sum(p.number) as sl FROM product p JOIN type_product t on p.idtypeproduct = t.id WHERE p.idstore = '$idcuahang' GROUP BY t.id";

$data = mysqli_query($conn, $query);
$mang = array();
while($row = mysqli_fetch_assoc($data)){
	array_push($mang, new loaisanphamshop(
		$row['id'],
		$row['typename'],
		$row['image'],
		$row['sl']));
}
echo json_encode($mang);
?>