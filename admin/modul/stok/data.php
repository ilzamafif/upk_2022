<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Stok</h4>
    <ul class="breadcrumbs">
      <li class="nav-home">
        <a href="#">
          <i class="flaticon-home"></i>
        </a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Data Stok</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Daftar Stok</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">
            <a href="modul/cetakStok.php" class="btn btn-primary btn-sm text-white">Cetak Dan Download</a>
          </div>
        </div>
        <div class="card-body">

          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover">
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

                    <td><?= $g['kd_barang']; ?></td>
                    <td><?= $g['nama_barang']; ?></td>
                    <td><?= $g['jumlah_masuk_barang']; ?></td>
                    <td><?= $g['jumlah_keluar_barang']; ?></td>
                    <td><?= $g['total_barang']; ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>



  </div>
</div>