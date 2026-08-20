<?php

$host = getenv('DB_HOST') ?: 'localhost';
$user = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASSWORD') ?: '';
$database = getenv('DB_NAME') ?: 'shoestyle';

$conexion = new mysqli(
    $host,
    $user,
    $password,
    $database
);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8mb4");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$contrasena_hash = password_hash($contraseña, PASSWORD_DEFAULT);

$verificar = $conexion->prepare(
    "SELECT * FROM clientes WHERE usuario = ? OR email = ?"
);

$verificar->bind_param("ss", $usuario, $email);
$verificar->execute();

$resultado = $verificar->get_result();

if ($resultado->num_rows > 0) {

    echo "<script>alert('El nombre de usuario o correo ya está registrado.'); history.back();</script>";

} else {

    $stmt = $conexion->prepare(
        "INSERT INTO clientes (nombre, email, usuario, contrasena)
         VALUES (?, ?, ?, ?)"
    );

    $stmt->bind_param(
        "ssss",
        $nombre,
        $email,
        $usuario,
        $contrasena_hash
    );

    if ($stmt->execute()) {

        $stmt2 = $conexion->prepare(
            "INSERT INTO login (usuario, pass, rol)
             VALUES (?, ?, 'Usuario')"
        );

        $stmt2->bind_param("ss", $usuario, $contraseña);
        $stmt2->execute();
        $stmt2->close();

        echo "<script>
            alert('¡Registro exitoso!');
            window.location.href = '../paginas/inicio de sesion.html';
        </script>";

    } else {

        echo "Error al registrar: " . $stmt->error;
    }

    $stmt->close();
}

$verificar->close();
$conexion->close();

?>