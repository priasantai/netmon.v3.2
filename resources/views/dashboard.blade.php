@extends('layout.master')
@section('title','Monitor')

@section('main_content')
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
            <div class="container-fluid">
              <!-- Small boxes (Stat box) -->
              <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>{{ $fo }}</h3>
            
                      <p>FO Links</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-sitemap"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>{{$wireless}}</h3>
            
                      <p>WIRELESS Links</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-wifi"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>{{ $server}}</h3>
            
                      <p>SERVER</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-hdd"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>{{$user}}</h3>
            
                      <p>USER</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
              </div>
            <!-- /.card-body -->
            <div class="card-footer">
              * Penambahan info ODP dan mac perangkat yang terdaftar pada OLT<br>
              * Pengaturan AKSES user berdasarkan level<br>
              * Halaman monitoring depan menggunakan VueJS<br>
              * Perbaikan pada API<br>
              * Perbaikan pada Paginate<br>
              * Proses cheking link dan perangkat lebih cepat<br>
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
    
        </section>
        <!-- /.content -->
@endsection
    
