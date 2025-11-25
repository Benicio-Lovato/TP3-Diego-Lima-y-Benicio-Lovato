<?php
session_start();

require_once 'include/database.php';

/* if (!isset($_POST['correo'])) {
    header("Location: index.php");
    exit();
}
 */

$correo = $conexion->real_escape_string($_POST["correo"]);
$password = $conexion->real_escape_string($_POST["contra"]);

$sql = "SELECT idUser, email,num,password,DNI FROM user WHERE email='$correo' AND password='$password'";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();
    $_SESSION['username'] = $usuario['userName'];
    echo "<script>alert('Credenciales correctas'); window.history.back();</script>";
    exit;
    exit();
    
} else {
    echo "<script>alert('Credenciales incorrectas'); window.history.back();</script>";
    exit;
    exit();
}
?>