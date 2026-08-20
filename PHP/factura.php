<?php
session_start();
include("conexion.php"); // Asegúrate de tener este archivo con la conexión

// Datos del formulario
$cliente = $_POST['cliente'] ?? 'Cliente no registrado';
$monto   = $_POST['monto'] ?? 0;

// Carrito desde la sesión
$carrito = $_SESSION['carrito'] ?? [];

// Guardar en la base de datos
$sql = "INSERT INTO ventas (fecha, cliente, monto) VALUES (NOW(), ?, ?)";
$stmt = $conexion->prepare($sql);

if ($stmt === false) {
    die("Error al preparar la consulta: " . $conexion->error);
}

$stmt->bind_param("sd", $cliente, $monto);

if (!$stmt->execute()) {
    die("Error al ejecutar la consulta: " . $stmt->error);
}

$stmt->close();
$conexion->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Factura</title>

<style>
  body {
    margin: 0;
    min-height: 100vh;

    font-family: "Arial", sans-serif;
    color: #ffffff;

    /* fondo oscuro premium */
    background: linear-gradient(
      135deg,
      #050505,
      #111111,
      #1a1a1a,
      #2a0000
    );

    background-attachment: fixed;
  }

  button {
    font-size: 15px;

    background: linear-gradient(
      135deg,
      #5c0000,
      #a20000,
      #ff2b2b
    );

    color: #ffffff;

    border: none;
    padding: 12px 18px;

    border-radius: 20px;

    cursor: pointer;

    text-decoration: none;
    font-family: "Michroma", sans-serif;

    transition: all 0.3s ease;

    box-shadow:
      0 0 15px rgba(162, 0, 0, 0.4);
  }

  button:hover {
    transform: scale(1.05);

    box-shadow:
      0 0 25px rgba(255, 0, 0, 0.6);
  }

  .contenedor {
    background: rgba(25, 25, 25, 0.75);

    width: 80%;
    max-width: 700px;

    margin: 40px auto;
    padding: 25px;

    border-radius: 20px;

    backdrop-filter: blur(10px);

    border: 1px solid rgba(255,255,255,0.05);

    box-shadow:
      0 0 30px rgba(0,0,0,0.5);
  }

  </style>
</head>
<body>
  <div class="contenedor">
    <h2>Factura de Compra</h2>
    <p><strong>Cliente:</strong> <?= htmlspecialchars($cliente) ?></p>

    <h3>Productos comprados:</h3>
    <ul>
      <?php if (!empty($carrito)): ?>
        <?php foreach ($carrito as $item): ?>
          <li><?= $item['nombre'] ?> - $<?= number_format($item['precio'], 0, ',', '.') ?></li>
        <?php endforeach; ?>
      <?php else: ?>
        <li>No hay productos en el carrito.</li>
      <?php endif; ?>
    </ul>

    <p><strong>Total pagado: $<?= number_format($monto, 0, ',', '.') ?></strong></p>

    <button onclick="window.print()">Imprimir Factura</button>
    <a href="../index.php"><button type="button">Volver a la tienda</button></a>
  </div>
</body>
<?php
// Vaciar carrito después de mostrar la factura
$_SESSION["carrito"] = [];
?>
</html>
