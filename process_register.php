<?php
include 'config/koneksi.php';

$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$telp = mysqli_real_escape_string($con, $_POST['telp']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$password_hash = md5($password);


$sql="INSERT INTO users (fname, lname, email, telp, password, is_active) VALUES ('$fname', '$lname', '$email', '$telp', '$password_hash', '0')";

if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
} else{
    echo "<script>alert('Aktivasi Akun Akan dilakukan 1x24 jam, Atau Hubungi Admin'); window.location.href='login.php';</script>";
}

?>