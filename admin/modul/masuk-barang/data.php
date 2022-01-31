<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Masuk Barang</h4>
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
        <a href="#">Data Masuk Barang</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Daftar Masuk Barang</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">
            <a href="?page=masuk-barang&act=add" class="btn btn-primary btn-sm text-white"><i class="fa fa-plus"></i> Tambah</a>
          </div>
        </div>
        <div class="card-body">

          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Kode </th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Jumlah Masuk Barang</th>
                  <th>Kondisi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $kelolamasukbarang = mysqli_query($con, "SELECT * FROM masuk_barang");
                foreach ($kelolamasukbarang as $g) { ?>
                  <tr>
                    <td><?= $no++; ?>.</td>

                    <td><?= $g['kd_masuk_barang']; ?></td>
                    <td><?= $g['kd_barang']; ?></td>
                    <td><?= $g['nama_barang']; ?></td>
                    <td><?= $g['jumlah_masuk_barang']; ?></td>
                    <td><?= $g['kondisi']; ?></td>
                    <td>
                      <a class="btn btn-info btn-sm" href="?page=masuk-barang&act=edit&id=<?= $g['kd_masuk_barang'] ?>"><i class="far fa-edit"></i></a>
                      <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data ??')" href="?page=masuk-barang&act=del&kd_masuk_barang=<?= $g['kd_masuk_barang'] ?>"><i class="fas fa-trash"></i>
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