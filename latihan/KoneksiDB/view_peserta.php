<?php
include_once 'dbkoneksi.php';
$_nomor = $_GET['no'];
$sql = "SELECT * FROM prodi WHERE nama='$_nomor'";
$st = $dbh->prepare($sql);
$st->execute([$_nomor]);
$row = $st->fetch();
echo '<br/>kode : ' . $row['kode'];
echo '<br/>Nama Peserta : ' . $row['nama'];
