<?php
include('conexion.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $telefono = $_POST["telefono"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); 

    $sql = "INSERT INTO clientes (Nombre, Apellido_P, Apellido_M, Correo, Contraseña, Telefono, Fecha_nac, ID_Rol) 
            VALUES ('$email', '$nombre', '$apellidos', '$fecha_nacimiento', '$telefono', '$password')";

    if ($conexion->query($sql) === TRUE) {
        $mensaje = "Cliente agregado correctamente";
    } else {
        $mensaje = "Error al agregar cliente";
    }

    header("Location: AgregarCliente.php?mensaje=" . urlencode($mensaje));
    exit();
}
?>