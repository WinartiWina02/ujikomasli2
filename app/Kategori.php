<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $fillable = ['nama_kategori', 'slug'];
    public $timestamps = true;

    public function artikel()

    {
        return $this->belongsToMany('App\artikel', 'id_kategori');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
