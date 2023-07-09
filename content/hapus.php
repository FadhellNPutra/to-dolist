<?php 
    if(!defined('INDEX')) die("");

    $query = mysqli_query($con, "DELETE FROM kegiatan WHERE id='$_GET[id]'");

    if($query){
        echo "Kegiatan dihapus!";
        echo "<meta http-equiv='refresh' content='1; url=?hal=dashboard'>";
    }else{
        echo "Gagal menghapus Kegiatan";
        echo mysqli_error($con);
    }
?>