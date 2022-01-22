<!doctype html>
<html>
<head>
<title>Pertemuan 4</title>
</head>
<body>
<h1>Membuat Array</h1>
<?php
$values =	array(5,4,3,1,2.200); var_dump($values);
echo"<br>"; echo($values[3]);

echo"<br>";

$prodi = ["Fai","Ekonommi","Fisip","Pendidikan"]; var_dump($prodi);
echo"<br>";
echo "$prodi[2]";

echo"<br>";
// mengganti isi value
$prodi[0] = "T.Elektro"; var_dump($prodi); echo"<br>";

//menambahkan value
$mk[]="sistem microprocessor"; var_dump($mk);
echo"<br>";

//menghapus salah satu value unset($prodi[0]); var_dump($prodi);
echo"<br>";

// menghitung total array echo"<br>"; var_dump(count($prodi));

?>
<hr>
<h1>Map Dengan Array</h1>
<?php

$yogi = array(
"id" => "okta",
"nama" => "Yogi okta", "umur" => 20
);
var_dump($yogi); echo"<br>";
$abi = [
"id" => "mas abi", "nama" => "Abi yusuf", "umur" => 22,
 
"alamat" => [
"kota" => "Tangerang", "Provinsi" => "Banten"
]
];
var_dump($abi);
//echo"<br>";
//echo("nama id : " . $abi["id"]);
//echo"<br>";
//echo("nama lengkap : " . $abi["nama"]);
//echo"<br>";
//echo("umur : " . $abi["umur"]);

?>

<hr>
<h1>Operator Matematika</h1>

<?php
$tambah = 50 + 60;
$kurang = 50 - 25;
$kali = 10 * 15;
$bagi = 100 / 25;
$modular = 5 % 2;
$pangkat = 5**5;
echo "Tambah : " . $tambah . "<br>"; echo "Kurang : " . $kurang . "<br>"; echo "Kali : " . $kali . "<br>";
echo "Bagi : " . $bagi . "<br>";
echo "Modular : " . $modular . "<br>"; echo "Pangkat : " . $pangkat . "<br>";

?>
<hr>
<h2>Increment</h2>
<?php
$a = 50;
$a++;
// $a = $a + 10;
$a++;
$a--;

echo ($a);

?>
<hr>
<?php
$nim1= "Muthu Ratna Manikam";
$nim2= "Sherly Arfika Sari";
$nim3= "Nia Kurniati";
$nim4= "Shifa Aulia Salsabila";
$nim5= "Lesi Yanti";
?>
<h1>Daftar Mahasiswa</h1>
<?php echo "$nim1";?><br>
<?php echo "$nim2";?><br>
<?php echo "$nim3";?><br>
 
<?php echo "$nim4";?><br>
<?php echo "$nim5";?><br>

<hr>
<?php
// membuat array kosong
$array1 = array("elemen","elemen"); //cara dibawah php 5
$array2 = ["elemen","elemen"]; //diatas php 5

//membuat array sekaligus mengisinya
$minuman = array("susu","Es teh","Lemon tea");
$makanan = ["Bakso","sup ayam","tongseng"];
?>
<?php
var_dump ($minuman);
?>
<?php
var_dump ($makanan);
?>
<?php
echo "$makanan[2]";

 
?>


<?php
//membuat array mahasiswa
$nim= ["Muthu Ratna Manikam","Sherly Arfika Sari","NiaKurniati","Shifa Aulia Salsabila","Lesi Yanti"];
?>
<?php
///menampilkan isi arrray dengan perulangan for 
for($i=0; $i <count($nim); $i++){
echo $nim[$i]."<br>";
}

?>


<?php
//membuat array kumpulan buku
$books= ["Bahasa indonesia","Bahasa inggris","Agama islam"];

//menampilkan isi array dengan perulangan foreach 
foreach($books as $book){
echo $book."<br>";
}

?>

<hr>
<h1>Menambahkan array</h1>
<?php
//membuat arrray
$hobi = [
"Berenang", "Kulineran", "Traveling"
];
//mengganti isi pada indeks ke-2
 
$hobi[2] = "Nonton drakor";
//menambahkan isi pada indeks ke-3
$hobi[3] = "Membaca";
//menambahkan isi pada indeks terakhir
$hobi[] = "Memanah";
//cetak array dengan perulangan 
foreach($hobi as $hobiku){
echo $hobiku."<br>";
}
?>

<hr>
<h1>Array Assosiatif</h1>
<?php
//membuat array assosiatif
$mhs = [
"nim" => "1904030013",
"nama" => "Nia kurniati", "fakultas" => "Teknik",
"jurusan" => "Teknik Informatika",
 







 
];
//mencetak isi array assosiatif echo "<h2>Data Mahasiswa</h2>";
echo "<p>nim : ".$mhs["nim"]."</br>";
echo "<p>nama : ".$mhs["nama"]."</br>";
echo "<p>fakultas : ".$mhs["fakultas"]."</br>"; echo "<p>jurusan : ".$mhs["jurusan"]."</br>";
?>


<?php
//ini adalah array dua dimensi
$matrik = [
[1,2,3],
[4,5,6],
[7,8,9],
 
];


?>

<hr>
 

//cara mengakses isinya
echo $matrik[1][0]; //-> output; 7
 
<?php
//membuat array 2 dimensi yang berisi array assosiatif
$dosens = [
[
"nama" => "Nia Kurniati", "mk" => "Sistem Basic Data"
], [
"nama" => "Lesi Yanti", "mk" => "OOP"
], [
"nama" => "Yogi Okta", "mk" => "Bahasa Inggris"
]
 
];

//menampilkan array 
foreach($dosens as $dosen){
echo "<h2>".$dosen["nama"]."</h2>";
echo "<p>".$dosen["mk"]."<p>"; echo "<hr>";
}
?>


</body>
</html>
