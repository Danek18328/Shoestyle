<?php
include 'conexion.php';
$resultado = $conexion->query("SELECT * FROM ventas");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Historial de Ventas</title>
  <link rel="stylesheet" href="../CSS/VENTASS.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Matangi:wght@300..900&family=Michroma&display=swap" rel="stylesheet">
</head>
<body>

<h2> Historial de Ventas</h2>
<table>
  <tr>
    <th>ID</th>
    <th>Fecha</th>
    <th>Cliente</th>
    <th>Monto ($)</th>
  </tr>
  <?php while ($row = $resultado->fetch_assoc()): ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['fecha'] ?></td>
      <td><?= $row['cliente'] ?></td>
      <td>$<?= number_format($row['monto']) ?></td>
    </tr>
  <?php endwhile; ?>
</table>
    <button><a href="../php/exportar_ventas.php" class="boton" target="_blank">Exportar a PDF</a></button>
    <button><a href="../PHP/pag_admin.php" class="boton">Volver</a></button>
</body>
</html>