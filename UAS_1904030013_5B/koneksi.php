<?php
$conn = mysqli_connect('localhost', 'root', '', 'uas_1904030013');

// pemanggilan tabel
function query($query)
{
  global $conn;

  // mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // pemanggilan elemen data dengan rapih
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function cari($keyword)
{
  global $conn;

  $query = "SELECT * FROM data_buku WHERE judul_buku LIKE '%$keyword%' ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function edit($data)
{
  global $conn;

  $id = $data['id'];
  $judul = htmlspecialchars($data['judul_buku']);
  $ngarang = htmlspecialchars($data['pengarang']);
  $terbit = htmlspecialchars($data['penerbit']);
  $tahun = htmlspecialchars($data['tahun_terbit']);
  $kode_ = htmlspecialchars($data['kode']);
  $jumlah = htmlspecialchars($data['jumlah_buku']);

  $query = "UPDATE data_buku SET
  nama ='$judul',
  pengarang ='$ngarang',
  penerbit ='$terbit',
  tahun_terbit ='$tahun',
  kode ='$kode_',
  jumlah_buku ='$jumlah'
  WHERE id =$id; ";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM data_buku WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
function tambahd($data)
{
  global $conn;

  $judul = htmlspecialchars($data['judul_buku']);
  $pengarang = htmlspecialchars($data['pengarang']);
  $penerbit= htmlspecialchars($data['penerbit']);
  $tahun= htmlspecialchars($data['tahun_terbit']);
  $kode= htmlspecialchars($data['kode']);
  $jumlah= htmlspecialchars($data['jumlah_buku']);

  $query = "INSERT INTO data_buku
VALUES
(null,'$judul','$pengarang','$penerbit','$tahun','$kode','$jumlah');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function tambah($data)
{
  global $conn;

  $nama_anggota = htmlspecialchars($data['nama']);
  $alamat_anggota = htmlspecialchars($data['alamat']);
  $no= htmlspecialchars($data['no_hp']);

  $query = "INSERT INTO data_anggota
VALUES
(null,'$nama_anggota','$alamat_anggota','$no');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

//anggota


function carig($keyword)
{
  global $conn;

  $query = "SELECT * FROM data_anggota WHERE nama LIKE '%$keyword%' ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function editg($data)
{
  global $conn;

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $alamat = htmlspecialchars($data['alamat']);
  $no = htmlspecialchars($data['no_hp']);

  $query = "UPDATE data_anggota SET
  nama ='$nama',
  alamat ='$alamat',
  no_hp ='$no'
  WHERE id =$id; ";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapusg($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM data_anggota WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}