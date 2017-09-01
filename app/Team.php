<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name', 'mission'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
