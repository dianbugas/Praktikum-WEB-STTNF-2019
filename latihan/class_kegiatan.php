<?php
require_once "koneksi_database.php";
class Mahasiswa
{
    private $tableName = "mahasiswa";
    private $koneksi = null;
    public function __construct()
    {
        $database = new DBKoneksi();
        $this->koneksi = $database->getKoneksi();
    }
    public function getAll()
    {
        $sql = "SELECT * FROM " . $this->tableName;
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        return $ps->fetchAll();
    }
}
