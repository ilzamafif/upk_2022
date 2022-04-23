<?php
session_start();
include '../config/db.php';

if (!isset($_SESSION['admin'])) {
?> <script>
    alert('Maaf ! Anda Belum Login !!');
    window.location = '../index.php';
  </script>
<?php
}
?>


<?php

$id_login = @$_SESSION['admin'];

$sql = mysqli_query($con, "SELECT * FROM user WHERE id = '$id_login'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>User</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        "families": ["Lato:300,400,700,900"]
      },
      custom: {
        "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
        urls: ['../assets/css/fonts.min.css']
      },
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/atlantis.min.css">

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="../assets/css/demo.css">
</head>

<body>
  <div class="wrapper">
    <div class="main-header">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="blue">

        <a href="index.php" class="logo">
          <b class="text-white">Inventoy App</b>
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="icon-menu"></i>
          </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="icon-menu"></i>
          </button>
        </div>
      </div>
      <!-- End Logo Header -->

      <!-- Navbar Header -->
      <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

        <div class="container-fluid">
          <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

            <li class="nav-item dropdown hidden-caret">
              <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                <div class="avatar-sm">
                  <img src="../assets/img/user.png" alt="..." class="avatar-img rounded-circle">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-user animated fadeIn">
                <div class="dropdown-user-scroll scrollbar-outer">
                  <li>
                    <div class="user-box">
                      <div class="avatar-lg"><img src="../assets/img/user.png" alt="image profile" class="avatar-img rounded"></div>
                      <div class="u-text">
                        <h4><?= $data['username'] ?></h4>
                        <p class="text-muted"><?= $data['username'] ?></p>

                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#gantiPassword" class="collapsed">Ganti Password</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#pengaturanAkun" class="collapsed">Account Setting</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                  </li>
                </div>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>

    <!-- Sidebar -->
    <div class="sidebar sidebar-style-2">
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
          <div class="user">
            <div class="avatar-sm float-left mr-2">
              <img src="../assets/img/user.png" alt="..." class="avatar-img rounded-circle">
            </div>
            <div class="info">
              <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                <span>
                  <?= $data['username'] ?>
                  <span class="user-level"></span>
                  <span class="caret"></span>
                </span>
              </a>
              <div class="clearfix"></div>

              <div class="collapse in" id="collapseExample">
                <ul class="nav">

                  <li>
                    <a href="#" data-toggle="modal" data-target="#pengaturanAkun" class="collapsed">
                      <span class="link-collapse">Pengaturan Akun</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#gantiPassword" class="collapsed">
                      <span class="link-collapse">Ganti Password</span>
                    </a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <ul class="nav nav-primary">
            <li class="nav-item active">
              <a href="index.php" class="collapsed">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-section">
              <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
              </span>
              <h4 class="text-section">Main Utama</h4>
            </li>
            <li class="nav-item mt-3">
              <a href="?page=barang" class="collapsed">
                <i class="fas fa-folder-open"></i>
                <p>Barang</p>
              </a>
            </li>
            <li class="nav-item mt-3">
              <a href="?page=masuk-barang" class="collapsed">
                <i class="fas fa-file-export"></i>
                <p>Barang Masuk</p>
              </a>
            </li>
            <li class="nav-item mt-3">
              <a href="?page=keluar-barang" class="collapsed">
                <i class="fas fa-arrow-alt-circle-left"></i>
                <p>Barang Keluar</p>
              </a>
            </li>
            <li class="nav-item mt-3">
              <a href="?page=stok" class="collapsed">
                <i class="fas fa-layer-group"></i>
                <p>Stok</p>
              </a>
            </li>
            <li class="nav-item mt-3">
              <a href="?page=kelola-user" class="collapsed">
                <i class="fas fa-users"></i>
                <p>Kelola User</p>
              </a>
            </li>

            <li class="nav-item active mt-3">
              <a href="logout.php" class="collapsed">
                <i class="fas fa-arrow-alt-circle-left"></i>
                <p>Logout</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Sidebar -->

    <div class="main-panel">
      <div class="content">

        <!-- Halaman dinamis -->
        <?php
        error_reporting();
        $page = @$_GET['page'];
        $act = @$_GET['act'];

        if ($page == 'stok') {
          if ($act == '') {
            include 'modul/stok/data.php';
          } elseif ($act == 'add') {
            include 'modul/stok/add.php';
          } elseif ($act == 'edit') {
            include 'modul/stok/edit.php';
          } elseif ($act == 'del') {
            include 'modul/stok/del.php';
          } elseif ($act == 'proses') {
            include 'modul/stok/proses.php';
          }
        } elseif ($page == 'barang') {
          if ($act == '') {
            include 'modul/barang/data_barang.php';
          } elseif ($act == 'add') {
            include 'modul/barang/add.php';
          } elseif ($act == 'edit') {
            include 'modul/barang/edit.php';
          } elseif ($act == 'del') {
            include 'modul/barang/del.php';
          } elseif ($act == 'proses') {
            include 'modul/barang/proses.php';
          } elseif ($act == 'cetakPdf') {
            include 'modul/barang/cetak.php';
          }
        } elseif ($page == 'masuk-barang') {
          if ($act == '') {
            include 'modul/masuk-barang/data.php';
          } elseif ($act == 'add') {
            include 'modul/masuk-barang/add.php';
          } elseif ($act == 'edit') {
            include 'modul/masuk-barang/edit.php';
          } elseif ($act == 'del') {
            include 'modul/masuk-barang/del.php';
          } elseif ($act == 'proses') {
            include 'modul/masuk-barang/proses.php';
          }
        } elseif ($page == 'keluar-barang') {
          if ($act == '') {
            include 'modul/keluar-barang/data.php';
          } elseif ($act == 'add') {
            include 'modul/keluar-barang/add.php';
          } elseif ($act == 'edit') {
            include 'modul/keluar-barang/edit.php';
          } elseif ($act == 'del') {
            include 'modul/keluar-barang/del.php';
          } elseif ($act == 'proses') {
            include 'modul/keluar-barang/proses.php';
          }
        } elseif ($page == 'kelola-user') {
          if ($act == '') {
            include 'modul/kelola-user/data.php';
          } elseif ($act == 'add') {
            include 'modul/kelola-user/add.php';
          } elseif ($act == 'edit') {
            include 'modul/kelola-user/edit.php';
          } elseif ($act == 'del') {
            include 'modul/kelola-user/del.php';
          } elseif ($act == 'proses') {
            include 'modul/kelola-user/proses.php';
          }
        } elseif ($page == '') {
          include 'modul/home.php';
        } else {
          echo "<b>Tidak ada Halaman</b>";
        }


        ?>


        <!-- end -->

      </div>


      <!-- modal ganti password -->
      <div class="modal fade bs-example-modal-sm" id="gantiPassword" tabindex="-1" role="dialog" aria-labelledby="gantiPass">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="gantiPass">Ganti Password</h4>
            </div>
            <form action="" method="post">
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label">Password Lama</label>
                  <input name="pass" type="text" class="form-control" placeholder="Password Lama">
                </div>
                <div class="form-group">
                  <label class="control-label">Password Baru</label>
                  <input name="pass1" type="text" class="form-control" placeholder="Password Baru">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button name="changePassword" type="submit" class="btn btn-primary">Ganti Password</button>
              </div>
            </form>
            <?php
            if (isset($_POST['changePassword'])) {
              $passLama = $data['password'];
              $pass = $_POST['pass'];
              $newPass = $_POST['pass1'];

              if ($passLama == $pass) {
                $set = mysqli_query($con, "UPDATE user SET password='$newPass' WHERE id='$data[id]' ");
                echo "<script type='text/javascript'>
                alert('Password Telah berubah')
                window.location.replace('index.php'); 
                </script>";
              } else {
                echo "<script type='text/javascript'>
                    alert('Password Lama Tidak cocok')
                    window.location.replace('index.php'); 
                    </script>";
              }
            }
            ?>


          </div>
        </div>
      </div>

      <!--end modal ganti password -->

      <!-- Modal pengaturan akun-->
      <div class="modal fade" id="pengaturanAkun" tabindex="-1" role="dialog" aria-labelledby="akunAtur">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="akunAtur"><i class="fas fa-user-cog"></i> Pengaturan Akun</h3>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" value="<?= $data['username'] ?>">
                  <input type="hidden" name="id" value="<?= $data['id'] ?>">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button name="updateProfile" type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
            <?php
            if (isset($_POST['updateProfile'])) {
              $sqlEdit = mysqli_query($con, "UPDATE user SET username='$_POST[username]' WHERE id='$data[id]' ");
              
              if ($sqlEdit) {
                echo "<script>
                        alert('Sukses ! Data berhasil diperbarui');
                        window.location='index.php';
                        </script>";
              }
            }
            ?>
          </div>
        </div>
      </div>
      <!-- end modal pengaturan akun -->

      <footer class="footer">
        <div class="container">
          <div class="copyright ml-auto">
            &copy; <?php echo date('Y'); ?> Inventory (<a href="index.php">UPK Afif </a> | 2022)
          </div>
        </div>
      </footer>
    </div>

  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>

  <!-- jQuery UI -->
  <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


  <!-- Datatables -->
  <script src="../assets/js/plugin/datatables/datatables.min.js"></script>



  <!-- Sweet Alert -->
  <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

  <!-- Atlantis JS -->
  <script src="../assets/js/atlantis.min.js"></script>

  <!-- Atlantis DEMO methods, don't include it in your project! -->
  <script src="../assets/js/setting-demo.js"></script>

  <script>
    $(document).ready(function() {
      $('#basic-datatables').DataTable({});

      $('#multi-filter-select').DataTable({
        "pageLength": 5,
        initComplete: function() {
          this.api().columns().every(function() {
            var column = this;
            var select = $('<select class="form-control"><option value=""></option></select>')
              .appendTo($(column.footer()).empty())
              .on('change', function() {
                var val = $.fn.dataTable.util.escapeRegex(
                  $(this).val()
                );

                column
                  .search(val ? '^' + val + '$' : '', true, false)
                  .draw();
              });

            column.data().unique().sort().each(function(d, j) {
              select.append('<option value="' + d + '">' + d + '</option>')
            });
          });
        }
      });

      // Add Row
      $('#add-row').DataTable({
        "pageLength": 5,
      });

      var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

      $('#addRowButton').click(function() {
        $('#add-row').dataTable().fnAddData([
          $("#addName").val(),
          $("#addPosition").val(),
          $("#addOffice").val(),
          action
        ]);
        $('#addRowModal').modal('hide');

      });
    });
  </script>
</body>

</html>