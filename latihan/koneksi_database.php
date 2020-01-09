<?php
class DBKoneksi
{
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "bismillah";
    private $dbname = "beastudi";

    private $opsi = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    private $koneksi = null;
    public function __construct()
    {
        $dsn = "mysql:host=" . $this->dbhost . ";dbname=" . $this->dbname;
        try {
            $this->koneksi = new PDO(
                $dsn,
                $this->dbuser,
                $this->dbpass,
                $this->opsi
            );
            // echo 'KONEKSI Database SUKSES !!';
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function getKoneksi()
    {
        return $this->koneksi;
    }
}
