<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de usuarios</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="usuario">
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
    <div class="registro-usuario">
        <h4>Ingresa los datos del usuario y suscripción</h4>
        <form action="P_usuario.php" method="post">
            <input class="ingreso-datosU" type="text" id="Nombre" name="Nombre" placeholder="Nombre">
            <input class="ingreso-datosU" type="text" id="Paterno" name="Paterno" placeholder="Apellido paterno">
            <input class="ingreso-datosU" type="text" id="Materno" name="Materno" placeholder="Apellido Materno">
            <input class="ingreso-datosU" type="text" id="Edad" name="Edad" placeholder="Edad">
            <input class="ingreso-datosU" type="number" id="Telefono" name="Telefono" placeholder="Teléfono">
            <input type="number" class="ingreso-datosU" id="Entrenador" name="Entrenador" placeholder="Entrenador asignado">
            <div class="ingreso-datosUG">
                <label for="genero">Género:</label>
                <select name="genero">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
                <div class="opcionesp1">
                    <label for="rutina">Rutina asignada:</label>
                    <select name="rutina">
                        <option value="1">Principiante</option>
                        <option value="2">Intermedio</option>
                        <option value="3">Avanzado</option>
                    </select>
                    <DIV></DIV>
                    <label for="pago">Pago:</label>
                    <select name="pago">
                        <option value="Efectivo">Efectivo</option>
                        <option value="Tarjeta">Tarjeta</option>
                    </select>
                    <div class="tiposus">
                        <label for="sus">Tipo de suscripción:</label>
                        <select name="sus">
                            <option value="Visita">Visita</option>
                            <option value="Semana">Semana</option>
                            <option value="Quincena">Quincena</option>
                            <option value="Mensualidad">Mensualidad</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="datesputs">
                <label classs="label" for="Fechaing">Fecha de ingreso</label>
                <input type="date" class="ingreso-datosU" id="Fechaing" name="Fechaing">
                <label classs="label" for="Fechapag">Fecha de pago</label>
                <input type="date" class="ingreso-datosU" id="Fechaapag" name="Fechaapag">
            </div>
            <input type="number" class="ingreso-datosU" id="monto" name="monto" placeholder="Monto de pago">
            <button class="btnU" role="button" type="submit">Guardar datos</button>
        </form>
    </div>
</body>
</html>