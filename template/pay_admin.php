<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pay</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

  <?php 
    include 'koneksi.php';
    session_start();
    $sql = 'select * from  siswa  join kelas on siswa.id_kelas=kelas.id_kelas where nisn =' .$_GET['nisn'];
    $result = mysqli_query($conn, $sql);
    $data=mysqli_fetch_assoc($result);    
  ?>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <h3>Edu Payment</h3>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Admin</h5>
                  <span>admin spp</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title"> Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="tampil_petugas.php">Data Petugas</a></li>
                <li class="nav-item"> <a class="nav-link" href="tampil_siswa.php">Data Siswa</a></li>
                <li class="nav-item"> <a class="nav-link" href="tampil_kelas.php">Data Kelas</a></li>
                <li class="nav-item"> <a class="nav-link" href="tampil_spp.php">Data SPP</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui" aria-expanded="false" aria-controls="ui">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Transaksi</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pembayaran_admin.php">Pembayaran</a></li>
                <li class="nav-item"> <a class="nav-link" href="tampil_siswa.php">Tunggakan</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="login.php"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="logout.php"> Logout </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">UI Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Testing</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Admin</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="nav-link, dropdown-item preview-item" href="logout.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log Out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
            </div>
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                  <div class="card-body">                 
                    <h4 class="card-title">Biodata <?= $data['nama'] ?></h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered verticle-middle table-hover table-striped  header-border zero-configuration">                       
                                <tr class="table table-dark px-2">
                                    <th>NISN</th>
                                    <td><?=$data['nisn']?></td>     
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td><?=$data['nama']?></td>     
                                </tr>
                                <tr class="table table-dark px-2">
                                    <th>Kelas</th>
                                    <td><?=$data['nama_kelas']?></td>     
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td><?=$data['alamat']?></td>     
                                </tr>
                                <tr class="table table-dark px-2">
                                    <th>No Telp</th>
                                    <td><?=$data['no_telp']?></td>     
                                </tr>
                                <tr>
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4>Data Pembayaran</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr align="center">
                            <th>No</th>
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Nominal</th>
                            <th>Jatuh Tempo</th>
                            <th>Keterangan</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody align="center">
                          <?php 
                            $qry_pembayaran= mysqli_query($conn ,"select * from pembayaran join spp on pembayaran.id_spp=spp.id_spp WHERE nisn = '$data[nisn]' ORDER BY jatuh_tempo ASC ");
                            $i=1;
                            while($data_pembayaran=mysqli_fetch_array($qry_pembayaran)){
                          ?>
                              <tr>
                                <td><?=$i?></td>
                                <td><?=$data_pembayaran['bulan_spp']?></td>
                                <td><?=$data_pembayaran['tahun_spp']?></td>
                                <td><?=$data_pembayaran['nominal']?></td>
                                <td><?=$data_pembayaran['jatuh_tempo']?></td>
                                <td align='center';
                                <?php
                                  $ket = 'LUNAS';
                                  if ($data_pembayaran['keterangan'] === $ket){
                                      echo "</a>";
                                      echo "<span class='badge badge-success px-4'>Lunas</span>";
                                  }else {
                                      echo "</a>";
                                      echo "<span class='badge badge-danger px-2'>Belum Lunas</span>";
                                      
                                  } echo "</td>
                                  <td>$data_pembayaran[tgl_bayar]</td>
                                  <td align='center'";
                                  $keterangan = 'LUNAS';
                                  if ($data_pembayaran['keterangan'] === $keterangan){
                                      echo "</a>";
                                      echo "<a class='badge badge-dark px-2 disabled'style='margin-right:5px'>Bayar<a>";
                                      echo "<a class='badge badge-info px-2' href='cetak_pembayaran.php?id_pembayaran=$data_pembayaran[id_pembayaran]&nisn=$data_pembayaran[nisn]' target='_BLANK'>Cetak</a> ";
                                  }else {
                                      echo "</a>";
                                      echo "<a class='badge badge-primary px-2' href='proses_pembayaran_admin.php?id_pembayaran=$data_pembayaran[id_pembayaran]&nisn=$data[nisn]'>Bayar</a> ";   
                                  }
			                            echo "</td>
                                  </tr>
                                  ";
                                  $i++;
                                }
                                ?>                                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>
