<?php
include 'conexionDB.php';


// Obtener datos del formulario del login
$user = $_POST['txtEmail'];
$pass = $_POST['txtPassword'];

// Consultar la base de datos
$sql = "SELECT * FROM user WHERE Email='$user' AND password='$pass'";
$result = $enlace -> query($sql);

if ($result -> num_rows > 0) {
    // Si se encontró el usuario
    include '../Dashboard.html';
} else {
    // Si no se encontró el usuario
    echo "INVALIDO LOGIN O PASSWORD.";
}
?>