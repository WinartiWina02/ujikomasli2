<?php

namespace App;

use App\Jurusan;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $fillable = ['id_user',  'id_jurusan', 'nama_fakultas', 'foto', 'slug'];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
    public function jurusan()
    {
        return $this->belongsToMany('App\Jurusan', 'artikel_jurusan', 'id_fakultas', 'id_jurusan');
    }

    public function universitas()
    {
        return $this->belongsToMany('App\Universitas', 'id_fakultas');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
