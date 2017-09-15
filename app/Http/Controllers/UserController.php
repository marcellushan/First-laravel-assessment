<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = User::get();
        return view('user.index')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user = User::find($id);
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
        return view('user.assessments', compact('user','team','assessments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
