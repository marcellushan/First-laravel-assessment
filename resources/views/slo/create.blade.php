@extends('layouts.app') @section('content')
    <div class="title_header"> Create SLO</div>
    </div>
    <div class="well">
    {{Form::open(['url' => 'slo'])}}
    @include('partials.textfield', ['label' => 'Student Learning Outcome', 'name' => 'name'])
    @include('partials.textfield', ['label' => 'Team ID', 'name' => 'team_id'])
    {{Form::submit('Submit')}}
    {{Form::close()}}
@endsection