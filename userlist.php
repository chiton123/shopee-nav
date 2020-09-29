<?php
include "connectsendo.php";
$username = $_POST['username'];

class user{
	function user($userid, $username){
		$this->userid = $userid;
		$this->username = $username;
	}
}
$mang = array();
$query = "SELECT * FROM user WHERE email != '$username'";
$data = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($data)){
	array_push($mang, new user(
		$row['iduser'],
		$row['name']));
}
echo json_encode($mang);

?>