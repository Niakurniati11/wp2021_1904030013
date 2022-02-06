<?php

  require 'koneksi.php';
  $camaba = query("SELECT * FROM data_buku");

  if (isset($_POST['cari'])) {
    $camaba = cari($_POST['keyword']);
  }

  ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Perpustakaan</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-primary bg-dark">
        <div class="container">
        <a class="navbar-brand font-weight-bold" href="#">Perpustakaan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto font-weight-bold">
            <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="buku.php">Data Buku</a>
            <a class="nav-item nav-link" href="anggota.php">Data Anggota</a>
            <li class="nav-item">
            <a class="nav-link active" href="tambahbuku.php">Tambah</i></a>
          </li>
          </div>
        </div>
      </nav>
    </div>
    
    <!--buku-->
    <section class="buku">
      <div class="container">
        <br>
        <h3><i class="#"></i> Daftar Buku</h3>
        <hr>

        <!-- pencarian data -->
        <form action="" method="POST">
          <input type="text" id="keyword" size="50" name="keyword" placeholder="masukan keyword" autocomplete="off">
          <button type="submit" class="btn btn-primary" name="cari"><i class="fas fa-search">cari</i></button>
          <a href="Buku.php" class="btn btn-primary" role="button"><i class="fas fa-undo">kembali</i></i></a>
        </form>

        <br>
        <hr>

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Judul </th>
              <th scope="col">Pengarang</th>
              <th scope="col">Penerbit</th>
              <th scope="col">Tahun </th>
              <th scope="col">Kode</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>

          <?php if (empty($camaba)) : ?>
            <tr>
              <td colspan="4" class="alert alert-danger text-center" role="alert">
                <p><b>
                    data buku tidak ditemukan</p>
                </b>
              </td>
            </tr>
          <?php endif; ?>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($camaba as $cmb) : ?>
              <tr>
                <th scope="row"><?php echo $no ?></th>
                <td><?php echo $cmb['judul_buku']; ?></td>
                <td><?php echo $cmb['pengarang']; ?></td>
                <td><?php echo $cmb['penerbit']; ?></td>
                <td><?php echo $cmb['tahun_terbit']; ?></td>
                <td><?php echo $cmb['kode']; ?></td>
                <td><?php echo $cmb['jumlah_buku']; ?></td>
                <td><a href="detailbuku.php?id=<?= $cmb['id'];  ?>" class="btn btn-warning" role="button">Detail</a></td>
              </tr>
              <?php $no++ ?>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      </div>
    </section>
  </body>
</html>