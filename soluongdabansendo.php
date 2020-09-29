<?php
include "connectsendo.php";

$json = $_POST['json1'];
$data = json_decode($json, true);

$masanpham = 0;
$soluong = 0;
$check = 0;
foreach($data as $value){
	$masanpham = $value['masanpham'];
	$soluong = $value['soluong'];
	$query = "UPDATE product SET salenumber = salenumber + '$soluong' WHERE id = '$masanpham'";
	$check = mysqli_query($conn, $query);
}
// if($check){
// 	echo "success";
// }else {
// 	echo "fail";
// }

// $query = "UPDATE sanpham SET soluongdaban = soluongdaban + 10 WHERE idsanpham = 1";
// $data = mysqli_query($conn, $query);
// if($data){
// 	echo "1";
// }else {
// 	echo "0";
// }


?>