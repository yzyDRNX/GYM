<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutinas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class="Rutinas">
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

    <div class="registro-rutinas">
        <h4>Ingresa la nueva rutina</h4>
        <form action="P_rutinas.php" method="post">
            <input type="text" class="ingreso-rutinas" id="Ejercicios" name="Ejercicios" placeholder="Ejercicios">

            <div class="ingreso-rutinasD">
                <label for="dificultad">Dificultad:</label>
                <select name="dificultad">
                    <option value="Principiante">Principiante</option>
                    <option value="Intermedio">Intermedio</option>
                    <option value="Avanzado">Avanzado</option>
                </select>
            </div>
            <button class="btnR" role="button" type="submit">Guardar</button>
        </form>
    </div>
    
</body>
</html>