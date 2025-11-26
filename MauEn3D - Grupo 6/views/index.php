<?php
if (isset($_GET['registration_existed'])) {
    if ($_GET['registration_existed'] === 'true') {
        echo "<script>alert('DNI,correo o contraseña ya existentes'); window.history.back();</script>";
    }
}
if (isset($_GET['registration_success'])) {
    if ($_GET['registration_success'] === 'true') {
        echo "<script>alert('Creación de usuario exitosa');</script>";
    } else {
        echo "<script>alert('Error al crear usuario');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - MauEn3D</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
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
        <h1>"Tu idea, en 3 dimensiones"</h1>

        <div class="arriba">
            <div class="carrusel">
                <a href="./productos-galeria.php"><img src="../img/lewzrhcy.jpg" class="active" alt="Imagen 1"></a>
                <a href="./productos-galeria.php"><img src="../img/pato3d.jpeg" alt="Imagen 2"></a>
                <a href="./productos-galeria.php"><img src="../img/gizmo.png" alt="Imagen 3"></a>


                <button class="boton prev">&#10094;</button>
                <button class="boton next">&#10095;</button>

                <div class="indicadores">
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div class="desc">
                <p>Bienvenido a nuestra tienda de diseños 3D, donde tus ideas toman forma con precisión y creatividad. Aquí vas a encontrar modelos listos para usar, creados por diseñadores profesionales y optimizados para impresión 3D, visualización, animación o proyectos técnicos. Navegá por nuestras categorías y descubrí piezas únicas pensadas para simplificar tu trabajo y potenciar tu imaginación.</p>
            </div>
        </div>
        
        <div class="abajo">
            <p>Cada diseño disponible fue desarrollado con altos estándares de calidad, archivos listos para descargar y soporte personalizado para tus proyectos. Si necesitás algo específico, también ofrecemos servicios de modelado a medida para que obtengas exactamente lo que estás buscando. Comprá de forma rápida, segura y llevate modelos 3D que marcan la diferencia en cualquier proyecto.</p>
        </div>
    </main>

    <script src="../js/script.js"></script>
</body>

<?php include './footer.php'; ?>
</html>