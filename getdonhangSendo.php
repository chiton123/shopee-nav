<?php
include "connectsendo.php";

$tongtien = (int) $_POST['tongtien'];
$tenkhachhang  = "";
$sodienthoai =  0;
$diachi = "";
$tendangnhap = $_POST['tendangnhap'];
$pttt = $_POST['pttt'];
$iduser = $_POST['iduser'];
$queryuser = "SELECT * FROM user WHERE email = '$tendangnhap'";
$datauser = mysqli_query($conn, $queryuser);
if(mysqli_query($conn, $queryuser)){
	while($row = mysqli_fetch_assoc($datauser)){
		$tenkhachhang = $row['name'];
		$sodienthoai = $row['phone'];
		$diachi = $row['address'];
	}
}


$query1 = "INSERT INTO orders VALUES(null,'$iduser', '$tenkhachhang', '$sodienthoai', '$diachi', '$tongtien', '$tendangnhap', '$pttt')";
$data1= mysqli_query($conn, $query1);
if($data1){
	echo "success";
}else {
	echo "fail";
}





?>