<?php

require_once 'koneksi.php';

class KendaraanDAL extends Koneksi {

    public function tampilData()
    {
        return mysqli_query(
            $this->conn,
            "SELECT * FROM kendaraan"
        );
    }

    public function tambahData(
        $jenis,
        $brand,
        $model,
        $tahun,
        $harga
    ){
        return mysqli_query(
            $this->conn,
            "INSERT INTO kendaraan
            VALUES(
            NULL,
            '$jenis',
            '$brand',
            '$model',
            '$tahun',
            '$harga'
            )"
        );
    }

    public function getMobilKonvensional($id)
    {
        return mysqli_query(
            $this->conn,
            "SELECT *
             FROM mobil_konvensional
             WHERE id_kendaraan='$id'"
        );
    }

    public function getMobilListrik($id)
    {
        return mysqli_query(
            $this->conn,
            "SELECT *
             FROM mobil_listrik
             WHERE id_kendaraan='$id'"
        );
    }

    public function getMotorBesar($id)
    {
        return mysqli_query(
            $this->conn,
            "SELECT *
             FROM motor_besar
             WHERE id_kendaraan='$id'"
        );
    }

    public function hapusData($id)
    {
        return mysqli_query(
            $this->conn,
            "DELETE FROM kendaraan
             WHERE id_kendaraan='$id'"
        );
    }

    public function updateData(
        $id,
        $jenis,
        $brand,
        $model,
        $tahun,
        $harga
    ){
        return mysqli_query(
            $this->conn,
            "UPDATE kendaraan
             SET
             jenis_kendaraan='$jenis',
             brand='$brand',
             model='$model',
             tahun='$tahun',
             harga_dasar='$harga'
             WHERE id_kendaraan='$id'"
        );
    }
}
?>