<?php
session_start();
include("conexion.php");

$id_cliente = $_GET['id'];
$query = "SELECT * FROM clientes WHERE id = $id_cliente";
$resultado = $conexion->query($query);
$cliente = $resultado->fetch_assoc();
?>
