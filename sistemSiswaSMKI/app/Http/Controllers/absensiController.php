<?php

namespace App\Http\Controllers;

use App\Absensi;
use App\Siswa;
use Illuminate\Http\Request;

class absensiController extends Controller
{
    public function index(){
        $siswa = Siswa::all();
        $absensi = Absensi::all();
        return view('absen.index', compact('absensi', 'siswa'));
    }
    
    public function create(Requset $requset){
        Absensi::create($requset->all());
        return redirect('/Absensi');

    }
    
    public function show(Request $request, $id){
        
    }

}