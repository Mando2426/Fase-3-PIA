<?php
include('../BDConexion/conexion.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_reserva = $_POST['id_reserva'];
    $fecha_llegada = $_POST['fecha_llegada'];
    $fecha_salida = $_POST['fecha_salida'];
    $total_pagado = $_POST['total_pagado'];

    $sql_verificar = "SELECT * FROM reservas WHERE fecha_llegada <= '$fecha_salida' AND fecha_salida >= '$fecha_llegada' AND id != '$id_reserva'";
    $resultado_verificar = $conexion->query($sql_verificar);

    if ($resultado_verificar->num_rows == 0) {
        $sql_update = "UPDATE reservas SET fecha_llegada='$fecha_llegada', fecha_salida='$fecha_salida', total_pagado='$total_pagado' WHERE id='$id_reserva'";
        if ($conexion->query($sql_update) === TRUE) {
            echo "<script>alert('Los cambios se han guardado correctamente'); window.location.href='CRUD_Reservas.php';</script>";
        } else {
            echo "<script>alert('Error al actualizar la reserva'); window.location.href='CRUD_Reservas.php';</script>";
        }
    } else {
        echo "<script>alert('Lo sentimos, las fechas seleccionadas están ocupadas.'); window.history.back();</script>";
    }
}
?>