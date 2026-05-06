<?php
$host = "127.0.0.1";
$porta = 3310;
$banco = "livraria";
$usuario = "root";
$senha = "usbw";

try {
    $pdo = new PDO("mysql:host=$host;port=$porta;dbname=$banco;charset=utf8", $usuario, $senha, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ));
} catch (PDOException $e) {
    echo "<div style='font-family: Arial, sans-serif; padding: 20px;'>";
    echo "<h2 style='color: #c00;'>Erro de conexão com o banco de dados</h2>";
    echo "<p>Verifique se o serviço MySQL/MariaDB do USBWebserver está em execução.</p>";
    echo "<p>Porta: $porta | Host: $host</p>";
    echo "<p><strong>Detalhe:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "</div>";
    exit;
}
?>