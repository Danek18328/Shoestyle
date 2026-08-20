<?php include '../PHP/conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD de Zapatos</title>
    <link rel="stylesheet" href="../CSS/ADMINN.CSS">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Matangi:wght@300..900&family=Michroma&display=swap" rel="stylesheet">
</head>

<body>
    <h1>Zapatos registrados</h1>
    <a href="../PHP/crear.php" class="btn">Agregar nuevo zapato</a>
    <a href= "../index.php" class="btn">volver</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Talla</th>
                <th>Género</th>
                <th>Color</th>
                <th>Tipo</th>
                <th>precio</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $resultado = $conexion->query("SELECT * FROM zapatos");
            while ($fila = $resultado->fetch_assoc()):
            ?>
                <tr>
                    <td><?= $fila['id'] ?></td>
                    <td><?= $fila['nombre'] ?></td>
                    <td><?= $fila['marca'] ?></td>
                    <td><?= $fila['talla'] ?></td>
                    <td><?= $fila['genero'] ?></td>
                    <td><?= $fila['color'] ?></td>
                    <td><?= $fila['tipo'] ?></td>
                    <td><?= $fila['precio'] ?></td>

                    <td><img src="<?= $fila['imagen'] ?>" alt="Imagen"></td>
                    <td class="acciones">
                        <a href="../PHP/actualizar.php?id=<?= $fila['id'] ?>" class="editar">Editar</a>
                        <a href="../PHP/eliminar.php?id=<?= $fila['id'] ?>" class="eliminar" onclick="return confirm('¿Estás seguro de eliminar este zapato?')">Eliminar</a>
            
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
     <?php include "../views/contador.php"; ?>
    <a href="../PHP/exportar_productos.php" class="btn" target="_blank">Exportar a PDF</a>

	<a href="../views/index.php" class="btn">Empleados</a>
    <a href="../PHP/ventas.php" class="btn">ventas</a>
    <a href="../fiscales_y_parafiscales/index.html" class="btn">Liquidaciones</a>


</body>
</html>