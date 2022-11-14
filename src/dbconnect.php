<?php 
// echo "<pre>";
// print_r(PDO::getAvailableDrivers());
// echo "</pre>";


$host = "localhost";
$db = "202794-aussiegalleri";
$username = "root";
$pass = "root";
$charset = "utf8mb4";

$dsn = "mysql:host={$host};dbname={$db};charset={$charset}";

$options = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
  $pdo = new PDO($dsn, $username, $pass, null);
} catch (\PDOException $e) {
  throw new \PDOException($e->getMessage(), (int)$e->getCode());
}



?>