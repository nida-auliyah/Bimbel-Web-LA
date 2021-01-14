
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('style/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('style/dist/css/adminlte.min.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ruda:400,900,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('stylesiswa/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('stylesiswa/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('stylesiswa/lib/prettyphoto/css/prettyphoto.css')}}" rel="stylesheet">
    <link href="{{asset('stylesiswa/lib/hover/hoverex-all.css')}}" rel="stylesheet">
    <link href="{{asset('stylesiswa/lib/jetmenu/jetmenu.css')}}" rel="stylesheet">
    <link href="{{asset('stylesiswa/lib/owl-carousel/owl-carousel.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('stylesiswa/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('stylesiswa/css/colors/blue.css')}}">
    <style type="text/css">
		.no-touch .logout-icon-effect-1 .logout-icon:hover {
            color: #ffffff;
        }

        .no-touch .logout-icon-effect-1 .logout-icon.active {}

        .logout-icon-medium {
            width: 80px !important;
            height: 80px !important;
            margin: 25px 15px !important;
            background: #3E4246 !important;
        }

        .services_lists_boxes_icon_none i:hover, .services_lists_boxes_icon i:hover {
            background: #ffffff;
            -webkit-transition: background 0.2s, color 0.2s;
            -moz-transition: background 0.2s, color 0.2;
            transition: background 0.2s, color 0.2s;
        }

        .logout-icon-medium, .logout-icon {
            display: inline-block;
            cursor: pointer;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            text-align: center;
            position: relative;
            z-index: 1;
            background: #2B2E31;
            color: #ffffff;
        }

        .logout-icon-medium:after, .logout-icon:after {
            pointer-events: none;
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            content: '';
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
        }

        .logout-icon-medium:before {
            line-height: 80px !important;
        }

        .logout-icon-medium:before, .logout-icon:before {
            speak: none;
            line-height: 57px;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            display: block;
            -webkit-font-smoothing: antialiased;
        }

        .logout-icon-effect-1 .logout-icon {
            -webkit-transition: background 0.2s, color 0.2s;
            -moz-transition: background 0.2s, color 0.2;
            transition: background 0.2s, color 0.2s;
        }

        .logout-icon-effect-1 .logout-icon:after {
            top: -7px;
            left: -7px;
            padding: 7px;
            -webkit-transition: -webkit-transform 0.2s, opacity 0.2s;
            -webkit-transform: scale(.8);
            -moz-transition: -moz-transform 0.2s, opacity 0.2s;
            -moz-transform: scale(.8);
            -ms-transform: scale(.8);
            transition: transform 0.2s, opacity 0.2s;
            transform: scale(.8);
            opacity: 0;
        }

        .no-touch .logout-icon-effect-1 .logout-icon:hover:after {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
	</style>
    <title>LKP Ar Risalah</title>
  </head>
  <body>           
    <section class="">        
        <div class="" style="margin:auto; padding-top:9%">            
            <!-- large-4 -->   
        </div>           
    </section>
    <section class="">
               
        <div class="" >            
            <div class="col-lg-3 col-md-4 col-sm-4" style="margin:auto; padding-top:10%">
                <div class="servicebox text-center">
                    <div class="service-icon">
                        <div class="dm-icon-effect-1" data-effect="slide-left">
                            @yield('icon')                          
                        </div>                                            
                    </div>                    
                    <!-- service-icon -->
                </div>
                <div class="container-fluid">
                    @yield('back')
                </div>                
                <!-- servicebox -->                
            </div>
            <!-- large-4 -->       
        </div>  
          <!-- end container -->
        @yield('container') 
        <!-- /.content -->              
    </section>    
    @extends('layout/logout')
</body>
</html>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <!-- jQuery -->
    <script src="http://127.0.0.1:8000/style/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="http://127.0.0.1:8000/style/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="http://127.0.0.1:8000/style/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="http://127.0.0.1:8000/style/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="http://127.0.0.1:8000/style/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="http://127.0.0.1:8000/style/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="http://127.0.0.1:8000/style/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="http://127.0.0.1:8000/style/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
        });
        
    });
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
