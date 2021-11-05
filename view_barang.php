<?php
include("koneksi.php");
?>
<table class="table table-dark" border="1">>
<tr>
	<td>No</td>
	<td>Nama</td>
	<td>Alamat</td>
	<td>No Telpon</td>

</tr>
<?php
    $no=1;
	$query=mysqli_query($koneksi, "select * from barang");
	while($list_barang=mysqli_fetch_array($query))
	{
	?>
	<tr>
	<td><? echo $no++?></td>
	<td><? echo $list_barang ['nama'];?></td>
	<td><? echo $list_barang['alamat'];?></td>
	<td><? echo $list_barang['no_telp'];?></td>
	</tr>
	<?php } ?>
<table>
	