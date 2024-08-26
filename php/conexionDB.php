<?php
//conexion a base de Datos
$enlace = mysqli_connect("localhost" , "root" , "" , "login");

//Si hay conexion
if(!$enlace){
   die("NO HAY CONEXION A LA BASE DE DATOS".mysqli_error());
}
// Obtener datos del formulario
$user = $_POST['txtusername'];
$pass = $_POST['txtpassword'];

// Consultar la base de datos
$sql = "SELECT * FROM user WHERE Email='$user' AND password='$pass'";
$result = $enlace -> query($sql);

// insertar a la base de datos


if ($result -> num_rows > 0) {
    // Si se encontró el usuario
    echo "ENTRO AL LOGIN!";
} else {
    // Si no se encontró el usuario
    echo "INVALIDO LOGIN O PASSWORD.";
}

// Cerrar la conexión
mysqli_close($enlace);
?>
