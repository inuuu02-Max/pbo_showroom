<?php

require_once 'kendaraan.php';

class MobilKonvensional extends Kendaraan {

    private $kapasitasMesin;
    private $jenisBahanBakar;

    public function __construct(
        $idKendaraan,
        $brand,
        $model,
        $tahun,
        $hargaDasar,
        $kapasitasMesin,
        $jenisBahanBakar
    ){

        parent::__construct(
            $idKendaraan,
            $brand,
            $model,
            $tahun,
            $hargaDasar
        );

        $this->kapasitasMesin = $kapasitasMesin;
        $this->jenisBahanBakar = $jenisBahanBakar;
    }

    public function hitungPajakTahunan()
    {
        return
        (0.02 * $this->hargaDasar)
        +
        ($this->kapasitasMesin * 500);
    }

    public function tampilkanSpesifikasi()
    {
        return
        "🚗 ".$this->brand." ".$this->model.
        "<br>CC : ".$this->kapasitasMesin.
        "<br>Bahan Bakar : ".$this->jenisBahanBakar;
    }
}
?>