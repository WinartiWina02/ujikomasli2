<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nama_tag', 'slug'];
    public $timestamps = true;

    public function artikel()
    {
        return $this->belongsToMany('App\Artikel', 'id_tags');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
