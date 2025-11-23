<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto - MauEn3D</title>
    <link rel="stylesheet" href="../css/producto.css">
    <script src="../js/script.js" defer></script>
</head>
<body>
    <button id="cre-deb" class="btn-abrir" data-modal="modal-de-producto"><img src="../img/visa-mastercard.jpg"
                  alt="visa/mastercard logo">Crédito o Débito</button>
    <dialog id="modal-de-producto">
        <button id="btn-cerrar"></button>
    <div id="contenedor-de-producto">
        <div id="izq">

            <div class="imagen">
                <img src="../img/imagen-ejemplo.PNG" alt="Producto">
            </div>

            <h1>Producto</h1>

            <div class="boton">
                <div class="precio">
                    <span>Precio</span>
                </div>

                <div class="contador">
                    <button><span><</span></button>
                    <span>0</span>
                    <button><span>></span></button>
                </div>
            </div>
        </div>

        <div id="der">

            <div class="descripcion">
                <h2>Descripción</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non iure blanditiis eum, illum in id perspiciatis cumque laboriosam quis, reiciendis porro laudantium temporibus maxime. Labore ex accusantium corrupti harum commodi.</p>
            </div>

            
                <button class="carrito">Añadir al carrito</button>
        </div>
    </div>
    </dialog>

</body>
</html>
