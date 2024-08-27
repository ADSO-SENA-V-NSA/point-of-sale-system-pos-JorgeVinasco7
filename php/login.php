<?php
require 'conexionDB.php';

// Obtener datos del formulario del login
$user = $_POST['txtEmail'];
$pass = $_POST['txtPassword'];

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
?>