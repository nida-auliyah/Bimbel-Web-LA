
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin LKP Ar Risalah</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('style/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('style/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('style/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('style/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('style/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('style/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('style/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('style/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="{{asset('style/plugins/fullcalendar/main.min.css')}}">
  <link rel="stylesheet" href="{{asset('style/plugins/fullcalendar-daygrid/main.min.css')}}">
  <link rel="stylesheet" href="{{asset('style/plugins/fullcalendar-timegrid/main.min.css')}}">
  <link rel="stylesheet" href="{{asset('style/plugins/fullcalendar-bootstrap/main.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background: rgb(41, 23, 110)">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" style="color:lightgray" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{asset('style/dist/img/Capture1.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .9">
        <span class="brand-text font-weight-light">LKP Ar Risalah</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="/admin" class="nav-link" >
                  <i class="nav-icon fas fa-th"></i>
                  <p> Home </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/datasiswa" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p> Data Siswa </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/dataguru" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p> Data Guru </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/datakelas" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p> Data Kelas </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/datajadwal" class="nav-link">
                  <i class="nav-icon far fa-calendar-alt"></i>
                  <p> Data Jadwal </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/datapresensisiswa" class="nav-link">
                  <i class="nav-icon far fa-check-square"></i>
                  <p> Presensi Siswa </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/datapresensiguru" class="nav-link">
                  <i class="nav-icon far fa-check-square"></i>
                  <p> Presensi Guru </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p> Logout </p>
                </a>
              </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    @yield('container')

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@yield('footer')

</body>
</html>
