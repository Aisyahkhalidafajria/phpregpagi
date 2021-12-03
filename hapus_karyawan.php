<?php
include 'koneksi.php';

$hapus=mysqli_query($koneksi, "delete from cuti_karyawan where id_karyawan='".$_GET['id_karyawan']."'");
if($hapus){
    header("location:view_karyawan.php");
}else{
    echo mysqli_eror();

}

?>
