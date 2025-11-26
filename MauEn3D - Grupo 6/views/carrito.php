<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Comprar - MauEn3D</title>
   <link rel="stylesheet" href="../css/carrito.css">
   <script src="../js/carrito.js" defer></script>
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
      <h1>Carrito de Compras</h1>

      <div class="compra">
         <div class="productos">
            <h2>Productos</h2>
            <div id="lista-carrito"></div>
            <div class="total">
               <h3>Total:</h3>
               <div class="precio">$$$$$$</div>
            </div>
         </div>

         <div class="medios">
            <h2>Medio de pago</h2>
            <button id="mp" class="btn-abrir" data-modal="mercado-pago"><img src="../img/simple-icons_mercadopago.png"
                  alt="mp logo">Mercado Pago</button>
            <button id="cre-deb" class="btn-abrir" data-modal="credito-o-debito"><img src="../img/visa-mastercard.jpg"
                  alt="visa/mastercard logo">Crédito o Débito</button>
            <button id="efe" class="btn-abrir" data-modal="efectivo"><img src="../img/vaadin_cash.png"
                  alt="efectivo logo">Efectivo</button>
            <button id="vaciar-carrito">Vaciar carrito</button>
                  
         </div>
      </div>
   </main>

   <dialog id="mercado-pago">
      <button id="btn-cerrar"></button>
      <p id="t-mercado-pago">Mercado Pago</p>
      <div id="centro-modal">
         <div class="izq-m2">
            <img src="../img/telefono-mercado-pago.png" alt="" id="telefono-de-mercado-pago">
            <div class="status">
               <img src="../img/status.png" alt="" id="img-debito-o-credito">
               <p>MauEn3D status</p>
            </div>
            <div class="status">
               <img src="../img/audiculares.png" alt="" id="img-debito-o-credito2">
               <p>Habla con soporte</p>
            </div>
         </div>
         <div class="der-m2">
            <p id="escanee-el-codigo">Escanee el codigo QR</p>
            <img src="../img/qr-mercado-pago.png" alt="" id="img-qr-mercado-pago">
         </div>
   </dialog>

   <dialog id="credito-o-debito">
      <button id="btn-cerrar"></button>
      <p id="t-credito-debito">Crédito o Débito</p>
      <div id="centro-modal">
         <div class="izq-m">
            <img src="../img/tarjeta-de-credito.png" alt="" id="tarjeta-de-credito">
            <div class="status">
               <img src="../img/status.png" alt="" id="img-debito-o-credito">
               <p>MauEn3D status</p>
            </div>
            <div class="status">
               <img src="../img/audiculares.png" alt="" id="img-debito-o-credito2">
               <p>Habla con soporte</p>
            </div>
         </div>
         <div class="der-m">
            <form action="">
            <p class="titulo-input-modal-2">Nombre completo</p>
            <input type="text" class="input-sesion">
            <p class="titulo-input-modal-2">Número de la tarjeta</p>
            <input type="password" class="input-sesion">
            <p class="titulo-input-modal-2">Código de seguridad</p>
            <input type="text" class="input-sesion">
            <p class="titulo-input-modal-2">Fecha de vencimiento</p>
            <input type="text" class="input-sesion">
            <button id="pagar-credito" type="button">Pagar</button>
            </form>
         </div>
   </dialog>

   <dialog id="efectivo">
      <button id="btn-cerrar"></button>
      <p id="t-efectivo">Efectivo</p>
      <div class="centrar-input-modal">
         <p class="titulo-input-modal-3">Dirección</p>
         <input type="text" class="input-sesion2">
      </div>
      <div id="centro-modal">
         <div class="izq-m3">
            <p class="titulo-input-modal-2">Codigo Postal</p>
            <input type="text" class="input-sesion">
            <p class="titulo-input-modal-2">Ciudad</p>
            <input type="text" class="input-sesion 2">
            <p class="titulo-input-modal-2">Departamento</p>
            <input type="text" class="input-sesion">
         </div>
         <div class="der-m3">
            <form action=""></form>
            <p class="titulo-input-modal-2">Provincia</p>
            <input type="text" class="input-sesion" value="Capital Federal" disabled>
            <p class="titulo-input-modal-2">Indicaciones</p>
            <input type="text" class="input-sesion 2">
            <p class="titulo-input-modal-2">Tipo de Domicilio</p>
            <input type="text" class="input-sesion">
         </div>
      </div>
      <div class="centrar-input-modal">
            <button id="pagar-efectivo" type="button">Realizar orden</button>
         </div>
   </dialog>
   <?php include './footer.php'; ?>
</body>

</html>
