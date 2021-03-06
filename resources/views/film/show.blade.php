@extends('layouts.master')

@section('content')
<div class="mt-3 ml-3 mr-3">
    <div class="card card-primary">
     <div class="card-header with-border bg-primary text-light">
        <h3 class="card-title">Show Film</h3>
     </div>

     <div class="card-body"> 
        <h1> {{ $film->judul }}</h1>
        <hr>
        <p>Deskripsi : <br> {{ $film->desc }}</p>
        <hr>
        <p>Tahun : {{ $film->tahun }}</p>
        <hr>
        <p>Genre : <br> 
        <ul>
            <li>Adventure</li>
            <li>Action</li>
            <li>Fantasi</li>
        </ul></p>
     </div>
     
</div>
    <div class="box-footer text-right mt-2  ml-3 mr-3 mb-3">
                <a href="/film" class="btn btn-primary">Kembali</a>
              </div>
    </div>
    
@endsection