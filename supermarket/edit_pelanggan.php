<?php
include ("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from pelanggan");
include "header.php";
?>
</br>
<a href="input_pelanggan.php" class="btn btn-danger">Tambah Barang</a>
<table class="table table-bordered" border="1">
  <tr>
    <td>id_pelanggan</td>
    <td>id_pelanggan</td>
    <td>no_telp</td>
    <td>status</td>
    <td colspan="4">Action</td>
  </tr>
  <?php
  $no=1;
  while($tampil=mysqli_fetch_array($query_view)){?>
    <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $tampil ['id_pelanggan'];?></td>
      <td><?php echo $tampil ['id_pelanggan'];?></td>
      <td><?php echo $tampil ['no_telp'];?></td>
      <td><?php echo $tampil ['status'];?></td>
      <td><a href="edit_barang.php?id_pelanggan=<?php echo $tampil ['id_pelanggan'];?>">Edit</a></td>
      <td><a href="hapus_barang.php?id_pelanggan=<?php echo $tampil ['id_pelanggan'];?>">hapus</a></td>
  </tr>
<?php }?>

</table>
<?php
include "footer.php";
?>