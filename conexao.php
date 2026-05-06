<?php
$host = "localhost";
$banco = "livraria";
$usuario = "root";
$senha = "usbw";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$banco",$usuario,$senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
?>