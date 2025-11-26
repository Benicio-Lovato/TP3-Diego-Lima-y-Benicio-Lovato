<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - MauEn3D</title>
    <link rel="stylesheet" href="../css/productos-galeria.css">
    <link rel="icon" href="../img/iconoMauEn3D.jpg">
    <script src="../js/carrito.js" defer></script>
</head>
<body>
    
    <?php include './header.php'; ?>
    <main>
        <h1>Productos</h1>

        <div class="galeria">
            <div class="producto btn-abrir" data-modal="modal-de-producto1" id="producto1">
                <img src="../img/scooby3d.PNG" alt="Producto">
                <h2>Scooby</h2>
            </div>

            <div class="producto btn-abrir" data-modal="modal-de-producto2" id="producto2">
                <img src="../img/lewzrhcy.jpg" alt="Producto">
                <h2>Base de Defensa</h2>
            </div>

            <div class="producto btn-abrir" data-modal="modal-de-producto3" id="producto3">
                <img src="../img/pato3d.jpeg" alt="Producto">
                <h2>Pato</h2>
            </div>

            <div class="producto btn-abrir" data-modal="modal-de-producto4" id="producto4">
                <img src="../img/sonic3d.PNG" alt="Producto">
                <h2>Sonic</h2>
            </div>
        </div>
        <button><a href="./productos-galeria2.php"><span>></span></a></button>
    </main>

    <dialog id="modal-de-producto1">
        <button id="btn-cerrar"></button>
        <div id="contenedor-de-producto">
            <div id="izq">

                <div class="imagen">
                    <img src="../img/scooby3d.PNG" alt="Producto">
                </div>

                <h1>Scooby</h1>

                <div class="boton">
                    <div class="precio">
                        <span>$9000</span>
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
                    <p>Este modelo 3D recrea a Scooby-Doo con un estilo renovado y encantador, vestido con un buzo celeste que le da un toque moderno y divertido. Su expresión amistosa y los detalles cuidadosamente modelados lo convierten en una pieza ideal para coleccionistas, decoración, impresión 3D o proyectos de animación. La combinación entre el clásico personaje y la ropa casual crea una versión única y perfecta para fans de todas las edades.</p>
                </div>

                
                    <button class="carrito">Añadir al carrito</button>
            </div>
        </div>
    </dialog>

    <dialog id="modal-de-producto2">
        <button id="btn-cerrar"></button>
        <div id="contenedor-de-producto">
            <div id="izq">

                <div class="imagen">
                    <img src="../img/lewzrhcy.jpg" alt="Producto">
                </div>

                <h1>Base de Defensa</h1>

                <div class="boton">
                    <div class="precio">
                        <span>$5000</span>
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
                    <p>Este modelo 3D representa una base de defensa de torre baja fabricada en polietileno, diseñada para ofrecer resistencia, estabilidad y durabilidad. Su estructura compacta y reforzada permite soportar cargas y condiciones exigentes, mientras que su geometría optimizada facilita la integración con otros componentes o módulos defensivos. Ideal para proyectos industriales, diseños funcionales, prototipado, simulaciones o impresión 3D con fines estructurales.</p>
                </div>

                
                    <button class="carrito">Añadir al carrito</button>
            </div>
        </div>
    </dialog>

    <dialog id="modal-de-producto3">
        <button id="btn-cerrar"></button>
        <div id="contenedor-de-producto">
            <div id="izq">

                <div class="imagen">
                     <img src="../img/pato3d.jpeg" alt="Producto">
                </div>

                <h1>Pato</h1>

                <div class="boton">
                    <div class="precio">
                        <span>$5500</span>
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
                    <p>Este encantador diseño 3D de pato navideño combina humor y espíritu festivo en una pieza única. Con su gorrito de Navidad, detalles cuidados y una expresión simpática, es ideal para decoraciones, regalos personalizados, impresión 3D o coleccionistas que buscan algo tierno y temático. Su estilo alegre y colorido lo convierte en el complemento perfecto para la temporada navideña.</p>
                </div>

                
                    <button class="carrito">Añadir al carrito</button>
            </div>
        </div>
    </dialog>

    <dialog id="modal-de-producto4">
        <button id="btn-cerrar"></button>
        <div id="contenedor-de-producto">
            <div id="izq">

                <div class="imagen">
                    <img src="../img/sonic3d.PNG" alt="Producto">
                </div>

                <h1>Sonic</h1>

                <div class="boton">
                    <div class="precio">
                        <span>$4500</span>
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
                    <p>Este diseño 3D de Sonic the Hedgehog captura a la perfección la velocidad, energía y actitud del icónico héroe azul. Modelado con detalles nítidos y una estética fiel al personaje original, es ideal para impresiones 3D, proyectos de animación, coleccionistas o como pieza decorativa única. Su postura dinámica y su acabado estilizado aseguran un resultado visual impactante en cualquier formato.</p>
                </div>

                
                    <button class="carrito">Añadir al carrito</button>
            </div>
        </div>
    </dialog>

    <?php include './footer.php'; ?>
</body>
</html>