@extends('layouts.master')

@section('content')
<div class="mt-3 ml-3 mr-3">
        <div class="card card-primary">
            <div class="card-header with-border bg-primary text-light">
              <h3 class="card-title">Daftar Film</h3>
            </div>
            <!-- /.box-header -->
            <div class="card-body">
              @if(session('success')) 
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
              @endif
              <a href="/film/create" class="btn btn-primary mt-2 mb-3">Masukkan Data Film Baru</a>
              <table class="table table-bordered">
                <thead class="bg-dark text-light"><tr>
                  <th style="width: 10px">No</th>
                  <th>Judul</th>
                  <th>Desc</th>
                  <th>Tahun</th>
                  <th style="width: 40px">Actions</th>
                </tr></thead>
                <tbody>
                @forelse ($film as $key => $fm)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $fm->judul }}</td>
                    <td>{{ $fm->desc }}</td>
                    <td>{{ $fm->tahun }}</td>
                    <td style="display: flex">
                      <a href="/film/{{ $fm->id }}" class="btn btn-info btn-sm ml-2 mb-3" >Show</a>
                      <a href="/film/{{ $fm->id }}/edit" class="btn btn-success btn-sm ml-2 mb-3">Edit</a>
                      <form action="/film/{{ $fm->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="delete" class="btn btn-danger btn-sm ml-2 mb-3">
                      </form>
                      
                    </td>
                </tr>    
                @empty
                <tr>
                  <td colspan ="4" align="center">Belum ada Film</td>
                </tr>
                @endforelse
                </tbody>
              
               
              </table>
            </div>
            <!-- /.box-body -->
            
          </div>
    </div>
@endsection

