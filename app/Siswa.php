<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = [
        'nisn',
        'nama_siswa',
        'tanggal_lahir',
        'jenis_kelamin',
        'id_kelas'
    ];

    /**
     * Membuat Accessor Pada Laravel
     */
    public function getNamaSiswaAttribute($nama_siswa)
    {
        return ucwords($nama_siswa);
    }

    /**
     * Membuat Mutator Pada Laravel
     */

     public function setNamaSiswaAttribute($nama_siswa)
     {
        $this->attributes['nama_siswa'] = strtolower($nama_siswa);
     }

    protected $dates = ['tanggal_lahir'];

    public function telepon()
    {
        return $this->hasOne('App\Telepon','id_siswa');
    }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas','id_kelas');
    }

}