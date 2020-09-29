<?php
include "connectsendo.php";
$idcuahang = $_POST['idcuahang'];
$sosao = $_POST['sosao'];
class remark{
	function remark($idproduct, $username, $remark, $star){
		$this->idproduct = $idproduct;
		$this->username = $username;
		$this->remark = $remark;
		$this->star = $star;
		
	}
}
if($sosao == 0){
	$query = "SELECT p.id, e.username, e.remark, e.star FROM evaluation e, product p where e.idproduct = p.id and p.idstore = '$idcuahang'";
}else {
	$query = "SELECT p.id, e.username, e.remark, e.star FROM evaluation e, product p where e.idproduct = p.id and p.idstore = '$idcuahang' 
	and e.star = '$sosao'";
}

$data = mysqli_query($conn, $query);
$mang = array();
while($row = mysqli_fetch_assoc($data)){
	array_push($mang, new remark(
		$row['id'],
		$row['username'],
		$row['remark'],
		$row['star']));
}
echo json_encode($mang);


?>