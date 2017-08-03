@extends('layouts.app') @section('content')
    <h2>Links</h2>
    <h3>Assessment</h3>
    <a href="{{URL::to('assessment')}}">List</a></br>
    <a href="{{URL::to('assessment/create')}}">Create</a></br>
    <a href="{{URL::to('assessment/1')}}">Show</a></br>
    <a href="{{URL::to('assessment/1/edit')}}">Edit</a></br>

    <h3>Team</h3>
    <a href="{{URL::to('team/create')}}">Create</a></br>
    <a href="{{URL::to('team/1')}}">Show</a></br>
    <a href="{{URL::to('team/1/edit')}}">Edit</a></br>

    <h3>SLO</h3>
    <a href="{{URL::to('slo/create')}}">Create</a></br>
    <a href="{{URL::to('slo/1')}}">Show</a></br>
    <a href="{{URL::to('slo/1/edit')}}">Edit</a></br>


@endsection