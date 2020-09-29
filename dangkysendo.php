<?php
include "connectsendo.php";

$ten = $_POST['ten'];
$diachi = $_POST['diachi'];
$email = $_POST['email'];
$matkhau = $_POST['matkhau'];
$sodienthoai = $_POST['sodienthoai'];

$query = "INSERT INTO user VALUES (null, '$ten', '$sodienthoai', '$diachi', '$matkhau','$email',0)";

if(mysqli_query($conn, $query)){
	echo "thanh cong";
}else {
	echo "fail";
}



?>