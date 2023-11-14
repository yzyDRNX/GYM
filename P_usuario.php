<?php

$conexion = new mysqli("localhost: 3306", "root", "Danielrivera04", "gym");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$nombre = $_POST['Nombre'];
$paterno = $_POST['Paterno'];
$materno = $_POST['Materno'];
$genero = $_POST['genero'];
$edad = $_POST['Edad'];
$telefono = $_POST['Telefono'];
$entrenadorAsignado = (int)$_POST['Entrenador'];
$rutinaAsignada = (int)$_POST['rutina'];
$tipoPago = $_POST['pago'];
$tipoSuscripcion = $_POST['sus'];
$fechaIngreso = $_POST['Fechaing'];
$fechaPago = $_POST['Fechaapag'];
$montoPago = $_POST['monto'];

$sql = "INSERT INTO Usuario (Nombre, Paterno, Materno, Genero, Edad, Telefono, Tipo_pago, Fecha_ingreso, Fecha_pago, Tipo_suscripcion, Monto_pago, Id_rutina, Id_entrenador) 
        VALUES ('$nombre', '$paterno', '$materno', '$genero', '$edad', '$telefono', '$tipoPago', '$fechaIngreso', '$fechaPago', '$tipoSuscripcion', '$montoPago', $rutinaAsignada, $entrenadorAsignado)";

if ($conexion->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $conexion->error;
}

$conexion->close();
?>
