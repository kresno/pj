<?php
include 'config/koneksi.php';

$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$unsur = mysqli_real_escape_string($con, $_POST['unsur']);
$telp = mysqli_real_escape_string($con, $_POST['telp']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$password_hash = md5($password);

$sql="INSERT INTO users (fname, lname, email, telp,unsur_id, password, is_active, role_id) VALUES ('$fname', '$lname', '$email', '$unsur', '$telp', '$password_hash', '1', '3')";

if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
}else{
    echo "<script>alert('Aktivasi Akun Akan dilakukan 1x24 jam, Atau Hubungi Admin'); window.location.href='login.php';</script>";
}

?>