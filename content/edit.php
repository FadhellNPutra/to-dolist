<?php 
    if(!defined('INDEX')) die("");

    $query = mysqli_query($con, "SELECT * FROM kegiatan WHERE id='$_GET[id]'");
    $data = mysqli_fetch_array($query);
?>
<h2 class="text-center">Aplikasi To-Do List</h2>
<form action="?hal=update" method="post" class="mt-3">
    <div class="row">
        <div class="col">
            <input type="hidden" class="form-control shadow-sm p-3 mb-5 bg-body-tertiary rounded" name="id" value="<?= $data['id']?>">
            <input type="text" class="form-control shadow-sm p-3 mb-5 bg-body-tertiary rounded" placeholder="Masukkan Kegiatan" name="kegiatan" value="<?= $data['nama_kegiatan']?>">
            <button type="submit" class="btn btn-primary mt-3">Kirim</button>
        </div>
    </div>
 </form>
 