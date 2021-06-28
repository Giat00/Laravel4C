<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // protected $table = 'mahasiswa';
    // protected $fillable = ['user_id','tgl_lahir','tempat_lahir','telepon','alamat','gender','foto'];
    protected $table = 'makul';
    protected $fillable = ['kd_matkul','nama_matkul','sks'];

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id','id');
    }

    
}


