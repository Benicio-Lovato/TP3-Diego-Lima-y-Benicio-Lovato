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

    <?php include './header.php'; ?>

    <main>
        <h1>"Tu idea, en 3 dimensiones"</h1>

        <div class="arriba">
            <div class="carrusel">
                <img src="../img/lewzrhcy.jpg" class="active" alt="Imagen 1">
                <img src="../img/pato3d.jpeg" alt="Imagen 2">
                <img src="../img/instagram.png" alt="Imagen 3">

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