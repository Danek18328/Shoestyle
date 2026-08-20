<?php
include '../PHP/conexion.php';

$id = $_GET['id'];
$zapato = $conexion->query("SELECT * FROM zapatos WHERE id=$id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $talla = $_POST['talla'];
    $genero = $_POST['genero'];
    $color = $_POST['color'];
    $tipo = $_POST['tipo'];
    $precio = $_POST['precio'];
    $imagen = $zapato['imagen'];

    if (!empty($_FILES['imagen']['name'])) {
        $nombreImagen = $_FILES['imagen']['name'];
        $rutaTemporal = $_FILES['imagen']['tmp_name'];
        $imagen = "uploads/" . $nombreImagen;
        move_uploaded_file($rutaTemporal, $imagen);
    }

    $query = "UPDATE zapatos SET nombre='$nombre', marca='$marca', talla='$talla', genero='$genero', color='$color', tipo='$tipo', imagen='$imagen', precio='$precio' WHERE id=$id";

    if ($conexion->query($query)) {
        echo "Zapato actualizado correctamente.";
        header("Location: pag_admin.php");
    } else {
        echo "Error: " . $conexion->error;
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    <input type="text" name="nombre" value="<?= $zapato['nombre'] ?>" required>
    <input type="text" name="marca" value="<?= $zapato['marca'] ?>" required>
    <input type="text" name="talla" value="<?= $zapato['talla'] ?>" required>
    <input type="text" name="genero" value="<?= $zapato['genero'] ?>" required>
    <input type="text" name="color" value="<?= $zapato['color'] ?>" required>
    <input type="text" name="tipo" value="<?= $zapato['tipo'] ?>" required>
    <input type="text" name="precio" value="<?= $zapato['precio'] ?>" required>
    <input type="file" name="imagen">
    <button type="submit">Actualizar</button>
</form>
