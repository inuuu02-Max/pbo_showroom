<?php

abstract class Kendaraan {

    protected $idKendaraan;
    protected $brand;
    protected $model;
    protected $tahun;
    protected $hargaDasar;

    public function __construct(
        $idKendaraan,
        $brand,
        $model,
        $tahun,
        $hargaDasar
    ){
        $this->idKendaraan = $idKendaraan;
        $this->brand = $brand;
        $this->model = $model;
        $this->tahun = $tahun;
        $this->hargaDasar = $hargaDasar;
    }

    abstract public function hitungPajakTahunan();

    abstract public function tampilkanSpesifikasi();
}
?>