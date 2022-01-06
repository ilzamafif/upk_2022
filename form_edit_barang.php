<?php

include_once('koneksi.php');

$kd_barang = $_GET['kd_barang'];

?>

<?php

$sql2     = "SELECT * FROM barang WHERE kd_barang='$kd_barang'";
$query     = mysqli_query($mysqli, $sql2);
$row     = mysqli_fetch_array($query);

?>

<form method="post" action="update_barang.php">

  <table align="center" width="500" border="0" cellpadding="2" cellspacing="2" bgcolor="#CCCCCC">
    <tr bgcolor="orange">
      <td height="21" colspan="3" bgcolor="#0099FF">
        <div align="center" class="style1"> Form Edit Barang</div>
      </td>
    </tr>
    <tr>
      <td width="23%">Id Barang</td>
      <td width="2%">:</td>
      <td width="75%"><input type="text" name="kd_barang" value="<?php echo $row['kd_barang']; ?>"></td>
    </tr>

    <tr>
      <td> Nama Barang </td>
      <td>:</td>
      <td><input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>"></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td><input type="hidden" name="kd_barang" value="<?php echo $row['kd_barang']; ?>">
        <input type="SUBMIT" name="SUBMIT" value="Simpan">
      </td>
    </tr>

  </table>
</form>