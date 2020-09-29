<?php
include "connectsendo.php";

$json = $_POST['json'];
$data = json_decode($json, true);
// echo json_encode($data);
$tendangnhap = $_POST['tendangnhap'];
$querymadonhang = "SELECT id FROM orders WHERE email = '$tendangnhap' ORDER BY id DESC"; 
$data1 = mysqli_query($conn, $querymadonhang);
$madonhang = 0;
if($data1){
	while($row = mysqli_fetch_assoc($data1)){
		$madonhang = $row['id'];
		break;
	}
	
}


foreach($data as $value){
	$masanpham = $value['masanpham'];
	$tensanpham = $value['tensanpham'];
	$giatridonhang = $value['giatridonhang'];
	$soluongsanpham = $value['soluongsanpham'];
	$query = "INSERT INTO detailorder VALUES (null,'$madonhang', '$masanpham', '$tensanpham', '$giatridonhang', '$soluongsanpham',0)";
	$check = mysqli_query($conn, $query);
}


?>
