<?php
session_start();
include '../../config/db.php';
?>
<html>

<head>
  <title>Data Barang</title>
  <link rel="stylesheet" href="../../assets/library/bootstrap.min.css">
  <script src="../../assets/library/"></script>
  <script src="../../assets/library/popper.min.js"></script>
  <script src="../../assets/library/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../../assets/library/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="../../assets/library/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="../../assets/library/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="../../assets/library/jquery.dataTables.js"></script>
</head>

<body>
  <div class="container">
    <h2>Barang</h2>
    <div class="data-tables datatable-dark">

      <table id="mauexport" class="display table table-striped table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Kd Barang</th>
            <th>Nama Barang</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $barang = mysqli_query($con, "SELECT * FROM barang");
          foreach ($barang as $g) { ?>
            <tr>
              <td><?= $no++; ?>.</td>

              <td><?= $g['kd_barang']; ?></td>
              <td><?= $g['nama_barang']; ?></td>
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

  <script src="../../assets/library/jquery-3.5.1.js"></script>
  <script src="../../assets/library/jquery.dataTables.min.js"></script>
  <script src="../../assets/library/dataTables.buttons.min.js"></script>
  <script src="../../assets/library/buttons.flash.min.js"></script>
  <script src="../../assets/library/jszip.min.js"></script>
  <script src="../../assets/library/pdfmake.min.js"></script>
  <script src="../../assets/library/vfs_fonts.js"></script>
  <script src="../../assets/library/buttons.html5.min.js"></script>
  <script src="../../assets/library/buttons.print.min.js"></script>



</body>

</html>