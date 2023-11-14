<?php

$conexion = new mysqli("localhost: 3306", "root", "Danielrivera04", "gym");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO Contacto (Nombre, Email, Mensaje) VALUES ('$nombre', '$email', '$mensaje')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $conexion->error;
}

$conexion->close();
?>
