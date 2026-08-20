<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Empleado</title>
</head>
<body>
    <form action="../php/procesar.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="cargo" placeholder="Cargo" required>
        <input type="number" name="salario" placeholder="Salario" required>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
