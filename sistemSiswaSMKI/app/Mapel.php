<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';
    protected $primarykey = 'id';
    protected $fillable = ['kode_mapel', 'nama_mapel', 'guru_id'];

    public function siswa(){
        return $this->belongsToMany(Siswa::class)->withPivot(['nilai', 'tanggal']);
    }

    public function guru(){
        return $this->belongsTo(Guru::class);
    }
}
