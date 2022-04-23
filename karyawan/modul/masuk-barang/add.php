<?php
$nggolekkode = mysqli_query($con, "SELECT kd_masuk_barang from masuk_barang");
$datakode = mysqli_fetch_array($nggolekkode);
$jumlah_data = mysqli_num_rows($nggolekkode);
if ($datakode) {
  $nilaikode = substr($jumlah_data[0], 1);
  $kode = (int) $nilaikode;
  $kode = $jumlah_data + 1;
  $kd_masuk_barang = "MSK" . str_pad($kode, 4, "0", STR_PAD_LEFT);
} else {
  $kd_masuk_barang = "MSK0001";
}
?><div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Barang Masuk</h4>
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
        <a href="#">Data Barang Masuk</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Tambah Barang Masuk</a>
      </li>
    </ul>
  </div>
  <div class="row">

    <div class="col-lg-8">
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <h3 class="h4">Form Entry Barang Masuk</h3>
        </div>
        <div class="card-body">
          <form action="?page=masuk-barang&act=proses" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label>Kode Barang Masuk</label>
              <input name="kd_barang_masuk" type="text" class="form-control" value="<?= $kd_masuk_barang; ?>" disabled>
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
              <label>Tanggal Masuk</label>
              <input name="tgl_masuk" type="date" class="form-control" placeholder="">
            </div>

            <div class="form-group">
              <label>Jumlah Masuk</label>
              <input name="jumlah_masuk_barang" type="text" class="form-control" placeholder="Jumlah Masuk">
            </div>

            <div class="form-group">
              <label>Kondisi Barang</label>
              <input name="kondisi" type="text" class="form-control" placeholder="KD Barang">
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