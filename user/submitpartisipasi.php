<?php
include('../config/koneksi.php');

$sektor = $_POST['sektor'];
$kawasan = $_POST['kawasan'];
$program = $_POST['program'];
$sasaran = $_POST['sasaran'];
$indikator = $_POST['indikator'];
$kecamatan = $_POST['kecamatan'];
$desa = $_POST['desa'];

$output = $_POST['output'];
$volume = $_POST['target'];
$satuan = $_POST['satuan'];
$pagu = $_POST['pagu'];
$kegiatan = $_POST['kegiatan'];

session_start();
$user_id = $_SESSION['user_id'];


$sql = "INSERT INTO usulan (user_id, sektor_id, kawasan_id, program_id, sasaran_id, indikator_id, kecamatan_id, desa_id,kegiatan, output, volume, satuan, pagu)
        VALUES ($user_id, $sektor, $kawasan, $program, $sasaran, $indikator, $kecamatan, $desa, '$kegiatan', '$output', $volume, '$satuan', $pagu) ";

if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
}else{
    echo "<script>alert('Terimakasih telah melakukan usulan'); window.location.href='partisipasi.php';</script>";
}


?>