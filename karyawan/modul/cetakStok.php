<?php
session_start();
include '../../config/db.php';
?>
<html>

<head>
  <title>Data Stok</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
  <div class="container">
    <h2>Stok</h2>
    <div class="data-tables datatable-dark">

      <table id="mauexport" class="display table table-striped table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah masuk Barang</th>
            <th>Jumlah Keluar Barang</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $kelolastok = mysqli_query($con, "SELECT * FROM stok");
          foreach ($kelolastok as $g) { ?>
            <tr>
              <td><?= $no++; ?>.</td>

              <td><?= $g['nama_barang']; ?></td>
              <td><?= $g['kd_barang']; ?></td>
              <td><?= $g['jumlah_masuk_barang']; ?></td>
              <td><?= $g['jumlah_keluar_barang']; ?></td>
              <td><?= $g['total_barang']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>

    </div>
  </div>

  <script>
    $(document).ready(function() {
      $('#mauexport').DataTable({
        dom: 'Bfrtip',
        buttons: [
          'excel', 'pdf', 'print'
        ]
      });
    });
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>

</html>