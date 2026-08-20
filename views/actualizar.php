<?php
include "../php/conexion.php";
$id = $_GET['id'];
$result = $conexion->query("SELECT * FROM empleados WHERE id=$id");
$empleado = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Empleado</title>
</head>
<body>
    <form action="../php/guardar_cambios.php" method="post">
        <input type="hidden" name="id" value="<?= $empleado['id'] ?>">
        <input type="text" name="nombre" value="<?= $empleado['nombre'] ?>" required>
        <input type="text" name="cargo" value="<?= $empleado['cargo'] ?>" required>
        <input type="number" name="salario" value="<?= $empleado['salario'] ?>" required>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
