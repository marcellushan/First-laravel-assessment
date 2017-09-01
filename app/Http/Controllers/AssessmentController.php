<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Assessment;
use URL;



class AssessmentController extends Controller
{
    protected $category = 'assessment';

    public function create($user_id, $team_id)
    {
        $user = \App\User::find($user_id);

//        dd($URL);
//        $team_id = 1;
        $team = \App\Team::find($team_id);
        $goals = \App\Goal::where('inactive')->get();
        $slos = \App\Slo::where('team_id', '=', $team_id)->get();
        return view('assessment.create')->with(compact('user','team','goals','slos'));
    }

    public function team($user_id, $team_id)
    {
        $user = \App\User::find($user_id);

//        dd($URL);
//        $team_id = 1;
        $team = \App\Team::find(201);
        $goals = \App\Goal::where('inactive')->get();
        $slos = \App\Slo::where('team_id', '=', $team_id)->get();
        return view('assessment.create')->with(compact('user','team','goals','slos'));
    }

//    public function store(Request $request)
//    {
//        $data = $request->all();
//        $model = new $this->model_name($data);
//        $model->save();
//        $record = $model;
//        return view($this->category . '.show')->with(compact('record'));
//
//    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = new $this->model_name();
        $record = $model::find($id);
        $team = $record->team;
        $user = $record->user;
        $goal = $record->goal;
        $slo = $record->slo;
        return view($this->category . '.show')->with(compact('record','team','user','goal','slo'));
        dd($user);

    }

    public function edit($id)
    {
//        $team_id = 493;
        $model = new $this->model_name();
        $record = $model::find($id);
        $team_id = $record->team_id;
        $goals = \App\Goal::where('inactive')->get();
        $slos = \App\Slo::where('team_id', '=', $team_id)->get();
        $team = $record->team;
        $user = $record->user;
        $goal = $record->goal;
        $slo = $record->slo;
//        dd($slos);
        return view($this->category . '.edit')->with(compact('record','team','user','goal','slo','goals','slos'));
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
