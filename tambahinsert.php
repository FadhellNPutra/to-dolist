<?php 
    include "library/config.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($con, "INSERT INTO users SET username='$username', password='$password'");

    if($query){
        echo "<p style='text-align: center;'>Berhasil! Silahkan login dahulu</p>";
        header('Location: login.php');
    }else{
        echo "<p style='text-align: center;'>Gagal daftar! coba lagi!</p>";
        header('Location: registrasi.php');
    }
?>