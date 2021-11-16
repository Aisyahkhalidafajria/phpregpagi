<?php
include 'koneksi.php';

//mengaktifkan session
session_start();

if($_SESSION['level']== ""){
    echo "<SCRIPT>alert('silahkan login terlebih dahulu);window.location='index.php'</SCRIPT>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<div class="kolom"> 
    <div>
        <?php echo "Hai, Selamat Datang <b>".$_SESSION['username']."</b>";
        ?>
    <ul>
        <li><a href="view_barang.php">Daftar Barang</a></li>
        <li><a href="view_kategori.php">Daftar Kategori</a></li>
    </ul>
    <a href="logout.php" onclick="return confirm('Apakah Anda Yakin Keluar?')">keluar</a>
</div>
</body>
</html>