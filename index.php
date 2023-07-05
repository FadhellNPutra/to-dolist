<!doctype html>
<html lang="en">
 `<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 </head>
 <body>
    <h1 class="text-center">Aplikasi To-Do List</h1>
 <!-- Form Kegiatan -->
 <form action="insert.php" method="post" class="mt-3">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control shadow-sm p-3 mb-5 bg-body-tertiary rounded" placeholder="Masukkan Kegiatan">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Kirim</button>
 </form>
 <!-- Form Kegiatan End -->




 <!-- Tampil Nama Kegiatan + Tindakan -->
 <h4>Kegiatan</h4>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Kegiatan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        
    </tr>
  </tbody>
</table>
 <!-- Tampil Nama Kegiatan + Tindakan End -->








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 </body>
</html>