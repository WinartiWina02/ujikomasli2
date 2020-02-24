<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universitas extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'nama_universitas', 'slug', 'foto', 'alamat', 'akreditas', 'konten'
    ];
    public function fakultas()
    {
        return $this->belongsToMany('App\Fakultas', 'universitas_fakultas', 'id_universitas', 'id_fakultas');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
