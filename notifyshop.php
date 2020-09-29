<?php
include "connectsendo.php";

$iduser = $_POST['iduser'];
$x = $_POST['x'];

$query = "SELECT count(*) as 'soluong' from detailorder d, product p, store s WHERE d.idproduct = p.id and s.id = p.idstore and d.status = '$x' and s.iduser = '$iduser'";

$soluong = 0;
$data = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($data)){
	$soluong = $row['soluong'];
	break;
}
echo $soluong;


?>