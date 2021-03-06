<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FilmController extends Controller
{
    public function index()
    {
        $film = DB::table('film')->get();
        return view('film/index', compact('film'));
    }
    public function create()
    {
         return view('film.create');
    }
    
    public function store(Request $request)
    {
            $request->validate([
                'judul' => 'required|unique:film',
                'desc' => 'required',
                'tahun' => 'required',
            ]);
            $query = DB::table('film')->insert([
                "judul" => $request["judul"],
                "desc" => $request["desc"],
                "tahun" => $request["tahun"]
            ]);
            return redirect('/film')->with('success','Film Berhasil Disimpan!');
        
    }

    public function show($id)
    {
        $film = DB::table('film')->where('id', $id)->first();
        // dd($pertanyaan);
        return view('film/show',compact('film'));
    }

    public function edit($id)
    {
        $film = DB::table('film')->where('id',$id)->first();
        return view('film/edit', compact('film'));
    }

    public function update(Request $request,$id)
    {
         $request->validate([
                'judul' => 'required',
                'desc' => 'required',
                'tahun' => 'required',
            ]);
        $pertanyaan = DB::table('film')
                        ->where('id',$id)
                        ->update([
                            "judul" => $request["judul"],
                            "desc" => $request["desc"],
                            "tahun" => $request["tahun"]
                        ]);
        return redirect('/film')->with('success','Berhasil Di Ubah!');
    }

    public function destroy($id)
    {
        $film = DB::table('film')->where('id',$id)->delete();
        return redirect('/film')->with('success','Berhasil Di Dihapus!');
    }
}
