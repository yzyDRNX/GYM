<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de entrenadores</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="entrenadores">
    <header class="header">
        <div class="logo">
            <img src="imgs/logo.png" alt="logo">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="menu.html">Menú</a></li>
            </ul>
        </nav>
        <a href="logIn.html" class=" btn"><button>Cerrar Sesión</button></a>
    </header>

    <div class="registro-entrenador">
        <h4>Ingresa los datos del entrenador</h4>
        <form action="P_entrenador.php" method="post">
            <input type="text" class="ingreso-entrenador" id="Nombre" name="Nombre" placeholder="Nombre">
            <input type="text" class="ingreso-entrenador" id="Paterno" name="Paterno" placeholder="Apellido Paterno">
            <input type="text" class="ingreso-entrenador" id="Materno" name="Materno" placeholder="Apellido materno">
            <input type="number" class="ingreso-entrenador" id="Telefono" name="Telefono" placeholder="Teléfono">
            <input type="text" class="ingreso-entrenador" id="Certificaciones" name="Certificaciones" placeholder="Certificaciones">
            <button class="btnE" role="button" type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>