<?php

namespace App;

use App\Fakultas;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $fillable = ['nama_jurusan', 'slug', 'foto'];
    public $timestamps = true;

    public function fakultas()
    {
        return $this->belongsToMany('App\Fakultas', 'id_fakultas');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
