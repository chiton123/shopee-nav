<?php
include "connectsendo.php";
$idmain = $_POST['idmain'];
$idotheruser = $_POST['iduser'];


class message{
	function message($sender, $reciever, $message){
		$this->sender = $sender;
		$this->reciever = $reciever;
		$this->message = $message;
	}
}
$query1 = "SELECT * FROM chat WHERE (sender = '$idmain' and reciever = '$idotheruser') or (sender = '$idotheruser' and reciever = '$idmain')";
$data1 = mysqli_query($conn, $query1);
$mang = array();
while($row = mysqli_fetch_assoc($data1)){
	array_push($mang, new message(
		$row['sender'],
		$row['reciever'],
		$row['message']));
}
echo json_encode($mang);



?>