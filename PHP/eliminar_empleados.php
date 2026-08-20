<?php
include '../PHP/conexion.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // seguridad

    $sql = "DELETE FROM empleados WHERE id = $id";

    if ($conexion->query($sql)) {
        header("Location: ../views/index.php"); // vuelve a la lista de empleados
        exit();
    } else {
        echo "Error: " . $conexion->error;
    }
}
?>
