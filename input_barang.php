<?php
include "koneksi.php";
if (isset($_POST['save'])) {
		$nama=$_POST['nama'];
		$alamat=$_POST['alamat'];
		$no_telpn=$_POST['no_telp'];
		$query=mysqli_query($koneksi,"insert into barang(nama,alamat, no_telp)
		value ('$nama','$alamat','$no_telpn')");//tanda petik 1 & tanda petik 2 jangan sampai salah
if($query) {
	header ("location:view_barang.php"); //ini yang bakal tampil di database setelah diisi
}	else {
	echo mysqli_error ();
}
}
		
?>

<form method="POST" action="">
<table class="table table-bordered" border="1">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" class="form-control"></td>
	</tr>
    <td>No Telepon</td>
		<td><input type="text" name="no_telp" class="form-control"></td>
	</tr>
	
	</tr>
	<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
</table>
</form>
	