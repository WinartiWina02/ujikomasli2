<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universitas extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'nama_universitas', 'slug', 'konten', 'foto', 'alamat', 'akreditasi', 'id_user'
    ];
    public function fakultas()
    {
        return $this->belongsToMany('App\Fakultas', 'artikel_universitas', 'id_universitas', 'id_fakultas');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
    // public function jurusan()
    // {
    //     return $this->belongsToMany('App\Jurusan', 'artikel_jurusan', 'id_universitas', 'id_jurusan');
    // }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
