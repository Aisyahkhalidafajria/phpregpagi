<?php
include 'koneksi.php';

if(isset($_POST['save']))
{
	$query_edit=mysqli_query($koneksi,
	"update barang set 
	nama='".$_POST['nama']."',
	alamat='".$_POST['alamat']."',
	no_telp='".$_POST['no_telp']."'
	where id_barang='".$_POST['id_barang']."'");
	
	if($query_edit){
		header("location:view_barang.php");
	}else{
		echo mysqli_error();
	}
	
}

$data_dari_tampil_barang=mysqli_query($koneksi,"select * from barang where id_barang='".$_GET['id_barang']."'");
$tampil=mysqli_fetch_array($data_dari_tampil_barang);
?>
<form method="POST">
	<table border="1">
	<input type="hidden" name="id_barang" value="<?php echo $tampil['id_barang'];?>"
		<tr>
			<td>Nama Barang</td>
			<td><input type="text" name="nama" value="<?php echo $tampil['nama'];?>"></td>
		<tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat" value="<?php echo $tampil['alamat'];?>"></td>
		</tr>
		<tr>
			<td>No Telepon</td>
			<td><input type="text" name="no_telp" value="<?php echo $tampil['no_telp'];?>"></td>
		</tr>
		<tr>
		<td><input type="submit" name="save"></td>
		</tr>
	</table>
</form>
</form>
			