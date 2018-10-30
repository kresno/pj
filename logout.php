<?php
session_start();
session_destroy();
echo "<script>alert('Logout Berhasil, Terimakasih telah berkunjung'); window.location.href='index.php';</script>";
?>