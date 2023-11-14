<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monkey Gym - Inicia Sesion</title>
    <script src="scripts.js"></script>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/696bc5566a.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="imgs/logo3.png" alt="logo del gym"></a>
            
        </div>
    </header>

    <section class="seccion">
        <div class="contedor">
            <div class="formulario">
                <form action="">
                    <h2>Inicia sesión</h2>
                    <div class="input-contenedor">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="Usuario" name="Usuario" required>
                        <label for="">Usuario</label>
                    </div>
                    <div class="input-contenedor">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="Contraseña" name="Contraseña" required>
                        <label for="">Contraseña</label>
                    </div>
                </form>

                <div>
                    <button type="button" onclick="checklogin()">Ingresar</button>
                </div>
            </div>
        </div>
    </section>

</body>
</html>