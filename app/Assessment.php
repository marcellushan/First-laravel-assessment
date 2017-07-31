<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $fillable = [
        'user_id', 'period', 'slo_id','goal_id','team_id','course','method','measure','submit_date'
    ];
}
