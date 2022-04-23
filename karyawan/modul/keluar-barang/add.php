<?php
$nggolekkode = mysqli_query($con, "SELECT kd_keluar_barang from keluar_barang");
$datakode = mysqli_fetch_array($nggolekkode);
$jumlah_data = mysqli_num_rows($nggolekkode);
if ($datakode) {
  $nilaikode = substr($jumlah_data[0], 1);
  $kode = (int) $nilaikode;
  $kode = $jumlah_data + 1;
  $kd_keluar_barang = "KLR" . str_pad($kode, 4, "0", STR_PAD_LEFT);
} else {
  $kd_keluar_barang = "KLR0001";
}

?>

<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Barang Keluar</h4>
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
        <a href="#">Data Barang Keluar</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Tambah Barang Keluar</a>
      </li>
    </ul>
  </div>
  <div class="row">

    <div class="col-lg-8">
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <h3 class="h4">Form Entry Barang Keluar</h3>
        </div>
        <div class="card-body">
          <form action="?page=keluar-barang&act=proses" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label>Kode Barang Keluar</label>
              <input type="text" class="form-control" value="<?= $kd_keluar_barang; ?>" disabled>
            </div>

            <div class="form-group">
              <label>Kode Barang</label>
              <input name="kd_barang" type="text" class="form-control" placeholder="Kode Barang">
            </div>

            <div class="form-group">
              <label>Nama Barang</label>
              <input name="nama_barang" type="text" class="form-control" placeholder="Nama Barang">
            </div>

            <div class="form-group">
              <label>Tanggal Keluar</label>
              <input name="tgl_keluar" type="date" class="form-control" placeholder="">
            </div>

            <div class="form-group">
              <label>Jumlah Keluar</label>
              <input name="jumlah_keluar_barang" type="text" class="form-control" placeholder="Jumlah Keluar">
            </div>

            <div class="form-group">
              <label>Keperluan Barang</label>
              <input name="keperluan" type="text" class="form-control" placeholder="Keperluan">
            </div>

            <div class="form-group">
              <button name="saveBarang" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              <a href="javascript:history.back()" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Batal</a>
            </div>


          </form>
        </div>
      </div>
    </div>
  </div>
</div>