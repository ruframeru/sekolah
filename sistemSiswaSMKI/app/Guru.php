<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $primarykey = 'id';
    protected $fillable = ['nama_guru', 'jenkel_guru', 'no_tlp_guru'];

    public function mapel(){
        return $this->hasMany(Mapel::class);
    }

    public function kelas(){
        return $this->hasMany(Kelas::class);
    }
}
