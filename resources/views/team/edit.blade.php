@extends('layouts.app') @section('content')
           <div class="well">
        {{Form::open(['url' => 'team/1','method' => 'PUT'])}}
        @include('partials.textfield', ['label' => 'Team Name','name' => 'name','field' => 'name','record_type' => 'record'])
        @include('partials.textbox', ['label' => 'Mission Statement','name' => 'mission','field' => 'mission','record_type' => 'record'])
        {{Form::submit('Submit')}}
@endsection