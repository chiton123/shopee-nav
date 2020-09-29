<?php
include "connectsendo.php";
$username = $_POST['username'];

$query = "SELECT * FROM user WHERE email = '$username'";
$data = mysqli_query($conn, $query);
$sotien = 0;
while($row = mysqli_fetch_assoc($data)){
	$sotien = $row['airpay'];
	break;
}
echo $sotien;



?>