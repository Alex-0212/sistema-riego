<?php

function obtenerVariableDelEntorno($key)
{
    if (defined("_ENV_CACHE")) {
        $vars = _ENV_CACHE;
    } else {
        $file = "env.php";
        if (!file_exists($file)) {
            throw new Exception("El archivo de las variables de entorno ($file) no existe. Favor de crearlo");
        }
        $vars = parse_ini_file($file);
        define("_ENV_CACHE", $vars);
    }
    if (isset($vars[$key])) {
        return $vars[$key];
    } else {
        throw new Exception("La clave especificada (" . $key . ") no existe en el archivo de las variables de entorno");
    }
}

   $dbhost = obtenerVariableDelEntorno("MYSQL_HOST");
   $dbuser = obtenerVariableDelEntorno("MYSQL_USER"); 
   $dbpass = obtenerVariableDelEntorno("MYSQL_PASSWORD");   	
   $dbname = obtenerVariableDelEntorno("MYSQL_DATABASE_NAME"); 
  
   $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);  
   
   if($con -> connect_errno){
//      echo "Fallo la conexion";
}else{
  //      echo "Si se logro conectar";

	

}

return $con;
?>
