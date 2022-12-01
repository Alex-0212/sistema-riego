<?php
include_once "./cors.php";
include_once "./conexion.php";

	$query = "SELECT * FROM datitos";
	$result = mysqli_query($con,$query);

	$row = mysqli_fetch_all($result);
	
	echo json_encode($row);


?>
