<?php
include "connectsendo.php";
$iduser = $_POST['iduser'];
$x = $_POST['x'];


	$query = "SELECT count(*) as 'soluong' FROM orders o, detailorder d where o.id = d.idorders and d.status = '$x' and o.iduser = '$iduser' group by o.iduser";

$soluong = 0;
$data = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($data)){
	$soluong = $row['soluong'];
	break;
}
echo $soluong;


?>