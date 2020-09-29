<?php
include "connectsendo.php";

$idcuahang = $_POST['idcuahang'];

$query = "SELECT * FROM store WHERE id = '$idcuahang'";
$data = mysqli_query($conn, $query);
$mang = array();
$soluong = 0;
$query1 = "SELECT sum(p.number) as 'soluong' from product p where p.id = '$idcuahang' group by id";
$data1 = mysqli_query($conn, $query1);
while($row1 = mysqli_fetch_assoc($data1)){
	$soluong = $row1['soluong'];
}
$danhgiatb = 0;
$query2 = "SELECT AVG(e.star) as 'tb1' from product p, evaluation e where p.id = e.idproduct and p.idstore = '$idcuahang' group by p.idstore";

$data2 = mysqli_query($conn, $query2);
while($row2 = mysqli_fetch_assoc($data2)){
	$danhgiatb = $row2['tb1'];
}

$owner = "";
$query3 = "SELECT u.name FROM store s, user u WHERE s.id = '$idcuahang' and u.id = s.iduser";
$data3 = mysqli_query($conn, $query3);
while($row3 = mysqli_fetch_assoc($data3)){
	$owner = $row3['name'];
	break;
}

class cuahang {
	function cuahang($idcuahang, $tencuahang, $hinhanhcuahang, $diachi, $soluongsanpham, $danhgiatb, $iduser, $tenchu){
		$this->idcuahang = $idcuahang;
		$this->tencuahang = $tencuahang;
		$this->hinhanhcuahang = $hinhanhcuahang;
		$this->diachi = $diachi;
		$this->soluongsanpham = $soluongsanpham;
		$this->danhgiatb = $danhgiatb;
		$this->iduser = $iduser;
		$this->tenchu = $tenchu;
	}
}

while($row = mysqli_fetch_assoc($data)){
	array_push($mang, new cuahang(
		$row['id'],
		$row['name'],
		$row['image'],
		$row['address'],
		$soluong,
		$danhgiatb,
		$row['iduser'],
		$owner));
}
echo json_encode($mang);
?>