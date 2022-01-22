<!DOCTYPE html>
<html>
<head>
    <title>pertemuan3</title>
</head>
<body>
    <!-- PHP daham HTML -->
    <h1>Selamat Datang, <?php echo "Nia"; ?></h1>

    <!-- tag HTML dalam PHP -->

    <?php echo "<h2>Di Pembelajaran Web Programming</h2>";
    ?>
<hr>
    <h2>Tipe data integer</h2>

    <?php
    echo "Desimal : "; var_dump(1966); echo "<br>";
    echo "Octa : "; var_dump(01234); echo "<br>";
    echo "Hexadecimal : "; var_dump(0x1a); echo "<br>";
    echo "Binary : "; var_dump(0b111111); echo "<br>";
   
    ?>

    <hr>
    <h2>Variable</h2>
<?php
$namadepan = "Nia";
$namablk = "Kurniati";
$nama = "Nia Kurniati";
$mk = "Web Programming";
$agama = "Islam";
$hobi ="Traveling";
?>

<h4>Identitas Diri</h4>
<p>Nama : <?php echo $namadepan ." ". $namablk; ?></p>
<p>Nama : <?php echo $nama; ?></p>
<p>Mata Kuliah : <?php echo $mk; ?></p>
<p>Agama : <?php echo $agama; ?></p>
<p>Hobi : <?php echo $hobi; ?></p>





</body>
</html>
