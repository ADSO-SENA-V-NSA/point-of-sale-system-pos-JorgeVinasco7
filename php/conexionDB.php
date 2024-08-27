<?php
//conexion a base de Datos
$enlace = mysqli_connect("localhost" , "root" , "" , "login");

//Si hay conexion
if(!$enlace){
   die("NO HAY CONEXION A LA BASE DE DATOS".mysqli_error());
}
// Cerrar la conexión
mysqli_close($enlace);
?>
