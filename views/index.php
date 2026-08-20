<?php
include "../PHP/conexion.php";
$result = $conexion->query("SELECT * FROM empleados");
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD de Empleados</title>
    <link rel="stylesheet" href="../CSS/empleados.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Matangi:wght@300..900&family=Michroma&display=swap" rel="stylesheet">
</head>
<body>
    <div class="panel">
        <a href="../views/crear.php">Agregar Empleado</a>
    </div>
    <div class="tabla">
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cargo</th>
                <th>Salario</th>
                <th>Acciones</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nombre'] ?></td>
                    <td><?= $row['cargo'] ?></td>
                    <td><?= $row['salario'] ?></td>
                    <td>
                        <a href="actualizar.php?id=<?= $row['id'] ?>">Editar</a>
                        <a href="../php/eliminar_empleados.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Seguro?')">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <?php include "contador.php"; ?>
    <a href="../PHP/exportar_pdf.php" target="_blank">Exportar a PDF</a>
    <a href="../PHP/pag_admin.php" >Volver</a>

</body>
</html>
