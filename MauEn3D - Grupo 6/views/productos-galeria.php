<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - MauEn3D</title>
    <link rel="stylesheet" href="../css/productos-galeria.css">
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
                <h2>Lewzrhcy</h2>
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

    <dialog id="modal-de-producto2">
        <button id="btn-cerrar"></button>
        <div id="contenedor-de-producto">
            <div id="izq">

                <div class="imagen">
                    <img src="../img/lewzrhcy.jpg" alt="Producto">
                </div>

                <h1>Lewzrhcy</h1>

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

    <?php include './footer.php'; ?>
</body>
</html>