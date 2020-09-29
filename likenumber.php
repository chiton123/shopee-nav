<?php
include "connectsendo.php";
$iduser = $_POST['iduser'];
$number = 0;

$query = "SELECT count(*) as 'sl' from productlike where iduser = '$iduser' group by iduser";
$data = mysqli_query($conn, $query);
while($row = mysqli_fetch_assoc($data)){
	$number = $row['sl'];
	break;
}
echo $number;


?>