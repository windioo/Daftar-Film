@extends('layouts.master')

@section('content')
<div class="ml-3 mt-3">
 <div class="card card-primary ">
            <div class="card-header with-border bg-primary text-light ">
              <h3 class="card-title ">Data Film Baru</h3>
            </div>
            
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/film" method="POST">
                @csrf
              <div class="box-body">
                <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Judul Film</label>
                  <input type="text" class="form-control" id="judul" name="judul"  value="{{ old('judul','') }}" placeholder="Masukkan Judul Film">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group ml-3 mr-3">
                  <label for="exampleInputPassword1">Desc Film</label>
                  <textarea class="form-control" rows="3" id="desc" name="desc" value="{{ old('desc','') }}" placeholder="Masukkan Desc Film"></textarea>
                  @error('desc')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group ml-3 mr-3 mt-3">
                  <label for="exampleInputEmail1">Tahun Film</label>
                  <input type="text" class="form-control" id="tahun" name="tahun"  value="{{ old('tahun','') }}" placeholder="Masukkan Tahun Film">
                    @error('tahun')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-right  ml-3 mr-3 mb-3">
                <a href="/film" class="btn btn-default ml-3">Kembali</a>
                <button type="submit" class="btn btn-primary ml-3" onclick="showAlert()">Submit</button>
              </div>
            </form>
          </div>
</div>
   
@endsection

@push('scripts')
    <script>
        function showAlert(){
            Swal.fire({
                        title: "Berhasil!",
                        text: "Memasangkan script sweet alert",
                        icon: "success",
                        confirmButtonText: "Cool",
                });
        }
    
</script>

@endpush
