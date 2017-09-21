<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index()
   {
       return view('admin.index');
   }

   public function selectTeam()
   {
       $teams = Team::orderBy('name')->get();
       return view('admin.select_team')->with(compact('teams'));
       dd($teams);

   }

    public function selectUser($id)
    {
        $team = Team::find($id);

        $users = $team->users;
                return view('admin.select_user')->with(compact('users'));
//        dd($users);

    }
}
