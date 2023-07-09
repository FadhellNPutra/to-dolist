<?php 
  session_start();
  ob_start();

  include "library/config.php";

  if(empty($_SESSION['username']) || empty($_SESSION['password'])){
    echo "<p style='text-align: center;'>Anda harus login dahulu</p>";
    header("location:login.php");
  }else {
    define('INDEX', true);
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To-do List || Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <h1 class="text-center">Aplikasi To-Do List</h1>
 <!-- Form Kegiatan -->
 <form action="?hal=insert" method="post" class="mt-3">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control shadow-sm p-3 mb-5 bg-body-tertiary rounded" placeholder="Masukkan Kegiatan" name="kegiatan">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Kirim</button>
 </form>
 <!-- Form Kegiatan End -->




 <!-- Tampil Nama Kegiatan + Tindakan -->
 <?php include "konten.php"; ?>
 <?php /*<h4 class="mt-3 text-center">Kegiatan</h4>
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
    ?>*/?>
  </tbody>
</table>
 <!-- Tampil Nama Kegiatan + Tindakan End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 </body>
</html>