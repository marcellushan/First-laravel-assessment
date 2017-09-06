<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function index($id)
   {

       $user = \App\User::find($id);
//      $user->teams()->attach(204);
//      $user->teams()->attach(203);
//              dd($user);
       $teams = $user->teams;
//       dd($teams);

       if(count($teams) > 1 )
           {
              return view('dashboard.teams', compact('user','teams','assessments'));
           }

       if(count($teams) < 1 )
           {
               return view('dashboard.no_team');
           }

       $team_id = $user->teams->pluck('id')[0];
//       dd($team_id);
       $team = \App\Team::find($team_id);
//       dd($team);
       $assessments = \App\Assessment::where('team_id','=', $team_id)->get();
//       dd($assessments);
       return view('dashboard.index', compact('user','team','assessments'));

   }

   public function team($user_id, $team_id)
   {
       $user = \App\User::find($user_id);
       $assessments = \App\Assessment::where('team_id','=', $team_id)->get();
       $team = \App\Team::find($team_id);
       return view('dashboard.index', compact('user','team','assessments'));
   }
}
