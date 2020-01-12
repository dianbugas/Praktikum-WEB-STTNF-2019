<?php
$host = 'localhost';
$db = 'dblat_pdo';
$user = 'webti2';
$pass = 'bismillah';

$dsn = "mysql:host=$host;dbname=$db";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $dbh = new PDO($dsn, $user, $pass, $opt);
    // echo '<h2>Koneksi Database Sukses !!</h2>';
} catch (PDOEXception $e) {
    echo $e->getMessage();
}
