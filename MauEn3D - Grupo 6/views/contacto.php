<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - MauEn3D</title>
    <link rel="stylesheet" href="../css/contacto.css">
    <link rel="icon" href="../img/iconoMauEn3D.jpg">
</head>
<body>
    <head>
    <link rel="stylesheet" href="../css/header.css">
    <script src="../js/script.js" defer></script>
    </head>
    <header>
        <div id="antesDelNav">

        </div>
        <nav>
            <ul>
                <li><a href="carrito.php"><div id="circulo-carrito"><img src="../img/mdi_cart-outline.png" alt="carrito logo"></div></a></li>
                <li><img src="../img/material-symbols_home-outline-rounded.png" alt="inicio logo"><a href="./index.php"><p>Inicio</p></a></li>
                <li><img src="../img/icon-park-outline_ad-product.png" alt="productos logo"><a href="./productos-galeria.php"><p>Productos</p></a></li>
                <li><img src="../img/ic_baseline-phone.png" alt="contacto logo"><a href="./contacto.php"><p>Contacto</p></a></li>
                <li><img src="../img/material-symbols_login-rounded.png" alt="iniciar sesion logo"><button class="btn-abrir" data-modal="inicio-sesion">iniciar sesion</button></li>
            </ul>


            <dialog id="inicio-sesion">
                <button id="btn-cerrar"></button>
                <p id="t-inicio">Inicio de sesión</p>
                <div id="centro-modal">
                    <div class="izq-m">
                        <img src="../img/candado.png" alt="" id="candado">
                        <div class="olvidaste">
                        <img src="../img/olvidaste.png" alt=""><p>¿Olvidaste tu contraseña?</p>
                        </div>
                        <div class="olvidaste">
                        <img src="../img/soporte.png" alt=""><p>Habla con soporte</p>
                        </div>
                    </div>
                    <div class="der-m">
                        <form action="../login_processor.php" method="post">
                        <p class="titulo-input-modal">Email</p>
                        <input type="text" class="input-sesion" name="correo">
                        <p class="titulo-input-modal">Contraseña</p>
                        <input type="password" class="input-sesion" name="contra">
                        <button type="submit" id="ingresar">Ingresar</button>
                        </form>

                        <button id="google"><img src="../img/google.png" alt=""><p id="Inicia-sesion">Inicia sesión con Google</p></button>
                        <p id="no-tienes-cuenta"> ¿No tienes una cuenta?</p>
                        <button id="registrarse-boton"> <a href="registro.php">Registrate</a></button>
                    </div>
                </div>
                
            </dialog>
        </nav>

        <div id="titulo">
            <img src="../img/MauEn3D.png" alt="Logo MauEn3D">
        </div>
            
    </header>
    <main>
        <h1>Contacto</h1>
        <div class="medios">
            <div class="medio">
                <img src="../img/instagram.png" alt="Instagram Icon">
                <p>@mau_en_3d</p>
            </div>
            <div class="medio">
                <img src="../img/whatsapp.png" alt="WhatsApp Icon">
                <p>+54 9 11 1234 5678</p>
            </div>
            <div class="medio">
                <img src="../img/email.png" alt="Email Icon">
                <p>emailreal@email.com</p>
            </div>
        </div>
    </main>
    <?php include './footer.php'; ?>
</body>
</html>