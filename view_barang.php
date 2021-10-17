<?php
include "koneksi.php";
?>
<table>
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
    <td><?php echo $no++?></td>
    <td><?php echo $list_barang ['nama'];?></td>
    <td><?php echo $list_barang ['alamat'];?></td>
    <td><?php echo $list_barang ['no_telp'];?></td>
    </tr>
    <?php } ?>
</table>