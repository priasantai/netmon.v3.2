@extends('layout.master')
@section('title','Tambah User')

@section('main_content')
        <!-- Main content -->
        <section class="content">

            <!-- Horizontal Form -->
            <div class="card card-info col-sm-5">
              <div class="card-header">
                <h3 class="card-title">Admin / User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/akses/create" method="post">@csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="" class="col-sm-5 col-form-label">Name</label>
                    <div class="col-sm5">
                      <input type="text" name="name" class="form-control">
                      <div class="text-danger">
                        @error('name') {{ $message }} @enderror
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-5 col-form-label">Email</label>
                    <div class="col-sm5">
                      <input type="email" name="email" class="form-control">
                      <div class="text-danger">
                        @error ('email') {{ $message }} @enderror
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-5 col-form-label">Password</label>
                    <div class="col-sm5">
                      <input type="password" name="password" class="form-control">
                      <div class="text-danger">
                        @error ('password') {{ $message }} @enderror
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-5 col-form-label">Level</label>
                    <div class="col-sm5">
                      <input type="text" name="level" class="form-control">
                      <div class="text-danger">
                        @error ('level') {{ $message }} @enderror
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-5 col-form-label">Kantor</label>
                    <div class="col-sm5">
                      <input type="text" name="kantor" class="form-control">
                      <div class="text-danger">
                        @error ('kantor') {{ $message }} @enderror
                      </div>
                    </div>
                  </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <button class="btn btn-info">Tambah Data</button>
                  <a href="/server" class="btn btn-success">Batal</a>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
@endsection
    
