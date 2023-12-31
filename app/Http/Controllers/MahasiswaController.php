<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact(['mahasiswa']));
    }
    //
    public function create(){
        return view('mahasiswa.create');
    }

    public function store(Request $request){
        Mahasiswa::create($request->except(['_token', 'submit']));
        return redirect('/list');
    }
    public function destroy($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/list');
    }
}
