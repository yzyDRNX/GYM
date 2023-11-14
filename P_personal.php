<?php

$conexion = new mysqli("localhost: 3306", "root", "Danielrivera04", "gym");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$nombre = $_POST['Nombre'];
$paterno = $_POST['Paterno'];
$materno = $_POST['Materno'];
$puesto = $_POST['Puesto'];
$correo = $_POST['Correo'];
$telefono = $_POST ['Telefono'];
$fecha_cont = $_POST['Fechacon'];

$sql = "INSERT INTO Empleado (Nombre, Paterno, Materno, Puesto, Correo, Fecha_contratación) VALUES ('$nombre', '$paterno', '$materno', '$puesto', '$correo', '$fecha_cont')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $conexion->error;
}

$conexion->close();
?>
