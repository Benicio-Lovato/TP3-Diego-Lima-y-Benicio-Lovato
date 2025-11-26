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
                <img src="../img/chucky.PNG" alt="Producto">
                <h2>Chucky</h2>
            </div>

            <div class="producto btn-abrir" data-modal="modal-de-producto2" id="producto2">
                <img src="../img/gato.PNG" alt="Producto">
                <h2>Gato con capucha</h2>
            </div>

            <div class="producto btn-abrir" data-modal="modal-de-producto3" id="producto3">
                <img src="../img/gizmo.PNG" alt="Producto">
                <h2>Gizmo</h2>
            </div>

            <div class="producto btn-abrir" data-modal="modal-de-producto4" id="producto4">
                <img src="../img/tiburon.PNG" alt="Producto">
                <h2>Tiburón esqueleto</h2>
            </div>
        </div>
        <button><a href="./productos-galeria.php"><span><</span></a></button>
    </main>

    <dialog id="modal-de-producto1">
        <button id="btn-cerrar"></button>
        <div id="contenedor-de-producto">
            <div id="izq">

                <div class="imagen">
                    <img src="../img/chucky.PNG" alt="Producto">
                </div>

                <h1>Chucky<h1>

                <div class="boton">
                    <div class="precio">
                        <span>$8000</span>
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
                    <p>Este diseño 3D captura a la perfección la esencia inquietante de Chucky, el icónico muñeco diabólico del cine de terror. Con detalles precisos en su rostro, su ropa clásica y su expresión perturbadora, este modelo ofrece una estética realista y fiel al personaje original. Es perfecto para coleccionistas, proyectos temáticos de terror, decoración, impresiones 3D o como pieza destacada en cualquier contenido relacionado con el género horror.</p>
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
                    <img src="../img/gato.PNG" alt="Producto">
                </div>

                <h1>Gato con capucha</h1>

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
                    <p>Este adorable modelo 3D muestra a un gato con capucha, combinando ternura y estilo urbano en una pieza única. El diseño destaca por sus rasgos expresivos, la textura suave del abrigo y una pose que transmite personalidad y simpatía. Ideal para decoración, coleccionistas, impresión 3D, proyectos de animación o contenido estético moderno.</p>
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
                    <img src="../img/gizmo.PNG" alt="Producto">
                </div>

                <h1>Gizmo</h1>

                <div class="boton">
                    <div class="precio">
                        <span>$4000</span>
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
                    <p>Este modelo 3D recrea a Gizmo, el querido Mogwai de la saga Gremlins, con un nivel de detalle que resalta su ternura característica. Sus grandes ojos expresivos, orejas suaves y postura amigable hacen que sea una pieza ideal para coleccionistas, fanáticos del cine, impresión 3D, decoración temática o proyectos de animación.</p>
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
                    <img src="../img/tiburon.PNG" alt="Producto">
                </div>

                <h1>Tiburón esqueleto</h1>

                <div class="boton">
                    <div class="precio">
                        <span>$3500</span>
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
                    <p>Este impresionante modelo 3D representa un tiburón esqueleto articulado, diseñado con huesos estilizados y un sistema de uniones que permite mover distintas partes del cuerpo. Su estructura detallada combina estética fosilizada con un toque mecánico, creando una pieza llamativa y dinámica.</p>
                </div>

                
                    <button class="carrito">Añadir al carrito</button>
            </div>
        </div>
    </dialog>

    <?php include './footer.php'; ?>
</body>
</html>