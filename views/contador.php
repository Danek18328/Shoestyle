<?php

$servername = getenv('DB_HOST') ?: 'localhost';
$username = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASSWORD') ?: '';
$dbname = getenv('VISITAS_DB_NAME') ?: 'visitas';

$conn = new mysqli(
    $servername,
    $username,
    $password,
    $dbname
);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

$ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';

$stmt = $conn->prepare("INSERT INTO contador (ip) VALUES (?)");
$stmt->bind_param("s", $ip);
$stmt->execute();
$stmt->close();

$result = $conn->query("SELECT COUNT(*) AS total FROM contador");
$row = $result->fetch_assoc();

$total_visitas = $row['total'];

echo "<p>Total de visitas: <strong>$total_visitas</strong></p>";

$conn->close();

?>