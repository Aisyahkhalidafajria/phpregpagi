<?php
include "koneksi.php";
?>
<table>
<tr>
    <td>No</td>
    <td>Nama Barang</td>
</tr>

<?php
    $no=1;
    $query=mysqli_query($koneksi, "select * from kategori");
    while($list_barang=mysqli_fetch_array($query))
    {
    ?>
    <tr>
    <td><?php echo $no++?></td>
    <td><?php echo $list_barang ['nama_barang'];?></td>
    </tr>
    <?php } ?>
</table>