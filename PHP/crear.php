<?php
include '../PHP/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $talla = $_POST['talla'];
    $genero = $_POST['genero'];
    $color = $_POST['color'];
    $tipo = $_POST['tipo'];
    $precio = $_POST['precio'];
    $nombreImagen = $_FILES['imagen']['name'];
    $rutaTemporal = $_FILES['imagen']['tmp_name'];
    $carpetaDestino = "uploads/" . $nombreImagen;

    if (move_uploaded_file($rutaTemporal, $carpetaDestino)) {
        $query = "INSERT INTO zapatos (nombre, marca, talla, genero, color, tipo, imagen, precio)
                  VALUES ('$nombre', '$marca', '$talla', '$genero', '$color', '$tipo', '$carpetaDestino', '$precio')";

        if ($conexion->query($query)) {

            header("Location: ../PHP/pag_admin.php");
            echo "Zapato creado correctamente.";
        } else {
            echo "Error: " . $conexion->error;
        }
    } else {
        echo "Error al subir la imagen.";
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="marca" placeholder="Marca" required>
    <input type="text" name="talla" placeholder="Talla" required>
    <input type="text" name="genero" placeholder="Género" required>
    <input type="text" name="color" placeholder="Color" required>
    <input type="text" name="tipo" placeholder="Tipo" required>
    <input type="text" name="precio" placeholder="precio" required>
    <input type="file" name="imagen" required>
    <button type="submit">Guardar Zapato</button>
</form>
