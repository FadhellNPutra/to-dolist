<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db="todolist";

    $con = mysqli_connect($host, $user, $pass, $db);

    if(mysqli_connect_errno()){
        echo "Koneksi Gagal :" . mysqli_connect_error();
        echo mysqli_error($con);
    }
?>