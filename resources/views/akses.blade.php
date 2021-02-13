@extends('layout.master')
@section('title','Akses')

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
              <!-- start table -->
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Admin / User</h3>
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
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Kantor</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1 ?>
                          @foreach ($user as $f)
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $f->name }}</td>
                            <td>{{ $f->email }}</td>
                            <td><span class="tag tag-success text text-primary">{{ $f->kantor }}</span></td>
                            <td>
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-{{$no}}">Info</button>
                                        <!-- modal-content -->
                                        <div class="modal fade" id="modal-{{$no}}">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h4 class="modal-title">Info Detail</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <p>Nama : {{ $f->name }}</p>
                                                <p>Level : {{ $f->level }}</p>
                                                <p>Email : {{ $f->email }}</p>
                                                <p>Kantor : {{ $f->kantor }}</p>
                                                <p>Status : Online</p>
                                              </div>
                                              <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>
                                            <!-- /.modal-content -->
                                          </div>
                                        </div>
                              <a href="/akses/aturuser/{{ $f->id }}" class="btn btn-secondary">Atur</a>
                              <a href="/aksesdelete/{{ $f->id }}" class="btn btn-danger">Hapus</a>
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
                <a href="/akses/tambahuser" class="btn btn-success">Tambah</a>
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
    