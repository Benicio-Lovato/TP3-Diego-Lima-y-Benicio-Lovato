<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - MauEn3D</title>
    <link rel="stylesheet" href="../css/carrito.css">
    <script src="../js/script.js" defer></script>
</head>
<body>

<?php include './header.php'; ?>

<main>
   <h1>Carrito de Compras</h1>

   <div class="compra">
      <div class="productos">
         <h2>Productos</h2>
         <!-- <div class="carrito">Aca va el carrito en JS</div> -->
         <div class="total">
            <h3>Total:</h3> <div class="precio">$$$$$$</div>
         </div>
      </div>
      
      <div class="medios">
         <h2>Medio de pago</h2>
         <button id="mp"><img src="../img/simple-icons_mercadopago.png" alt="mp logo">Mercado Pago</button>
         <button id="cre-deb" class="btn-abrir" data-modal="inicio-sesion"><img src="../img/visa-mastercard.jpg" alt="visa/mastercard logo">Crédito o Débito</button>
         <button id="efe" ><img src="../img/vaadin_cash.png" alt="efectivo logo">Efectivo</button>
      </div>                        
   </div>
</main>
<dialog id="inicio-sesion">
         <button id="btn-cerrar"></button>
         <p id="t-inicio">Inicio de sesión</p>
         <div id="centro-modal">
             <div id="izq-m">
                 <img src="../img/tarjeta-de-credito.png" alt="" id="tarjeta-de-credito">
                 <div class="olvidaste">
                 <img src="../img/olvidaste.png" alt=""><p>¿Olvidaste tu contraseña?</p>
                 </div>
                 <div class="olvidaste">
                 <img src="../img/soporte.png" alt=""><p>Habla con soporte</p>
                 </div>
             </div>
             <div id="der-m">
                 <form action=""></form>
                 <p class="titulo-input-modal">Email / Número de Telefono</p>
                 <input type="text" class="input-sesion">
                 <p class="titulo-input-modal">Contraseña</p>
                 <input type="password" class="input-sesion">
                 <button id="ingresar">Ingresar</button>
                 <button id="google"><img src="../img/google.png" alt=""><p id="Inicia-sesion">Inicia sesión con Google</p></button>
                 <p id="no-tienes-cuenta"> ¿No tienes una cuenta?</p>
                 <button id="registrarse-boton"> <a href="registro.html">Registrate</a></button>
             </div>
         </div>      
      </dialog>

</body>
</html>