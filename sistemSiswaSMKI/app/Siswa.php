<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primarykey = 'id';
    protected $fillable = ['nis', 'nama_siswa', 'jenis_kelamin', 'tgl_lahir', 'alamat', 'avatar', 'user_id', 'kelas_id'];

    public function mapel(){
        return $this->belongsToMany(Mapel::class)->withPivot(['nilai', 'tanggal'])->withTimeStamps();
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
}
