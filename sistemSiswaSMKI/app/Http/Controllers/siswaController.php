<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Mapel;
use App\Kelas;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $datasiswa = Siswa::where('nama_siswa', 'LIKE', '%'.$request->cari.'%')->get();
        } else {
            $datasiswa = Siswa::latest()->paginate(8);
        }
        return view('siswa.index', compact('datasiswa'));
    }

    public function create(){
        $datasiswa = Siswa::all();
        $ruangkelas = Kelas::all();
        return view('siswa.create', compact('datasiswa', 'ruangkelas'));
    }

    public function store(Request $request){
        // tambah ke table user
        $user = new \App\User;
        $user->role = 'siswa';
        $user->name = $request->nama_siswa;
        $user->email = $request->email;
        $user->password = bcrypt('12345678');
        $user->remember_token = str_random(50);
        $user->save();

        // tambah ke table siswa
        $request->request->add(['user_id' => $user->id]);
        $siswa = Siswa::create($request->all());

        return redirect('/Siswa');
    }

    public function edit($id){
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id){
        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/Siswa');
    }

    public function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/Siswa');
    }

    Public function myprofile($id){
        $siswa = Siswa::find($id);
        $matapelajaran = Mapel::all();
        return view('siswa.myprofile', compact('siswa', 'matapelajaran'));
    }

    public function nilai(Request $request, $id){
        $siswa = Siswa::find($id);
        $siswa->mapel()->attach($request->mapel,['nilai' => $request->nilai,
                                                 'tanggal' => $request->tanggal]);

        return redirect('Siswa/'.$id.'/myprofile');
    }
}
