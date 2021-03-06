<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table    = 'nilai';
    protected $fillable = ['id', 'makul_id', 'mahasiswa_id','nilai'];
    public $timestamps = false;

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'id', 'id');
    // }

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id','id');
    }

    public function makul(){
        return $this->belongsTo(Makul::class, 'makul_id','id');
    }
}
