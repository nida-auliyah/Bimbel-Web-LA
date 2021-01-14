@extends('layout/headerfooter')

@section('container')
<div class="container">
    <div class="row">
        <div class="mt-3" style="text-align: center">
            <h1>Sistem Informasi Bimbingan Belajar</h1>
            <h3>LKP Ar Risalah</h3>
        </div>
    </div>
</div>  
<section class="">        
    <div class="" style="margin:auto; padding-top:10%">
        <div class="col-lg-3 col-md-4 col-sm-4">
            <div class="servicebox text-center">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-left">
                        <a href="/profilsiswa" class=""> <i class="active fas fa-user fa-5x" style="color: rgb(23, 162, 183)"></i> </a>
                        <h4>Profil</h4>
                    </div>                    
                </div>
                <!-- service-icon -->
            </div>
            <!-- servicebox -->                
        </div>
        <!-- large-4 --> 
        <div class="col-lg-2 col-md-4 col-sm-4">
            <div class="servicebox text-center">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-left">
                        <a href="/kelassiswa" class=""> <i class="active fas fa-list-alt fa-5x" style="color:rgb(39, 168, 68)"></i> </a>
                        <h4>Kelas</h4>
                    </div>                    
                </div>
                <!-- service-icon -->
            </div>
            <!-- servicebox -->                
        </div>
        <!-- large-4 --> 
        <div class="col-lg-2 col-md-4 col-sm-4">
            <div class="servicebox text-center">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-left">
                        <a href="/jadwalsiswa" class=""> <i class="active fas fa-calendar-alt fa-5x" style="color: rgb(254, 192, 7)"></i> </a>
                        <h4>Jadwal</h4>
                    </div>                    
                </div>
                <!-- service-icon -->
            </div>
            <!-- servicebox -->                
        </div>
        <!-- large-4 --> 
        <div class="col-lg-2 col-md-4 col-sm-4">
            <div class="servicebox text-center">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-left">
                        <a href="/pembayaransiswa" class=""> <i class="active fas fa-credit-card fa-5x" style="color: rgb(220, 53, 70)"></i> </a>
                        <h4>Pembayaran</h4>
                    </div>                    
                </div>
                <!-- service-icon -->
            </div>
            <!-- servicebox -->                
        </div>
        <!-- large-4 --> 
        <div class="col-lg-3 col-md-4 col-sm-4">
            <div class="servicebox text-center">
                <div class="service-icon">
                    <div class="dm-icon-effect-1" data-effect="slide-left">
                        <a href="/presensisiswa" class=""> <i class="active fas fa-user-check fa-5x"style="color: rgb(23, 162, 183)"></i> </a>
                        <h4>Presensi</h4>
                    </div>                    
                </div>
                <!-- service-icon -->
            </div>
            <!-- servicebox -->                
        </div>
        <!-- large-4 -->   
    </div>  
      <!-- end container -->
      
  </section>
@endsection
