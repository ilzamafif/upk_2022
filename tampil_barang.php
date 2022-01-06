<?php include "koneksi.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=1`, initial-scale=1.0">
  <title>Data Barang</title>
</head>

<body>
  <div class="main">
    <div class="konten">
      <h4>Data Barang</h4>

      <form action="" method="get">
        <label>Cari nama Barang:</label>
        <input type="text" name="cari" placeholder="berdasarkan nama">
        <input type="submit" value="cari">
      </form>

      <?php

      if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];
        echo "<b>Hasil Pencarian:" . $cari . "</b>";
      }

      ?>

      <table border="1" class="table1">
        <tr>
          <th>Kode Barang</th>
          <th>Nama Barang</th>
          <th>Aksi Barang</th>
        </tr>


        <?php

        if (isset($_GET['cari'])) {
          $cari = $_GET['cari'];
          $sql = $mysqli->query("SELECT * FROM barang where nama_barang like'%" . $cari . "%' OR kd_barang like '%" . $cari . "' ");
        } else {
          $sql = $mysqli->query("SELECT * FROM barang order by kd_barang ASC");
        }

        //jika belum ada data

        if ($sql->num_rows < 1) { ?>

          <tr>
            <td colspan="8">
              <center>Tidak ada Data</center>
            </td>
          </tr>

          <?php } else {

          $no = 1;
          while ($row = $sql->fetch_assoc()) { ?>

            <tr>
              <td><?= $row['kd_barang']; ?></td>
              <td><?= $row['nama_barang']; ?></td>

              <td>
                <a href="form_edit_barang.php?kd_barang=<?= $row['kd_barang']; ?>">
                  <input type="button" name="edit" value="edit">
                </a>&nbsp
                <a href="hapus_barang.php?kd_barang=<?= $row['kd_barang']; ?>" onclick="return confirm ('apakah anda yakin ingin menghapus data barang?')"><input type="button" name="hapus" value="hapus"></a>
              </td>
            </tr>

            <?php $no++; ?>

          <?php } //endwhile 
          ?>

        <?php } //end if 
        ?>

      </table>

      <button class="btn" onclick="location.href='cetakbarang.php'">Cetak Laporan Barang</button>
      <button class="btn" onclick="location.href='downloadbarang.php'">download Laporan Barang</button>

    </div>
  </div>

</body>

</html>