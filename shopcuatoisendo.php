<?php
include "connectsendo.php";

$username = $_POST['tendangnhap'];
$query = "SELECT c.id, c.name FROM user s JOIN store c ON s.id = c.iduser WHERE s.email = '$username'";
$data = mysqli_query($conn, $query);
$count = mysqli_num_rows($data);
class shop{
	function shop($id, $name){
		$this->id = $id;
		$this->name = $name;
	}
}
$mang = array();
while($row = mysqli_fetch_assoc($data)){
	array_push($mang, new shop(
		$row['id'],
		$row['name']));
}
echo json_encode($mang);

?>