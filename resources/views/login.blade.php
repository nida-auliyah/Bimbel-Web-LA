
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ar Risalah | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('style/plugins/fontawesome-free/css/all.min.cs')}}s">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('style/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('style/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo" style="padding-right: 20px">
        <img src="{{asset('style/dist/img/Capture3.png')}}" style="opacity: .8;width:20%;height:auto">
        <a href="/admin"><b>LKP Ar Risalah</b> </a>
    </div>  
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <h3 class="login-box-msg">Selamat Datang</h3>

        <form action="../../index3.html" method="post">
            <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Masukkan Email">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <select class="form-control">
                    <option value="0">Pilih Akses Level :</option>
                    <option value="1">Siswa</option>
                    <option value="2">Guru</option>
                    <option value="3">Admin</option>
                </select>
              </div>
            </div>
            <div class="row">                
                <!-- /.col -->
                <div class="col-4" style="margin:auto">
                    <button type="submit" class="btn btn-primary btn-block" >Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <p class="mb-4" style="text-align: center; padding-top:30px">
            <a>Siswa Baru ?</a>
            <a href="/register" class="text-center">Daftar Disini</a>
        </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('style/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('style/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('style/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
