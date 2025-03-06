<?php 
    require_once 'config.php';
    loadEnv(); // Cargar variables de entorno

    try {
        $dsn = "mysql:host=" . getenv('DB_HOST') . ";dbname=" . getenv('DB_NAME') . ";charset=" . getenv('DB_CHARSET');
        $pdo = new PDO($dsn, getenv('DB_USER'), getenv('DB_PASS'), [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]);

    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
?>
