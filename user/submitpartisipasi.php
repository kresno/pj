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

$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];


session_start();
$user_id = $_SESSION['user_id'];

$ekstensi_diperbolehkan	= array('png','jpg', 'jpeg', 'pdf', 'docx', 'doc', 'xlsx', 'xls');
$nama = $_FILES['file']['name'];
$x = explode('.', $nama);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];

if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){			
        move_uploaded_file($file_tmp, 'upload/'.$nama);
        $sql = "INSERT INTO usulan (user_id, sektor_id, kawasan_id, program_id, sasaran_id, indikator_id, kecamatan_id, desa_id,kegiatan, output, volume, satuan, pagu, latitude, longitude, foto)
        VALUES ($user_id, $sektor, $kawasan, $program, $sasaran, $indikator, $kecamatan, $desa, '$kegiatan', '$output', $volume, '$satuan', $pagu, '$latitude', '$longitude', '$nama') ";

        if (!mysqli_query($con,$sql)) {
            die('Error: ' . mysqli_error($con));
        }else{
            echo "<script>alert('Terimakasih telah melakukan usulan'); window.location.href='dashboard.php';</script>";
        }  
    }else{
        echo 'UKURAN FILE TERLALU BESAR';
    }
}else{
    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
}

?>