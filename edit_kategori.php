<?php
include 'koneksi.php';

if(isset($_POST['save']))
{
	$query_edit=mysqli_query($koneksi,
	"update kategori set 
	nama='".$_POST['nama_barang']."'
	where id_kategori='".$_POST['id_kategori']."'");
	
	if($query_edit){
		header("location:view_kategori.php");
	}else{
		echo mysqli_error();
	}
	
}

$data_dari_tampil_barang=mysqli_query($koneksi,"select * from barang where id_kategori='".$_GET['id_kategori']."'");
$tampil=mysqli_fetch_array($data_dari_tampil_barang);
?>
<form method="POST">
	<table border="1">
	<input type="hidden" name="id_kategori" value="<?php echo $tampil['id_kategori'];?>"
		<tr>
			<td>Nama Kategori</td>
			<td><input type="text" name="nama" value="<?php echo $tampil['nama_barang'];?>"></td>
		<tr>

		<tr>
		<td><input type="submit" name="save"></td>
		</tr>
	</table>
</form>
</form>