<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $fillable = [
        'user_id', 'period', 'slo_id','goal_id','team_id','course','method','measure','submit_date'
    ];

    public function Team()
    {
        return $this->belongsTo('App\Team');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Goal()
    {
        return $this->belongsTo('App\Goal');
    }

    public function Slo()
    {
        return $this->belongsTo('App\Slo');
    }
}


