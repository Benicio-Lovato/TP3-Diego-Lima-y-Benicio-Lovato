<?php
session_start();

require_once 'include/database.php';

/* if (!isset($_POST['correo'])) {
    header("Location: index.php");
    exit();
}
 */
$userName = $conexion->real_escape_string($_POST["user"]);
$correo = $conexion->real_escape_string($_POST["correo"]);
$number = $conexion->real_escape_string($_POST["number"]);
$password1 = $conexion->real_escape_string($_POST["contra1"]);
$password2 = $conexion->real_escape_string($_POST["contra2"]);
$dni = $conexion->real_escape_string($_POST["dni"]);

if($password1 !== $password2){
    echo "<script>alert('las contraseñas no son las mismas'); window.history.back();</script>";
    exit;
    exit();
}

$sql_check = "SELECT idUser FROM user WHERE DNI = '$dni' OR email = '$correo' OR userName = '$userName'";
$result_check = $conexion->query($sql_check);

if ($result_check->num_rows > 0) {
        header("Location: views/index.php?registration_existed=true");
        exit();
}

$sql = "INSERT INTO user (email, num, password, DNI, userName) 
            VALUES ('$correo', '$number', '$password1','$dni','$userName')";

    if ($conexion->query($sql)) {
        header("Location: views/index.php?registration_success=true");
        exit();
        
    } else {
        header("Location: views/index.php?registration_success=false");
        exit();
    }

?>