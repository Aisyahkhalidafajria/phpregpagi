<html>
<head>
	<title>Halaman admin</title>
</head>
<body>
	<?php 
	session_start();

	
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>

</body>

<?php
include "koneksi.php";
if (isset($_POST['save'])) {
		$nama=$_POST['nama'];
		$alamat=$_POST['alamat'];
		$no_telpn=$_POST['no_telp'];
		$query=mysqli_query($koneksi,"insert into barang(nama,alamat, no_telp)
		value ('$nama','$alamat','$no_telpn')");
if($query) {
	header ("location:view_barang.php"); 
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

</html>