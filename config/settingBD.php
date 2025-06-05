<?php
try {
    $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8mb4";
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,        // Manejo de errores con excepciones
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,   // Para obtener resultados como array asociativo
    ]);
    // echo "Conexión exitosa con PDO";
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
