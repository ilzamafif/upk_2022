<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">Kelola Masuk Barang</h4>
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
        <a href="#">Data Kelola Masuk Barang</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Daftar Kelola Masuk Barang</a>
      </li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title">
            <a href="?page=kelola-masuk barang&act=add" class="btn btn-primary btn-sm text-white"><i class="fa fa-plus"></i> Tambah</a>
          </div>
        </div>
        <div class="card-body">

          <div class="table-responsive">
            <table id="basic-datatables" class="display table table-striped table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Masuk Barangname</th>
                  <th>Password</th>
                  <th>Level</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>#</th>
                  <th>Masuk Barangname</th>
                  <th>Password</th>
                  <th>Level</th>
                  <th>Opsi</th>
                </tr>
              </tfoot>
              <tbody>
                <?php
                $no = 1;
                $kelolamasukbarang = mysqli_query($con, "SELECT * FROM stok");
                foreach ($kelolamasukbarang as $g) { ?>
                  <tr>
                    <td><?= $no++; ?>.</td>

                    <td><?= $g['kode_barang']; ?></td>
                    <td><?= $g['password']; ?></td>
                    <td><?= $g['level']; ?></td>
                    <td>
                      <a class="btn btn-info btn-sm" href="?page=masuk-barang&act=edit&id=<?= $g['masuk-barang'] ?>"><i class="far fa-edit"></i></a>
                      <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus Data ??')" href="?page=kelola-masuk barang&act=del&masuk barangname=<?= $g['masuk barangname'] ?>"><i class="fas fa-trash"></i>
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