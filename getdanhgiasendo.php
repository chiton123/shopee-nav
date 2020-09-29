<?php
include "connectsendo.php";
$tendangnhap = $_POST['tendangnhap'];
$sosao = $_POST['sosao'];
$nhanxet = $_POST['nhanxet'];
$masanpham = $_POST['masanpham'];

$query = "INSERT INTO evaluation VALUES (null,'$masanpham', '$tendangnhap', '$nhanxet', '$sosao')";
$data = mysqli_query($conn, $query);
if($data){
	echo "success";
}else {
	echo "fail";
}


?>