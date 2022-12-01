<?php
   
    $tempAg = $_POST['tempAg'];
    $humdS = $_POST['humdS'];
    $tempA = $_POST['tempA'];
    $humdA = $_POST['humdA'];
  

   include "conexion.php";
    $data = "INSERT INTO datitos (temperaturaAg,humedadS,temperaturaA,humedadA) VALUES ( $tempAg, $humdS, $tempA, $humdA)";
    //Se ejecuta la instruccion
   mysqli_query($con, $data);
	mysqli_query($con); 
	
?>
