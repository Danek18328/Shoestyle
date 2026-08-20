<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["id"])) {
    $idEliminar = $_POST["id"];

    if (isset($_SESSION["carrito"])) {
        foreach ($_SESSION["carrito"] as $index => $item) {
            if ($item["id"] == $idEliminar) {
                unset($_SESSION["carrito"][$index]); // Eliminar el producto
                break;
            }
        }
        // Reindexar el array para evitar huecos
        $_SESSION["carrito"] = array_values($_SESSION["carrito"]);
    }
}

// Volvemos al carrito
header("Location: carrito.php");
exit;

