<?php
session_start();
session_destroy();
echo "<script>alert('Login Berhasil'); window.location.href='index.php';</script>";
?>