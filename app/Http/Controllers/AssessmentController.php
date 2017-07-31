<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Assessment;
use URL;



class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $data = $request->all();
        $data = array('period' => '2017');
//        $data period = '2017';
//        $data->slo_id = 22;
//        $user = factory(User::class)->create();
        $assessment = new Assessment($data);
        $assessment->save();
        dd($assessment);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $user = \App\User::find(1);

//        dd($URL);
        $team_id = 493;
        $team = \App\Team::find(493);
        $goal_list = new \App\Goal();
        $goals = $goal_list->where('inactive')->get();
        $slo_list = new \App\Slo();
        $slos = $slo_list
                        ->where('team_id', '=', $team_id)
                        ->get();
//        dd($slos);

        return view('assessment.create')->with(compact('user','team','goals','slos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
//        dd($data);
//        $user = factory(User::class)->create();
//        dd($user);
//        $model_name = $this::MODEL_NAME;
        $assessment = new Assessment($data);
        $assessment->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
