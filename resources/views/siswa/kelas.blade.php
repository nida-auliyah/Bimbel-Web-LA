@extends('layout/layout')

@section('icon')
<a href="#" class=""> <i class="active fas fa-list-alt fa-5x" style="color:rgb(39, 168, 68)"></i> </a>
<h4>Kelas</h4> 
@endsection
@section('back')
<a href="/siswa" style="padding-left: 40%">
    <i class="fas fa-chevron-left"></i>
    Back
</a>    
@endsection
@section('container')
    <!-- Main content -->
    <div class="container">
        <div class="">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">                  
              <div class="info-box-content">
                <span class="info-box-number">Kelas A</span>
                <span class="info-box-text">Matematika SMP - Bu Dwi</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <div class="info-box-content">
                <span class="info-box-number">Kelas B</span>
                <span class="info-box-text">Biologi SMP - Pak Imam</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <div class="info-box-content">
                <span class="info-box-number">Kelas C</span>
                <span class="info-box-text">Fisika SMP - Bu Ana</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <div class="info-box-content">
                <span class="info-box-number">Kelas D</span>
                <span class="info-box-text">IPS SMP - Bu Ida</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row --> 
        
      </div><!-- /.container-fluid -->
@endsection