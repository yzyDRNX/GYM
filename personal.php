<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreo de empelados</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="empleados">
    <header class="header">
        <div class="logo">
            <img src="imgs/logo.png" alt="logo">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="menu.html">Menú</a></li>
            </ul>
        </nav>
        <a href="logIn.php" class=" btn"><button>Cerrar Sesión</button></a>
    </header>

    <div class="registro-personal">
        <h4>Ingresa los datos del empleado</h4>
        <form action="P_personal.php" method="post" class="ingreso-personal">
            <input class="ingreso-personal" type="text" id="Nombre" name="Nombre" placeholder="Nombre">
            <input class="ingreso-personal" type="text" id="Paterno" name="Paterno" placeholder="Apellido paterno">
            <input class="ingreso-personal" type="text" id="Materno" name="Materno" placeholder="Apellido materno">
            <input class="ingreso-personal" type="text" id="Puesto" name="Puesto" placeholder="Puesto">
            <input class="ingreso-personal" type="text" id="Correo" name="Correo" placeholder="Correo electrónico">
            <input type="number" class="ingreso-entrenador" id="Telefono" name="Telefono" placeholder="Teléfono">
            <div class="datesPer">
                <label class="labelP" for="Fechacon">Fecha de contratación</label>
                <input type="date" class="ingreso-personal" id="Fechacon" name="Fechacon">
            </div>
            <button class="btnP" role="button" type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>