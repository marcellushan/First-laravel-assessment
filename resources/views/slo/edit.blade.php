@extends('layouts.app') @section('content')
           <div class="well">
        {{Form::open(['url' => 'slo/1','method' => 'PUT'])}}
           @include('partials.textfield', ['label' => 'Student Learning Outcome','name' => 'name','field' => 'name','record_type' => 'record'])
           @include('partials.textfield', ['label' => 'Team ID','name' => 'team_id','field' => 'team_id','record_type' => 'record'])
        {{Form::submit('Submit')}}
@endsection