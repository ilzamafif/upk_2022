<?php include 'koneksi.php'; ?>

<html>

<head>
  <title>Input barang</title>
  <style type="text/css">
    .style2 {
      font-size: 14px;
      font-weight: bold;
    }

    .style3 {
      color: #FFFFFF;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <fieldset>
    <form method="post" action="">
      <table align="center" width="500" border="0" cellpadding="2" cellspacing="2" bgcolor="#cccccc">
        <tr bgcolor="orange">
          <td height="21" colspan="3" bgcolor="#0099FF">
            <div align="center" class="style1">Form Tambah barang</div>
          </td>
        </tr>

        <tr>
          <td>KD Barang</td>
          <td>:</td>
          <td><input type="text" name="kd_barang" placeholder="KD barang" /></td>
        </tr>

        <tr>
          <td>Nama Barang</td>
          <td>:</td>
          <td><input type="text" name="nama_barang" placeholder="nama Barang" /></td>
        </tr>


        <tr>
          <td align="center">
            <input type="SUBMIT" name="add" value="Simpan">
            <input type="RESET" name="batal" value="Batal">
          </td>
        </tr>

      </table>
    </form>
  </fieldset>

  <div>
    <?php if (isset($_POST['add'])) {
      $kd_barang                = $_POST['kd_barang'];
      $nama_barang                = $_POST['nama_barang'];

      $add = mysqli_query($mysqli, "INSERT INTO barang VALUES('$kd_barang','$nama_barang')");
      if ($add) {
        echo 'Anda berhasil menambah barang baru';
        header('location:admin.php');
      } else {
        echo 'Ada Sesuatu Yang Salah';
      }
    }


    ?>
  </div>

</body>

</html>