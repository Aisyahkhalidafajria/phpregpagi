<?php
include 'koneksi.php';

$hapus=mysqli_query($koneksi,"delete from kategori where id_kategori='".$_GET['id_kategori']."'");
if($hapus){
	header("location:view_kategori.php");
}else{
	echo mysqli_error();
}

?>