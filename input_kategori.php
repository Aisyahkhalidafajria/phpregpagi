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
        $nama_barang=$_POST['nama_barang'];
        $query=mysqli_query($koneksi,"insert into kategori(nama_barang)
        value ('$nama_barang')"); 
if($query) {
    header ("location:view_kategori.php"); 
    echo mysqli_error ();

}   
}

?>
<form method="POST">
<table class="table table-bordered" border="0">

	<tr>
		<td>nama barang</td>
		<td><input type="text" name="nama_barang" class="form-control"></td>
	</tr>

	
		<tr>
			<td><input type="submit" name="save" class="btn btn-danger"></td>
		</tr>
</table>
</form>

</html>