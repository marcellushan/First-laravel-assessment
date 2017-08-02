@extends('layouts.app') @section('content')
<div class="title_header"> Create Team</div>
{{--<div class="title_header"> Unit: {{$team->name}}</div>--}}
{{--<div class="title_header">Unit Leader: {{$user->name}}</div>--}}



    </div>
<div class="well">
{{Form::open(['url' => 'team'])}}
    {{--@include('partials.form_open', ['name' => 'goal'])--}}
    {{--{{Form::hidden('user_id', $user->id)}}--}}
    {{--{{Form::hidden('period', '2017')}}--}}
    {{--{{Form::hidden('team_id', $team->id)}}--}}
    {{--@include('partials.radio_button', ['label' => 'College Goal','name' => 'goals', 'list_type' => 'goal_id'])--}}
    @include('partials.textfield', ['label' => 'Team Name', 'field' => 'name'])
@include('partials.textbox', ['label' => 'Mission','name' => 'mission'])
    {{--@include('partials.radio_button', ['label' => 'Student Learning Outcome','name' => 'slos', 'list_type' => 'slo_id'])--}}

    {{--@include('partials.textbox', ['label' => 'Performance Measure','name' => 'measure'])--}}
    {{Form::submit('Submit')}}
    {{Form::close()}}


@endsection