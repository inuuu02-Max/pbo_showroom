<?php

class Koneksi {

    protected $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect(
            "localhost",
            "root",
            "",
            "showroom"
        );

        if (!$this->conn) {
            die(
                "Koneksi Gagal : "
                . mysqli_connect_error()
            );
        }
    }
}
?>