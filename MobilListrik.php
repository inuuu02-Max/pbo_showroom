<?php

require_once 'kendaraan.php';

class MobilListrik extends Kendaraan {

    private $kapasitasBaterai;
    private $jarakTempuh;

    public function __construct(
        $idKendaraan,
        $brand,
        $model,
        $tahun,
        $hargaDasar,
        $kapasitasBaterai,
        $jarakTempuh
    ){

        parent::__construct(
            $idKendaraan,
            $brand,
            $model,
            $tahun,
            $hargaDasar
        );

        $this->kapasitasBaterai = $kapasitasBaterai;
        $this->jarakTempuh = $jarakTempuh;
    }

    public function hitungPajakTahunan()
    {
        return 0.005 * $this->hargaDasar;
    }

    public function tampilkanSpesifikasi()
    {
        return
        "🔋 ".$this->brand." ".$this->model.
        "<br>Baterai : ".$this->kapasitasBaterai." kWh".
        "<br>Jarak Tempuh : ".$this->jarakTempuh." Km";
    }
}
?>