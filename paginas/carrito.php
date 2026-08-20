<?php
session_start();

// Si llega un producto por POST lo agregamos al carrito
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["precio"])) {
    $producto = [
        "id" => $_POST["id"] ?? '',
        "nombre" => $_POST["nombre"] ?? '',
        "marca" => $_POST["marca"] ?? '',
        "talla" => $_POST["talla"] ?? '',
        "genero" => $_POST["genero"] ?? '',
        "color" => $_POST["color"] ?? '',
        "tipo" => $_POST["tipo"] ?? '',
        "precio" => floatval($_POST["precio"]),
        "imagen" => $_POST["imagen"] ?? ''
    ];
    $_SESSION["carrito"][] = $producto;
}

// Cargamos el carrito desde la sesión
$carrito = $_SESSION["carrito"] ?? [];

// Calculamos el total
$total = 0;
foreach ($carrito as $item) {
    $total += $item['precio'];
}
$_SESSION["total"] = $total;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="../CSS/TIENDAS.CSS"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Matangi:wght@300..900&family=Michroma&display=swap" rel="stylesheet">
</head>
<body>
    <h1>🛒 Carrito de Compras</h1>

    <?php if (empty($carrito)): ?>
        <p>El carrito está vacío.</p>
        <a href="productos.php" class="boton">Volver a productos</a>
    <?php else: ?>
        <div class="grid-productos">
            <?php foreach ($carrito as $item): ?>
                <div class="card-producto">
                    <img src="<?= htmlspecialchars($item["imagen"]) ?>" alt="<?= htmlspecialchars($item["nombre"]) ?>">
                    <h3><?= htmlspecialchars($item["nombre"]) ?></h3>
                    <p><strong>Marca:</strong> <?= htmlspecialchars($item["marca"]) ?></p>
                    <p><strong>Talla:</strong> <?= htmlspecialchars($item["talla"]) ?></p>
                    <p><strong>Género:</strong> <?= htmlspecialchars($item["genero"]) ?></p>
                    <p><strong>Color:</strong> <?= htmlspecialchars($item["color"]) ?></p>
                    <p><strong>Tipo:</strong> <?= htmlspecialchars($item["tipo"]) ?></p>
                    <p class="precio">$<?= number_format($item["precio"], 0, ',', '.') ?></p>

                    <!-- Botón para eliminar -->
                    <form action="eliminar_item.php" method="POST">
                        <input type="hidden" name="id" value="<?= htmlspecialchars($item["id"]) ?>">
                        <button type="submit">🗑️ Eliminar</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="resumen-compra">
            <p><strong>Total a pagar: $<?= number_format($total, 0, ',', '.') ?></strong></p>
            <form action="procesar_compra.php" method="POST">
                <a href="productos.php" class="boton">Volver</a>
                <button type="submit" class="boton-comprar">Proceder al pago</button>
            </form>
        </div>
    <?php endif; ?>
</body>
</html>
