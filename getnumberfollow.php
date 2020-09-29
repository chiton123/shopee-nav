<?php
include "connectsendo.php";
$idcuahang = $_POST['idcuahang'];

$query = "SELECT count(*) as 'follow' from follow where idstore = '$idcuahang' group by idstore";
$data = mysqli_query($conn, $query);
$number = 0;
while($row = mysqli_fetch_assoc($data)){
	$number = $row['follow'];
}
echo $number;

?>