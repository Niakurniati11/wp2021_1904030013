<?php
require "koneksi.php";

// agar tidak bisa masuk secara pengetikan manual pada URL
if (!isset($_GET['id'])) {
  header("location: index.html");
  exit;
}

$id = $_GET['id'];
if (hapusg($id) > 0) {
  echo
  "<script>
  alert('data berhasil dihapus');
  document.location.href = 'anggota.php';
  </script>";
} else {
  echo
  "<script>
  alert('data gagal dihapus');
  </script>";
}
