<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Keluar Barang</h4>
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
        <a href="#">Data Keluar Barang</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Daftar Keluar Barang</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">
            <a href="?page=keluar-barang&act=add" class="btn btn-primary btn-sm text-white"><i class="fa fa-plus"></i> Tambah</a>
            <a href="modul/cetakBarangKeluar.php" class="btn btn-primary btn-sm text-white">Cetak Dan Download</a>
          </div>
        </div>
        <div class="card-body">

          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover">
              <thead>
                <th>#</th>
                <th>Keluar Barang </th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Keperluan</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $kelolakeluarbarang = mysqli_query($con, "SELECT * FROM keluar_barang");
                foreach ($kelolakeluarbarang as $g) { ?>
                  <tr>
                    <td><?= $no++; ?>.</td>

                    <td><?= $g['kd_keluar_barang']; ?></td>
                    <td><?= $g['kd_barang']; ?></td>
                    <td><?= $g['nama_barang']; ?></td>
                    <td><?= $g['jumlah_keluar_barang']; ?></td>
                    <td><?= $g['keperluan']; ?></td>
                    <td>
                      <a class="btn btn-info btn-sm" href="?page=keluar-barang&act=edit&id=<?= $g['kd_keluar_barang'] ?>"><i class="far fa-edit"></i></a>
                      <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data ??')" href="?page=keluar-barang&act=del&kd_keluar_barang=<?= $g['kd_keluar_barang'] ?>"><i class="fas fa-trash"></i>
                      </a>
                    </td>
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