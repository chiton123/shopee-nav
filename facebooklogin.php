<?php
include "connectsendo.php";
$iduser = 0;

$email = $_POST['email'];
$name = $_POST['name'];
$query = "SELECT * FROM user where email = '$email'";
$data = mysqli_query($conn, $query);
if($data){
	$number = mysqli_num_rows($data);
	if($number == 0){
		$query1 = "INSERT INTO user VALUES (null, '$name',0,'','','$email',0)";
		$data1 = mysqli_query($conn, $query1);
		if($data1){
			$query2 = "SELECT * FROM user WHERE email = '$email'";
			$data2 = mysqli_query($conn, $query2);
			while($row = mysqli_fetch_assoc($data2)){
				$iduser = $row['id'];
				echo $iduser;
			}
		}
	}else {
		$query3 = "SELECT * FROM user WHERE email = '$email'";
			$data3 = mysqli_query($conn, $query3);
			while($row = mysqli_fetch_assoc($data3)){
				$iduser = $row['id'];
				echo $iduser;
			}

	}
}






?>