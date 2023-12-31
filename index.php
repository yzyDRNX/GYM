<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moneky Gym</title>
    <link rel="stylesheet" href="estilos2.css">
    <script src="https://kit.fontawesome.com/696bc5566a.js" crossorigin="anonymous"></script>
</head>
<body class="principal">
    <header class="header">
        
        <div class="logo">
            <a href="#home"><img src="imgs/logo3.png" alt="logo"></a>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="#instalaciones">Instalaciones</a></li>
                <li><a href="#planes">Planes</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
        <a href="logIn.php" class=" btn"><button>Log In</button></a>
    </header>

    <section id="home" class="home">
        <div class="maxw">
            <div class="initial-text">
                <h3>Esculpe tu cuerpo, <br> <span style="color: #F58840;">Únete al olimpo</span></h3>
                
                <p>
                    En Monkey Gym, creemos firmemente que la grandeza es el camino, y estamos aquí para apoyarte 
                    en tu odisea personal hacia un estado físico y mental superior. Al igual que los antiguos 
                    dioses del Olimpo que forjaron sus propias leyendas, cada entrenamiento es una oportunidad 
                    para que tú también forjes la tuya. ¿Estás listo para comenzar? Únete a Monkey Gym y da el 
                    primer paso hacia la mejor versión de ti mismo.
                </p>
                
            </div>
            <div class="img-init">
                <img class="img-init" src="imgs/cbumBN.png" alt="cbum">
            </div>
        </div>
    </section>
    <div class="boton">
        <a href="#instalaciones" class="boton1">
            <i class="fa-regular fa-circle-down"></i>
        </a>
    </div>

    <section id="instalaciones" class="instalaciones">
        <div class="ins-content">
            <h2 class="info-inst">
                Conoce nuestras instalaciones
            </h2>
        </div>
        <div class="row">
            <div class="column"><img src="imgs/i1.jpg" alt=""></div>
            <div class="column"><img src="imgs/i2.jpg" alt=""></div>
            <div class="column"><img src="imgs/i3.jpg" alt=""></div>
        </div>
        <div class="row">
            <div class="column"><img src="imgs/i4.jpg" alt=""></div>
            <div class="column"><img src="imgs/i5.jpg" alt=""></div>
            <div class="column"><img src="imgs/i6.jpg" alt=""></div>
        </div>
    </section>

    <section id="planes" class="planes">
        <div class="planes-content">
            <div class="row">
                <div class="column">
                    <div class="info-planes">
                        <div class="info">
                            <span class="frase">EMPIEZA A MUTAR</span>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="p-especial">Conoce más acerca de nuestros planes y servicios de entrenamiento</p>
                    <p>Ofrecemos 3 tipos de suscripciones y 3 disciplinas deportivas</p>
                </div>
            </div>
        </div>
        <div class="info-servicios">
            <table>
                <tr>
                    <td>
                        <img class="img" src="imgs/ejercicio.png" alt="">
                        <h3><span class="txtRojo">Self</span> training</h3>
                        <p>Plan básico, incluye el uso de las instalaciones y todo el equipo, entrenamiento por tu cuenta.</p>
                    </td>
                    <td>
                        <img class="img" src="imgs/dumbell.png" alt="">
                        <h3><span class="txtRojo">Coached</span> training</h3>
                        <p>Incluye la experimentada asesoría y rutinas de nuestros entrtenadores 
                            certificados.</p>
                    </td>
                    <td>
                        <img class="img" src="imgs/gorila.png" alt="">
                        <h3><span class="txtRojo">Monkey</span> training</h3>
                        <p>El plan que te hará mutar, entrenamiento con asesoría y 
                            rutinas personalizadas a tus capacidades, manejo de dieta 
                            y suplementación.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img class="img" src="imgs/lifts.png" alt="">
                        <h3><span class="txtRojo">CrossFit</span> training</h3>
                        <p>Entrenamiento funcioanl de CrossFit, trabajo de skills y acondicionamiento.</p>
                    </td>
                    <td>
                        <img class="img" src="imgs/rope.png" alt="">
                        <h3><span class="txtRojo">Hit</span> training</h3>
                        <p>Entrenamiento cardiovascular de alta intencidad, 
                            se enfoca en realizar ráfagas cortas e intensas de ejercicio.</p>
                    </td>
                    <td>
                        <img class="img" src="imgs/box.png" alt="">
                        <h3><span class="txtRojo">Boxing</span> training</h3>
                        <p>Entrenamiento tradicional de box, desde principiantes hasta avanzados.</p>
                    </td>
                </tr>
            </table>
        </div>
    </section>

    <section id="contacto" class="contacto">
        <div class="contenido-section">
            <div class="title">
                <div class="info">
                    <span class="frase">¿Te interesa unirte al olimpo?</span>
                    <h2>Deja tu información y te contactaremos</h2>
                </div>
            </div>
            <form action="P_contacto.php" method="post">
                <div class="row">
                    <div class="column">
                        <input type="email" name="email" placeholder="Ingrese email">
                    </div>
                    <div class="column">
                        <input type="text" name="nombre" placeholder="Ingrese su nombre">
                    </div>
                </div>
                <div class="mensaje">
                    <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Ingrese su mensaje"></textarea>
                    <button type="submit">Enviar datos</button>
                </div> 
            </form>
            <div class="row-datos">
                <div class="column">
                    <i class="fa-solid fa-location-dot"></i> Av. Corrientes
                </div>
                <div class="column">
                    <i class="fa-solid fa-phone"></i> 961 - 142 - 9682
                </div>
                <div class="column">
                    <i class="fa-solid fa-clock"></i> Lunes a Domingo, 7:00 a.m. - 10:00 p.m. 
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="info">
            <p>2023 - <span class="txt">MONKEY GYM</span> Todos los derechos reservados  ||  MADE BY: DANIEL RIVERA</p>
            <div class="redes">
                <a href="https://www.facebook.com/drnx47?locale=es_LA"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/daniellxrv/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://w.app/NqidTL"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>