<?php
include "connectsendo.php";

$iduser = $_POST['iduser'];
$query = "SELECT distinct sender, reciever FROM chat c WHERE sender = $iduser or reciever = $iduser";

class user{
	function user($iduser, $name){
		$this->iduser = $iduser;
		$this->name = $name;
	}
}
$mang = array();

$data = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($data)){
	$x = 0;
	$y = "";
	if($row['sender'] == $iduser){
		$x = $row['reciever'];
	}
	else { 
		$x = $row['sender'];
	}

	$query1 = "SELECT * FROM user WHERE id = '$x'";
	$data1 = mysqli_query($conn, $query1);
	while($row1 = mysqli_fetch_assoc($data1)){
		$y = $row1['name'];
	}

	array_push($mang, new user(
		$x,
		$y));

}

echo json_encode($mang);



?>