<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Guru;
use Illuminate\Http\Request;

class kelasController extends Controller
{
    public function index(){
        $kelas = Kelas::all();       
        $walikelas = Guru::all();
        return view('kelas.index', compact('kelas', 'walikelas'));
    }

    public function create(Request $request){
        Kelas::create($request->all());
        return redirect('/Kelas');
    }

    public function show(Request $request, $id){
        
    }
}
