<?php
// estas 3 lineas son para habilitar dotenv
require("vendor/autoload.php");
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$mysql_host = $_ENV['MYSQL_HOST'];
$mysql_user = $_ENV['MYSQL_USER'];
$mysql_pass = $_ENV['MYSQL_PASS'];
$mysql_dbname = $_ENV['MYSQL_DBNAME'];

 $conn = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_dbname);
    if (!$conn){
        echo "Error: No se pudo conectar a MySQL.";
        echo "error: " . mysqli_connect_error();
        exit;
    }

?>