<?php

require_once 'kendaraan.php';

class MotorBesar extends Kendaraan {

    private $tipeRantai;
    private $modeBerkendara;

    public function __construct(
        $idKendaraan,
        $brand,
        $model,
        $tahun,
        $hargaDasar,
        $tipeRantai,
        $modeBerkendara
    ){

        parent::__construct(
            $idKendaraan,
            $brand,
            $model,
            $tahun,
            $hargaDasar
        );

        $this->tipeRantai = $tipeRantai;
        $this->modeBerkendara = $modeBerkendara;
    }

    public function hitungPajakTahunan()
    {
        return 0.015 * $this->hargaDasar;
    }

    public function tampilkanSpesifikasi()
    {
        return
        "🏍️ ".$this->brand." ".$this->model.
        "<br>Tipe Rantai : ".$this->tipeRantai.
        "<br>Mode : ".$this->modeBerkendara;
    }
}
?>