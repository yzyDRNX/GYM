<?php
$conexion = new mysqli("localhost: 3306", "root", "Danielrivera04", "gym");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$ejercicios = $_POST['Ejercicios'];
$dificultad = $_POST['dificultad'];


$sql = "INSERT INTO Rutinas (Ejercicios, dificultad) VALUES ('$ejercicios', '$dificultad')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $conexion->error;
}

$conexion->close();
?>
