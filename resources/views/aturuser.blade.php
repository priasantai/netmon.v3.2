@extends('layout.master')
@section('title','Atur Akses')

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
            <form action="{{ route('userupdate',$aturuser->id)}}" method="post">@csrf
              <div class="card-body">
                <div class="form-group row">
                  <label for="" class="col-sm-5 col-form-label">Nama</label>
                  <div class="col-sm5">
                    <input type="text" name="name" class="form-control" value="{{ $aturuser->name }}">
                    <div class="text-danger">
                      {{-- @error('name') {{ $message }} @enderror --}}
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-5 col-form-label">Email</label>
                  <div class="col-sm5">
                    <input type="text" name="email" class="form-control" value="{{ $aturuser->email }}">
                    <div class="text-danger">
                      {{-- @error ('email') {{ $message }} @enderror --}}
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-5 col-form-label">Kantor</label>
                  <div class="col-sm5">
                    <input type="text" name="kantor" class="form-control" value="{{ $aturuser->kantor }}">
                    <div class="text-danger">
                      {{-- @error ('kantor') {{ $message }} @enderror --}}
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-5 col-form-label">Level</label>
                  <div class="col-sm5">
                    <input type="text" name="level" class="form-control" value="{{ $aturuser->level }}">
                    <div class="text-danger">
                      {{-- @error ('level') {{ $message }} @enderror --}}
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-5 col-form-label">Password</label>
                  <div class="col-sm5">
                    <input type="text" name="password" class="form-control">
                    <div class="text-danger">
                      @error ('password') {{ $message }} @enderror
                    </div>
                  </div>
                </div>
              </div>

              <!-- /.card-body -->
              <div class="card-footer">
                <button class="btn btn-info">Perbarui Data</button>
                <a href="/akses" class="btn btn-success">Kembali</a>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
          <!-- /.card -->

      </section>
        <!-- /.content -->
@endsection
    
