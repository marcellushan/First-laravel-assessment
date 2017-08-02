<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IAbstractController extends Controller
{
    protected $category;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {

        $this->model_name = 'App\\' . ucfirst($this->category);

    }

    public function index()
    {
//        $model_name = 'App\\' . ucfirst($this->category);
        $model = new $this->model_name;

        dd($model->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->category . '.create');
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
        $model = new $this->model_name($data);
        $model->save();
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
//        $team = $record->team;
//        $user = $record->user;
        return view($this->category . '.show')->with(compact('record'));
        dd($record);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = new $this->model_name();
        $record = $model::find($id);
        return view($this->category . '.edit')->with(compact('record'));
        dd($record);
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
        $model = $this->model_name;
        $record = $model::find($id);
        $data = $request->except(['_token']);
        $record->fill($data);
        echo $changed = $record->save();
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