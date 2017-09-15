<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Assessment;
use URL;
use App\Team;
use App\Goal;
use App\Slo;



class AssessmentController extends Controller
{
    protected $category = 'assessment';
    protected $model_name = 'Assessment';

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

//    public function store(Request $request)
//    {
//        $team = Team::find($request->team_id);
//        $goals = Goal::get();
//        $data = $request->all();
//        dd($data);
//        $assessment = new Assessment($data);
//        $assessment->save();
////        $record = $model;
//        return view('assessment.show')->with(compact('assessment','team','goals'));
//
//    }

    public function store(Request $request)
    {
        $data = $request->all();
//        dd($data);
        $team = Team::find($request->team_id);
        $user = User::find($request->user_id);
        $goal = Goal::find($request->goal_id);
        $slo = Slo::find($request->slo_id);
        $model = new Assessment($data);
        $model->save();
        $record = $model;
        return view($this->category . '.show')->with(compact('record','team','user','goal','slo'));

    }

    public function edit($id)
    {
        $record = Assessment::find($id);
        $goals = \App\Goal::where('inactive')->get();
        $slos = \App\Slo::where('team_id', '=', $record->team_id)->get();

        return view('assessment.edit')->with(compact('record','team','goals','slos'));
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
        $data = $request->all();
        $model = Assessment::find($id);
        $model->fill($data);
        $model->save();
    }

}
