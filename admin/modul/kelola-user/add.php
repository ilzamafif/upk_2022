<div class="page-inner">
  <div class="page-header">
    <h4 class="page-title">User</h4>
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
        <a href="#">Data User</a>
      </li>
      <li class="separator">
        <i class="flaticon-right-arrow"></i>
      </li>
      <li class="nav-item">
        <a href="#">Tambah User</a>
      </li>
    </ul>
  </div>
  <div class="row">

    <div class="col-lg-8">
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <h3 class="h4">Form Entry User</h3>
        </div>
        <div class="card-body">
          <form action="?page=kelola-user&act=proses" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label>Username</label>
              <input name="username" required type="text" class="form-control" placeholder="Username">
            </div>

            <div class="form-group">
              <label>Password</label>
              <!-- <span class="text-danger"><em>Email digunakan unruk Password default</em></span> -->
              <input name="password" required type="text" class="form-control" placeholder="password">
            </div>

            <div class="form-group">
              <label>Level</label>
              <input name="level" required type="text" class="form-control" placeholder="Level">
            </div>

            <!-- <div class="form-group">
              <p>
                <img src="../assets/img/user/<?= $data['foto']; ?>" class="img-fluid rounded-circle kotak" style="height: 65px; width: 65px;">
              </p>
              <label>Foto</label>
              <input type="file" name="foto">
            </div> -->
            <div class="form-group">
              <button name="saveUser" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
              <a href="javascript:history.back()" class="btn btn-warning"><i class="fa fa-chevron-left"></i> Batal</a>
            </div>


          </form>
        </div>
      </div>
    </div>
  </div>
</div>