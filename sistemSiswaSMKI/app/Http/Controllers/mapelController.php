<?php

namespace App\Http\Controllers;

use App\Mapel;
use App\Guru;
use Illuminate\Http\Request;

class mapelController extends Controller
{
    public function index(){
        $mapels = Mapel::all();
        return view('mapel.index', compact('mapels'));
    }

    public function create(){
        $mapels = Mapel::all();
        $guru = Guru::all();
        return view('mapel.create', compact('mapels', 'guru'));    
    }

    public function store(Request $request){
        Mapel::create($request->all());
        return redirect('/Mapel');
    }
}
