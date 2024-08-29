<?php
// Incluir el archivo de conexión
include 'conexionDB.php';
   
   $Email = $_POST['txtemail'];
   $Password = $_POST['txtpassword'];

   $insertar = "INSERT INTO user(Email, password) VALUES ('$Email', '$Password')";
   $result = $enlace -> query($insertar);

   if ($result -> num_rows > 0) {
    // no se registro 
    echo "NO REGISTRADO.";
} else {
    //no registro
    echo "REGISTRADO.";
}

?>
