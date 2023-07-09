<?php 
    if(!defined('INDEX')) die("");

?>


<h4 class="mt-3 text-center">Kegiatan</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Kegiatan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php 
      $query = mysqli_query($con, "SELECT * FROM kegiatan ORDER BY id DESC");
      $no = 0;
      while ($data = mysqli_fetch_array($query)) {
        $no++;
    ?>
    <tr>
        <td><?= $no ?></td>
        <td><?= $data['nama_kegiatan']?></td>
        <td>
          <a href="?hal=edit&id=<?= $data['id'] ?>" class="btn btn-primary">Edit</a>
          <a href="?hal=hapus&id=<?= $data['id'] ?>" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    <?php 
      }
    ?>
  </tbody>
</table>