<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Barang</h4>
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
        <a href="#">Data Barang</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Daftar Barang</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">
            <a href="?page=barang&act=add" class="btn btn-primary btn-sm text-white"><i class="fa fa-plus"></i> Tambah</a>
          </div>
        </div>
        <div class="card-body">

          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>KD Barang</th>
                  <th>Nama Barang</th>
                  <th>Foto</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>#</th>
                  <th>Nama Barang</th>
                  <th>KD Barang</th>
                  <th>Foto</th>
                  <th>Opsi</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                $no = 1;
                $barang = mysqli_query($con, "SELECT * FROM barang");
                foreach ($barang as $g) { ?>
                  <tr>
                    <td><?= $no++; ?>.</td>

                    <td><?= $g['kd_barang']; ?></td>
                    <td><?= $g['nama_barang']; ?></td>
                    <td><img src="../assets/img/user/user.jpg" width="45" height="45"></td>
                    <td>
                      <a class="btn btn-info btn-sm" href="?page=barang&act=edit&id=<?= $g['kd_barang'] ?>"><i class="far fa-edit"></i></a>
                      <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data ??')" href="?page=barang&act=del&kd_barang=<?= $g['kd_barang'] ?>"><i class="fas fa-trash"></i>
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