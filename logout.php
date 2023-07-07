<?php 
    session_start();
    session_destroy();

    echo "<p style='text-align: center;'>Anda Sudah Logout! Silahkan Login kembali</p>";
    echo "<meta http-equiv='refresh' content'2; url=login.php'>";
    header('Location: login.php');
?>