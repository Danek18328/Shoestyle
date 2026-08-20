<?php
include '../PHP/conexion.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // seguridad
    $sql = "DELETE FROM zapatos WHERE id = $id";

    if ($conexion->query($sql)) {
        header("Location: ../PHP/pag_admin.php"); // vuelve a zapatos
        exit();
    } else {
        echo "Error: " . $conexion->error;
    }
}
?>
