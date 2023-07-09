<?php 
    if(!defined('INDEX')) die("");

    $query = mysqli_query($con, "INSERT INTO kegiatan SET nama_kegiatan = '$_POST[kegiatan]'");

    if($query){
        echo "Kegiatan telah disimpan";
        echo "<meta http-equiv='refresh' content='1; url=?hal=dashboard'";
    }else{
        echo "Gagal menyimpan data!";
        echo mysqli_error($con);
    };
?>