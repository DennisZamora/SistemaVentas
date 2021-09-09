<?php

/*Se crea la funcion para conectar a la base de datos*/
function conecta(){
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$BD = "ventas";

$conexion = new mysqli($servidor, $usuario, $contrasena, $BD);

if ($conexion->connect_error) {
   // die("Error al Conectar con la BD: " . $conexion->connect_error);
}
return $conexion;
}

/*Se crea la funcion para desconectarse de la base de datos*/
function desconectaDB($conexion){
   $close = mysqli_close($conexion); 
   return $close;
}