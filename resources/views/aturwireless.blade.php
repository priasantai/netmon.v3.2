@extends('layout.master')
@section('title','Atur Wireless')

@section('main_content')
        <!-- Main content -->
        <section class="content">

          <!-- Horizontal Form -->
          <div class="card card-info col-sm-5">
            <div class="card-header">
              <h3 class="card-title">Station / Sektoral / P2p</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('radioupdate',$aturwireless->id)}}" method="post">@csrf
              <div class="card-body">
                <div class="form-group row">
                  <label for="" class="col-sm-5 col-form-label">Lokasi</label>
                  <div class="col-sm5">
                    <input type="text" name="lokasi" class="form-control" value="{{ $aturwireless->lokasi }}">
                    <div class="text-danger">
                      {{-- @error('lokasi') {{ $message }} @enderror --}}
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-5 col-form-label">Perangkat</label>
                  <div class="col-sm5">
                    <input type="text" name="perangkat" class="form-control" value="{{ $aturwireless->perangkat }}">
                    <div class="text-danger">
                      {{-- @error ('perangkat') {{ $message }} @enderror --}}
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-5 col-form-label">IP Address</label>
                  <div class="col-sm5">
                    <input type="text" name="ip" class="form-control" value="{{ $aturwireless->ip }}">
                    <div class="text-danger">
                      {{-- @error ('ip') {{ $message }} @enderror --}}
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-5 col-form-label">Ketinggian</label>
                  <div class="col-sm5">
                    <input type="text" name="ketinggian" class="form-control" value="{{ $aturwireless->ketinggian }}">
                    <div class="text-danger">
                      {{-- @error ('odp') {{ $message }} @enderror --}}
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="" class="col-sm-5 col-form-label">Bandwith</label>
                  <div class="col-sm5">
                    <input type="text" name="bandwith" class="form-control" value="{{ $aturwireless->bandwith }}">
                    <div class="text-danger">
                      @error ('bandwith') {{ $message }} @enderror
                    </div>
                  </div>
                </div>
              </div>

              <!-- /.card-body -->
              <div class="card-footer">
                <button class="btn btn-info">Perbarui Data</button>
                <a href="/radio" class="btn btn-success">Kembali</a>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
          <!-- /.card -->

      </section>
        <!-- /.content -->
@endsection
    
