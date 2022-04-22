<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projek 1 Fadhlurrahman</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <style>
    #bmipasien {
      color: #dc3545;
    }

    #fotocowo,
    #fotocewe {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 200px;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="projek.php" class="nav-link active">Kalkulator dan Data BMI Pasien</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <span class="brand-text font-weight-light">Project 1 UTS</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="fadel.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Fadhlurrahman Muhamamd Wafii</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Praktikum
                  <i class="right far fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Praktikum 1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="praktikum2.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Praktikum 2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="praktikum3.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Praktikum 3</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="praktikum4.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Praktikum 4</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="praktikum5.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Praktikum 5</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">Tugas Projek</li>
            <li class="nav-item">
              <a href="projek.php" class="nav-link active">
                <i class="nav-icon fas fa-edit"></i>
                <p>Kalkulator BMI</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Data BMI Pasien dan Kalkulator BMI</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Tugas Projek</a></li>
                <li class="breadcrumb-item active">Kalkulator BMI dan Data Pasien</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <?php
      class Pasien
      {
        public $kodePasien;
        public $nama;
        public $tmp_lahir;
        public $tgl_lahir;
        public $gender;

        public function __construct($kode, $nama, $tmp_lahir, $tgl_lahir, $gender)
        {
          $this->kodePasien = $kode;
          $this->nama = $nama;
          $this->tmp_lahir = $tmp_lahir;
          $this->tgl_lahir = $tgl_lahir;
          $this->gender = $gender;
        }
      }

      class Bmi
      {
        public $nilaiBmi;
        public $berat;
        public $tinggi;

        public function __construct($berat, $tinggi)
        {
          $this->berat = $berat;
          $this->tinggi = $tinggi;
        }

        public function nilaiBMI()
        {
          $tinggi_meter = $this->tinggi / 100;
          $this->bmi = ($this->berat / pow($tinggi_meter, 2));
          return number_format($this->bmi, 2, '.', ' ');
        }

        public function status()
        {
          if ($this->bmi < 18.5) {
            $this->statusBmi = 'Kekurangan Berat Badan';
          } elseif ($this->bmi < 24.9 && $this->bmi > 18.5) {
            $this->statusBmi = 'Normal (Ideal)';
          } elseif ($this->bmi < 29.9 && $this->bmi > 25) {
            $this->statusBmi = 'Kelebihan Berat Badan';
          } else {
            $this->statusBmi = 'Kegemukan (Obesitas)';
          }
          return $this->statusBmi;
        }
      }

      class BmiPasien
      {
        public $tgl_periksa;
        public $pasien;
        public $bmi;
        public $nilaibmi;
        public $statusbmi;

        function __construct($tgl_periksa, $pasien, $bmi, $nilaibmi, $statusbmi)
        {
          $this->tgl_periksa = $tgl_periksa;
          $this->pasien = $pasien;
          $this->bmi = $bmi;
          $this->nilaibmi = $nilaibmi;
          $this->statusbmi = $statusbmi;
        }
      }
      $pasien1 = new Pasien('P001', 'Ahmad', 'Depok', '02-01-1998', 'L');
      $bmi1 = new Bmi(69.8, 169);
      $bmi1->nilaiBMI();
      $bmi1->status();
      $bmiPasien1 = new BmiPasien('01-10-2022', $pasien1, $bmi1, $bmi1->nilaiBMI(), $bmi1->status());

      $pasien2 = new Pasien('P002', 'Rina', 'Jakarta', '12-10-2000', 'P');
      $bmi2 = new Bmi(55.3, 165);
      $bmi2->nilaiBMI();
      $bmi2->status();
      $bmiPasien2 = new BmiPasien('01-10-2022', $pasien2, $bmi2, $bmi2->nilaiBMI(), $bmi2->status());

      $pasien3 = new Pasien('P003', 'Lutfi', 'Makassar', '12-10-2000', 'L');
      $bmi3 = new Bmi(45, 171);
      $bmi3->nilaiBMI();
      $bmi3->status();
      $bmiPasien3 = new BmiPasien('02-10-2022', $pasien3, $bmi3, $bmi3->nilaiBMI(), $bmi3->status());

      $pasien4 = new Pasien('P004', 'Uchia Tsubasa', 'Nagasaki', '20-02-2004', 'L');
      $bmi4 = new Bmi(120, 160);
      $bmi4->nilaiBMI();
      $bmi4->status();
      $bmiPasien4 = new BmiPasien('03-10-2022', $pasien4, $bmi4, $bmi4->nilaiBMI(), $bmi4->status());

      $arBmiPasien = [$bmiPasien1, $bmiPasien2, $bmiPasien3, $bmiPasien4];
      ?>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card-header">
                <h3 class="card-title">Kalkulator BMI</h3>
              </div>
              <div class="card-body p-0">
                <form method='POST' action="projek.php">
                  <div class="form-group row">
                    <label for="namapasien" class="col-4 col-form-label">Nama</label>
                    <div class="col-8">
                      <input id="namapasien" name="namapasien" placeholder="Nama" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tmp_lahir_pasien" class="col-4 col-form-label">Tempat Lahir</label>
                    <div class="col-8">
                      <input id="tmp_lahir_pasien" name="tmp_lahir_pasien" placeholder="Tempat Lahir" type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tgl_lahir_pasien" class="col-4 col-form-label">Tanggal Lahir</label>
                    <div class="col-8">
                      <input id="tgl_lahir_pasien" name="tgl_lahir_pasien" placeholder="10-10-2010" type="text" class="form-control" aria-describedby="tgl_lahir_pasienHelpBlock">
                      <span id="tgl_lahir_pasienHelpBlock" class="form-text text-muted">dd-mm-yyyy</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-4">Gender</label>
                    <div class="col-8">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender_pasien" id="gender_pasien_0" type="radio" class="custom-control-input" value="L">
                        <label for="gender_pasien_0" class="custom-control-label">Laki-Laki</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender_pasien" id="gender_pasien_1" type="radio" class="custom-control-input" value="P">
                        <label for="gender_pasien_1" class="custom-control-label">Perempuan</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="berat_badan_pasien" class="col-4 col-form-label">Berat Badan</label>
                    <div class="col-8">
                      <div class="input-group">
                        <input id="berat_badan_pasien" name="berat_badan_pasien" placeholder="Berat Badan" type="text" class="form-control" aria-describedby="berat_badan_pasienHelpBlock">
                        <div class="input-group-append">
                          <div class="input-group-text">kg</div>
                        </div>
                      </div>
                      <span id="berat_badan_pasienHelpBlock" class="form-text text-muted">Bulatkan 2 angka dibelakang koma bila pecahan</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tinggi_badan_pasien" class="col-4 col-form-label">Tinggi Badan</label>
                    <div class="col-8">
                      <div class="input-group">
                        <input id="tinggi_badan_pasien" name="tinggi_badan_pasien" placeholder="Tinggi Badan" type="text" class="form-control" aria-describedby="tinggi_badan_pasienHelpBlock">
                        <div class="input-group-append">
                          <div class="input-group-text">cm</div>
                        </div>
                      </div>
                      <span id="tinggi_badan_pasienHelpBlock" class="form-text text-muted">Bulatkan 2 angka dibelakang koma bila pecahan</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-4 col-8">
                      <input name="submit" type="submit" value="Periksa" class="btn btn-primary">
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
        <?php


        $submit = $_POST["submit"];
        if (!empty($submit)) {
          $namapasien = $_POST["namapasien"];
          $tmp_lahir_pasien = $_POST["tmp_lahir_pasien"];
          $tgl_lahir_pasien = $_POST["tgl_lahir_pasien"];
          $gender_pasien = $_POST["gender_pasien"];
          $berat_badan_pasien = $_POST["berat_badan_pasien"];
          $tinggi_badan_pasien = $_POST["tinggi_badan_pasien"];

          $pasien5 = new Pasien('P005', $namapasien, $tmp_lahir_pasien, $tgl_lahir_pasien, $gender_pasien);
          $bmi5 = new Bmi($berat_badan_pasien, $tinggi_badan_pasien);
          $bmi5->nilaiBMI();
          $bmi5->status();
          $bmiPasien5 = new BmiPasien('04-10-2022', $pasien5, $bmi5, $bmi5->nilaiBMI(), $bmi5->status());
          array_push($arBmiPasien, $bmiPasien5);

          if ($gender_pasien == "L") {
            echo "<img src=cowo.png alt=# class=img-fluid id=fotocowo>";
            echo "<div class=card><p class=text-center>Pasien Dengan Nama :</p>";
            echo "<h4 class=text-center>$namapasien (P005)</h4>";
            echo "<h4 class=text-center>$tmp_lahir_pasien $tgl_lahir_pasien</h4>";
            echo '<p class=text-center>BMI Untuk Laki-Laki</p>';
            echo "<h2 class=text-center id=bmipasien>" . $bmi5->status() . "</h2>";
            echo "<p class=text-center>Tinggi Badan $tinggi_badan_pasien (cm) Berat Badan $berat_badan_pasien (kg)</p>";
            echo '<p class=text-center>BMI Anda : ' . $bmi5->nilaiBMI() . '</p>';
            echo '<p class=text-center>Pastikan asupan kalori sesuai dengan kebutuhan kalori harian & konsumsi makanan sehat</p></div>';
          } else {
            echo "<img src=cewe.png alt=# class=img-fluid id=fotocewe>";
            echo "<div class=card><p class=text-center>Pasien Dengan Nama :</p>";
            echo "<h4 class=text-center>$namapasien (P005)</h4>";
            echo "<h4 class=text-center>$tmp_lahir_pasien $tgl_lahir_pasien</h4>";
            echo '<p class=text-center>BMI Untuk Perempuan</p>';
            echo "<h2 class=text-center id=bmipasien>" . $bmi5->status() . "</h2>";
            echo "<p class=text-center>Tinggi Badan $tinggi_badan_pasien (cm) Berat Badan $berat_badan_pasien (kg)</p>";
            echo '<p class=text-center>BMI Anda : ' . $bmi5->nilaiBMI() . '</p>';
            echo '<p class=text-center>Pastikan asupan kalori sesuai dengan kebutuhan kalori harian & konsumsi makanan sehat</p></div>';
          }
          // echo "<div class=card><p class=text-center>Pasien Dengan Nama :</p>";
          // echo "<h4 class=text-center>$namapasien (P005)</h4>";
          // echo "<h4 class=text-center>$tmp_lahir_pasien $tgl_lahir_pasien</h4>";
          // echo '<p class=text-center>BMI Untuk ';
          // if ($gender_pasien == "L") {
          //   echo "Laki-Laki";
          // } else {
          //   echo "Perempuan";
          // }
          // echo "<h2 class=text-center id=bmipasien>" . $bmi5->status() . "</h2>";
          // echo "<p class=text-center>Tinggi Badan $tinggi_badan_pasien (cm) Berat Badan $berat_badan_pasien (kg)</p>";
          // echo '<p class=text-center>BMI Anda : ' . $bmi5->nilaiBMI() . '</p>';
          // echo '<p class=text-center>Pastikan asupan kalori sesuai dengan kebutuhan kalori harian & konsumsi makanan sehat</p></div>';
        }
        ?>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Catatan Data BMI Pasien</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal Pemeriksaan</th>
                      <th>Kode</th>
                      <th>Nama</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Gender</th>
                      <th>Berat Badan (kg)</th>
                      <th>Tinggi Badan (cm)</th>
                      <th>Nilai BMI</th>
                      <th>Status BMI</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $nomor = 1;
                    foreach ($arBmiPasien as $obj) {
                    ?>
                      <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $obj->tgl_periksa ?></td>
                        <td><?= $obj->pasien->kodePasien ?></td>
                        <td><?= $obj->pasien->nama ?></td>
                        <td><?= $obj->pasien->tmp_lahir ?></td>
                        <td><?= $obj->pasien->tgl_lahir ?></td>
                        <td><?= $obj->pasien->gender ?></td>
                        <td><?= $obj->bmi->berat ?></td>
                        <td><?= $obj->bmi->tinggi ?></td>
                        <td><?= $obj->nilaibmi ?></td>
                        <td><?= $obj->statusbmi ?></td>
                      </tr>
                    <?php
                      $nomor++;
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
    <div class="container-fluid">

    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0-rc
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>