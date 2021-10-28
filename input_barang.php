<?php
include("koneksi.php");

if (isset($_POST['save'])){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['no_telp'];
    $query=mysqli_query($koneksi,"INSERT INTO barang(nama, alamat, no_telp) 
    value ('$nama','$alamat','$no_telp')");
if($query) {
    header ("location:view_barang.php");
} else {
    echo mysqli_eror ();

}
}
?>
<form method="POST">
<table class="table table-bordered" border="0">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
    <tr>
         <td>Alamat</td>
		<td><input type="text" name="alamat" class="form-control"></td>
	</tr>
    <tr>
	    <td>No Telepon</td>
		<td><input type="text" name="no_telp" class="form-control"></td>
	</tr>
	
	
	</tr>
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>