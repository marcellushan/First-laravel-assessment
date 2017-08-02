<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Assessment;
use URL;



class AssessmentController extends IAbstractController
{
    protected $category = 'assessment';

    public function create()
    {
       $user = \App\User::find(1);

//        dd($URL);
        $team_id = 493;
        $team = \App\Team::find(493);
        $goals = \App\Goal::where('inactive')->get();
        $slos = \App\Slo::where('team_id', '=', $team_id)->get();
        return view('assessment.create')->with(compact('user','team','goals','slos'));
    }

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
        $team_id = 493;
        $goals = \App\Goal::where('inactive')->get();
        $slos = \App\Slo::where('team_id', '=', $team_id)->get();
        $model = new $this->model_name();
        $record = $model::find($id);
        $team = $record->team;
        $user = $record->user;
        $goal = $record->goal;
        $slo = $record->slo;
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
