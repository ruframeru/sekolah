<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Http\Request;

class guruController extends Controller
{
    public function index(){
        $dataguru = Guru::latest()->paginate(6);
        return view('guru.index', compact('dataguru'));
    }

    public function create(){
       return view('guru.create');
    }

    public function store(Request $request){
        Guru::create($request->all());
        return redirect('/Guru');
    }

    public function edit($id){
        $guru = Guru::find($id);
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, $id){
        $guru = Guru::find($id);
        $guru->update($request->all());
        return redirect('/Guru');
    }

    public function profile($id){
        $guru = Guru::find($id);
        return view('guru.profile', compact('guru'));
    }
}
