<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Assessment;
use App\Team;
use App\User;

class DashboardController extends Controller
{
   public function index($id)
   {

       $user = User::find($id);
       $teams = $user->teams;
       if(count($teams) > 1 )
           {
              return view('dashboard.teams', compact('user','teams','assessments'));
           }
       if(count($teams) < 1 )
           {
               return view('dashboard.no_team');
           }
       $team_id = $user->teams->pluck('id')[0];
       $team = Team::find($team_id);
       $saveds = Assessment::where('team_id','=', $team_id)->whereNull('submit_date')->get();
       $submitteds = Assessment::where('team_id','=', $team_id)->whereNotNull('submit_date')->get();
       return view('dashboard.index', compact('user','team','saveds','submitteds'));

   }

   public function team($user_id, $team_id)
   {
       $user = \App\User::find($user_id);
       $assessments = \App\Assessment::where('team_id','=', $team_id)->get();
       $team = \App\Team::find($team_id);
       return view('dashboard.index', compact('user','team','assessments'));
   }
}
