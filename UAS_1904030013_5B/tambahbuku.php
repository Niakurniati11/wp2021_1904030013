<?php

require 'koneksi.php';

if (isset($_POST['tambah'])) {
  if (tambahd($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil ditambah');
    document.location.href = 'buku.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal ditambah');
    </script>";
  }
}

if (isset($_POST['tambaha'])) {
    if (tambah($_POST) > 0) {
      echo
      "<script>
      alert('data berhasil ditambah');
      document.location.href = 'anggota.php';
      </script>";
    } else {
      echo
      "<script>
      alert('data gagal ditambah');
      </script>";
    }
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
          </li>
          </div>
        </div>
      </nav>
</div>

  <!-- input buku -->
  <!-- konten -->
  <div class="container">
  <h3></i> Input data buku </h3>
  <hr>

  <form method="POST" action="">
    <div class="form-group">
      <label for="judul_buku">Judul Buku : </label>
      <input type="text" class="form-control" id="judul_buku" placeholder="Judul Buku" name="judul_buku" autofocus required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="foto">Pengarang : </label>
      <input type="text" class="form-control" id="foto" placeholder="pengarang" name="pengarang" required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="tahun_penerbit">Penerbit : </label>
      <input type="text" class="form-control" id="tahun_penerbit" placeholder="penerbit" name="penerbit" required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="stock">Tahun Terbit : </label>
      <input type="text" class="form-control" id="stock" placeholder="Tahun Terbit" name="tahun_terbit" required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="stock"> Kode : </label>
      <input type="text" class="form-control" id="stock" placeholder="Kode" name="kode" required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="stock">Jumlah Buku : </label>
      <input type="text" class="form-control" id="stock" placeholder="Jumlah buku" name="jumlah_buku" required autocomplete="off">
    </div>
    <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
  </form>


  </div>
  </div>
  </div>

  <br>
  <!-- konten -->
  <div class="container">
  <h3></i> Input data anggota </h3>
  <hr>

  <form method="POST" action="">
    <div class="form-group">
      <label for="judul_buku">Nama Anggota : </label>
      <input type="text" class="form-control" id="judul_buku" placeholder="nama anggota" name="nama" autofocus required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="foto">Alamat : </label>
      <input type="text" class="form-control" id="foto" placeholder="input alamat" name="alamat" required autocomplete="off">
    </div>
    <div class="form-group">
      <label for="tahun_penerbit">No Hp : </label>
      <input type="text" class="form-control" id="tahun_penerbit" placeholder="input nomor" name="no_hp" required autocomplete="off">
    </div>
    <button type="submit" class="btn btn-primary" name="tambaha">Simpan</button>
  </form>


  </div>
  </div>
  </div>
    </body>
</html>