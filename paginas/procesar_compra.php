<?php
session_start();


$total = $_SESSION['total'] ?? 0;





?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de Tarjeta</title>
  <link rel="stylesheet" href="../CSS/PROCESAR.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Matangi:wght@300..900&family=Michroma&display=swap" rel="stylesheet">
</head>
<body>
<div class="contenedor">
  <form class="form" action="../PHP/factura.php" method="POST">

    <h2>Pago con Tarjeta</h2>

    <input type="text" name="cliente" placeholder="Nombre del cliente" required>
    

    <input type="number" name="monto" value="<?= $total ?>" required>

    <input type="text" placeholder="Número de Tarjeta (simulado)" required>
    <input type="text" placeholder="MM/AA" required>
    <input type="password" placeholder="CVV" required>

    <p><strong>Total a pagar: $<?= number_format($total, 0, ',', '.') ?></strong></p>

    <button type="submit">Pagar y Registrar</button>
    <button><a href="../paginas/carrito.php">Volver</a></button>
  </form>
</div>
</body>
</html>
