<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function index()
   {

       $user = \App\User::first();
//       $team = count($user->teams->all());
//       if($team > 1 )
//       {
//          echo 'true';
//       }
//       dd($user->teams->pluck('name')[0]);

       $assessments = \App\Assessment::where('team_id','=','2')->get();
       $team = \App\Team::findorfail(2);
       foreach ($assessments as $assessment)
       {
           echo "<pre>";
           print_r($assessment->slo->team_id);
           echo "</pre>";
       }
//       dd($assessments);
//       dd(count($team));
//       $user = Auth::user();
//       return view('dashboard.index', compact('user','team','assessments'));
   }
}
