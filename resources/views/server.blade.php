@extends('layout.master')
@section('title','Server')

@section('main_content')
        <!-- Main content -->
        <section class="content">
          @if (session ('pesan'))   
          <div class="alert alert-success alert-dismissible">
          <h5><i class="icon fas fa-check"></i> Done!</h5>
          {{ session ('pesan')}}
          </div>
          @endif
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
              <!-- start table -->
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Master / Vm / Router</h3>
      
                      <div class="card-tools">  
                        <form class="form-inline ml-3">
                          <div class="input-group input-group-sm">
                            <input class="form-control float-right" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                              <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                              </button>
                            </div>
                          </div>
                        </form>                     
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Lokasi</th>
                            <th>Perangkat</th>
                            <th>Status</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1 ?>
                          @foreach ($server as $f)
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $f->lokasi }}</td>
                            <td>{{ $f->perangkat }}</td>
                            <td><span class="tag tag-success text text-primary">
                              <?php

                              $host=$f->ip;
                              $output=shell_exec('ping -n 1 '.$host);
                              if (strpos($output, 'Destination net unreachable') !== false) {
                                  echo "<button type='button' class='btn btn-danger btn-circle'>
                                  <i class='fa fa-power-off'></i>
                                  </button>&nbsp;<font color='#000000'> - <b>Trouble! Cek Master</b></font>";
                              }
                                  elseif(strpos($output, 'Request timed out') !== false)
                              {
                                  echo "<button type='button' class='btn btn-success btn-circle'>
                                  <i class='fa fa-question-circle'></i>
                                  </button>&nbsp;<font color='#CD5C5C'> - <b>Down</b></font>";
                              }
                                  elseif(strpos($output, 'TTL') !== false)
                              {
                                  echo "<button type='button' class='btn btn-success btn-circle'>
                                  <i class='fa fa-check'></i>
                                  </button>&nbsp;<font color='#BA55D3'> - <b>Up</b></font>";
                              }
                              else
                              {
                                  echo "<button type='button' class='btn btn-success btn-circle'>
                                  <i class='fa fa-question-circle'></i>
                                  </button>&nbsp;<font color='#5CB85C'> - <b>Trouble! Cek Master</b></font>";
                              }
                              
                              ?> 
                            </span></td>
                            <td>
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-{{ $no }}">Info</button>
                                <!-- modal-content -->
                              <div class="modal fade" id="modal-{{ $no }}">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Info Detail</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <p>Lokasi : {{ $f->lokasi }}</p>
                                      <p>Perangkat : {{ $f->perangkat }}</p>
                                      <p>IP Address : {{ $f->ip }}</p>
                                      <p>Rak : {{ $f->rak }}</p>
                                      <p>Bandwith : {{ $f->bandwith }}</p>
                                      {{-- <p>Status : Up</p>  --}}
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                              </div>
                              <!-- /.modal -->
                              <a href="/server/aturserver/{{ $f->id }}" class="btn btn-secondary">Atur</a>
                              <a href="/serverdelete/{{ $f->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
              <!-- endtable -->
              <td>
                <a href="/server/tambahserver" class="btn btn-success">Tambah</a>
              </td>
              </div>
            <!-- /.card-body -->
            <div class="card-footer">
              {{-- Footer --}}
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </section>
        <!-- /.content -->
@endsection



         
    
