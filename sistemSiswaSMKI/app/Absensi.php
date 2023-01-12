<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensi';
    protected $primarykey = 'id';
    protected $fillable = ['siswa_id', 'absen'];
}
