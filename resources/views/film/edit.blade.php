@extends('layouts.master')

@section('content')
 <div class="ml-3 mt-3">
 <div class="card card-primary ">
            <div class="card-header with-border ">
              <h3 class="card-title ">Ubah Data Film </h3>
            </div>
            
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/film/{{ $film->id }}" method="POST">
                @csrf
                @method('PUT')
              <div class="box-body">
                <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Judul Film</label>
                  <input type="text" class="form-control" id="judul" name="judul"  value="{{ old('judul', $film->judul) }}" placeholder="Masukkan Judul">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group ml-3 mr-3">
                  <label for="exampleInputPassword1">Deskripsi</label>
                  <input class="form-control" rows="3" id="desc" name="desc" value="{{ old('desc', $film->desc) }}" placeholder="Masukkan Deskripsi Film"></input>
                  @error('desc')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group ml-3 mr-3">
                  <label for="exampleInputPassword1">Tahun Film</label>
                  <input class="form-control" rows="3" id="tahun" name="tahun" value="{{ old('tahun', $film->tahun) }}" placeholder="Masukkan Tahun Film"></input>
                  @error('tahun')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-right  ml-3 mr-3 mb-3">
                  <a href="/film" class="btn btn-default ml-3">Kembali</a>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
              </div>
            </form>
          </div>
</div>
@endsection