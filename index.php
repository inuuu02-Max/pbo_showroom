<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'KendaraanDAL.php';
require_once 'kendaraan.php';
require_once 'MobilKonvensional.php';
require_once 'MobilListrik.php';
require_once 'MotorBesar.php';
require_once 'ManajemenShowroom.php';

$dal = new KendaraanDAL();
$data = $dal->tampilData();

$showroom = new ManajemenShowroom();

while($row = mysqli_fetch_assoc($data)) {

    if($row['jenis_kendaraan'] == 'MobilKonvensional') {

        $d = mysqli_fetch_assoc($dal->getMobilKonvensional($row['id_kendaraan']));

        $obj = new MobilKonvensional(
            $row['id_kendaraan'],
            $row['brand'],
            $row['model'],
            $row['tahun'],
            $row['harga_dasar'],
            $d['kapasitas_mesin'],
            $d['jenis_bahan_bakar']
        );

    } elseif($row['jenis_kendaraan'] == 'MobilListrik') {

        $d = mysqli_fetch_assoc($dal->getMobilListrik($row['id_kendaraan']));

        $obj = new MobilListrik(
            $row['id_kendaraan'],
            $row['brand'],
            $row['model'],
            $row['tahun'],
            $row['harga_dasar'],
            $d['kapasitas_baterai'],
            $d['jarak_tempuh']
        );

    } else {

        $d = mysqli_fetch_assoc($dal->getMotorBesar($row['id_kendaraan']));

        $obj = new MotorBesar(
            $row['id_kendaraan'],
            $row['brand'],
            $row['model'],
            $row['tahun'],
            $row['harga_dasar'],
            $d['tipe_rantai'],
            $d['mode_berkendara']
        );
    }

    $showroom->tambahKendaraan($obj);
}

$total = count($showroom->tampilSemua());

?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard Showroom</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#eef2f7;
}

.sidebar{
    background:#111827;
    min-height:100vh;
    color:white;
    padding:20px;
}

.sidebar h3{
    margin-bottom:30px;
}

.sidebar a{
    display:block;
    color:white;
    text-decoration:none;
    padding:10px;
    border-radius:8px;
    margin-bottom:5px;
}

.sidebar a:hover{
    background:#374151;
}

.card-box{
    border:none;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

.vehicle-card{
    border:none;
    border-radius:15px;
    transition:0.3s;
}

.vehicle-card:hover{
    transform:scale(1.02);
}

.pajak{
    font-size:20px;
    font-weight:bold;
    color:#16a34a;
}

.header{
    background:white;
    padding:20px;
    border-radius:15px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

</style>

</head>

<body>

<div class="container-fluid">

<div class="row">

<!-- SIDEBAR -->
<div class="col-md-2 sidebar">

<h3>🚗 SHOWROOM</h3>

<a href="#">Dashboard</a>
<a href="#">Kendaraan</a>
<a href="#">Pajak</a>
<a href="#">Laporan</a>

</div>

<!-- CONTENT -->
<div class="col-md-10 p-4">

<div class="header mb-4">

<h2>Dashboard Inventaris Kendaraan</h2>
<p>Sistem Manajemen Showroom OOP PHP</p>

</div>

<!-- CARD INFO -->
<div class="row mb-4">

<div class="col-md-4">
<div class="card card-box bg-primary text-white p-3">
<h5>Total Kendaraan</h5>
<h2><?= $total ?></h2>
</div>
</div>

<div class="col-md-4">
<div class="card card-box bg-success text-white p-3">
<h5>Kategori</h5>
<h2>3</h2>
</div>
</div>

<div class="col-md-4">
<div class="card card-box bg-dark text-white p-3">
<h5>Status</h5>
<h2>Aktif</h2>
</div>
</div>

</div>

<!-- DATA KENDARAAN -->
<div class="row">

<?php foreach($showroom->tampilSemua() as $k) { ?>

<div class="col-md-4 mb-4">

<div class="card vehicle-card">

<div class="card-body">

<h5>
<?= $k->tampilkanSpesifikasi(); ?>
</h5>

<hr>

Pajak Tahunan

<div class="pajak">
Rp <?= number_format($k->hitungPajakTahunan(),0,',','.') ?>
</div>

</div>

</div>

</div>

<?php } ?>

</div>

</div>

</div>

</div>

</body>
</html>