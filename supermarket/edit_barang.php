<?php
include 'koneksi.php';

if(isset($_POST['save']))
{
	$query_edit=mysqli_query($koneksi,
	"update barang set 
	id_barang='".$_POST['id_barang']."',
	nama='".$_POST['nama']."',
	kategori_id='".$_POST['kategori_id']."',
	satuan_id='".$_POST['satuan_id']."'
	where id_barang='".$_POST['id_barang']."'");
	
	if($query_edit){
		header("location:view_barang.php");
	}else{
		echo mysqli_error();
	}
	
}
include "header.php";
$data_dari_tampil_barang=mysqli_query($koneksi,"select * from barang where id_barang='".$_GET['id_barang']."'");
$tampil=mysqli_fetch_array($data_dari_tampil_barang);
?>
<form method="POST">
	<table border="1">
	<input type="hidden" name="id_barang" value="<?php echo $tampil['id_barang'];?>"
		<tr>
		    <td>id_barang</td>
			<td><input type="number" name="id_barang" value="<?php echo $tampil['nama'];?>"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="<?php echo $tampil['nama'];?>"></td>
		</tr>
		<tr>
			<td>kategori_id</td>
			<td><input type="text" name="alamat" value="<?php echo $tampil['kategori_id'];?>"></td>
		</tr>
		<tr>
			<td>satuan_id</td>
			<td><input type="text" name="no_telp" value="<?php echo $tampil['satuan_id'];?>"></td>
		</tr>
		<tr>
		<td><input type="submit" name="save"></td>
		</tr>
	</table>
</form>
</form>
<?php
include "footer.php";
?>