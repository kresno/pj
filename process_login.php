<?php
include 'config/koneksi.php';

$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$password_hash = md5($password);

// echo $email.' '.$password_hash;

$sql="SELECT * FROM users where email='$email' and password='$password_hash' ";

if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['email'] = $row['email'];
        
        if($row['is_active']== 0){
            echo "<script>alert('Akun Belum di Aktivasi'); window.location.href='login.php';</script>";
        }else{
            if($row['role_id'] == 1){
                echo "<script>alert('Login Berhasil'); window.location.href='admin/index.php';</script>";
            } else if($row['role_id'] == 2){
                echo "<script>alert('Login Berhasil'); window.location.href='dinas/index.php';</script>";
            } else {
                echo "<script>alert('Login Berhasil'); window.location.href='user/partisipasi.php';</script>";
            }
        }
    }
    else{
        echo "<script>alert('Username dan Password tidak ditemukan'); window.location.href='login.php';</script>";
    }
    // else return false;
} else {
    echo "ko gagal";
}

?>