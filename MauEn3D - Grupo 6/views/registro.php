<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - MauEn3D</title>
    <link rel="stylesheet" href="../css/registro.css">
</head>
<body>

<main>
   <h1>Registro</h1>

   <div class="registro">
      <div class="imagen">
         <img src="../img/imagen-ejemplo-registro_.png" alt="imagen ejemplo registro_">
      </div>
      
      <div class="form">
         <form action="../register_processor.php" method="post">
            <h2>Nombre de Usuario</h2>
            <input type="text" name="user">
            <h2>Email</h2>
            <input type="text" name="correo">
            <h2>Número de teléfono</h2>
            <input type="number" name="number">
            <h2>Contraseña</h2>
            <input type="password" name="contra1">
            <h2>Confrimar Contraseña</h2>
            <input type="password" name="contra2">
            <h2>DNI</h2>
            <input type="number" name="dni">
            <h2>Código Postal</h2>
            <input type="number">
            <br>
            <button type="submit" >Crear Cuenta</button>
         </form>
      </div>
   </div>
</main>

</body>
</html>