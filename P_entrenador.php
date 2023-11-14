<?php
$conexion = new mysqli("localhost: 3306", "root", "Danielrivera04", "gym");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$nombre = $_POST['Nombre'];
$paterno = $_POST['Paterno'];
$materno = $_POST['Materno'];
$telefono = $_POST ['Telefono'];
$certi = $_POST['Certificaciones'];

$sql = "INSERT INTO Entrenador (Nombre, Paterno, Materno, Certificaciones, Telefono) VALUES ('$nombre', '$paterno', '$materno', '$telefono', '$certi')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $conexion->error;
}

$conexion->close();
?>
