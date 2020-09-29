<?php
include "connectsendo.php";

$tendangnhap = $_POST['tendangnhap'];
$matkhau = $_POST['matkhau'];

$iduser;
$query = "SELECT * FROM user WHERE email = '$tendangnhap' AND password = '$matkhau'";
$data = mysqli_query($conn, $query);
if($data){
	$row = mysqli_num_rows($data);
	if($row){
		while($row = mysqli_fetch_assoc($data)){
			$iduser = $row['id'];
			echo $iduser;
			break;
		}
	}
}else {
	echo "fail";
}


?>