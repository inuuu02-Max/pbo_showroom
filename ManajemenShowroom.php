<?php

class ManajemenShowroom {

    private $daftarKendaraan = [];

    public function tambahKendaraan(
        Kendaraan $kendaraan
    ){
        $this->daftarKendaraan[] = $kendaraan;
    }

    public function tampilSemua()
    {
        return $this->daftarKendaraan;
    }
}
?>