@extends('layouts.app') @section('content')
    <div class="title_header"> Create Assessment</div>
    <div class="title_header"> Unit: {{$team->name}}</div>
    <div class="title_header">Unit Leader: {{$user->name}}</div>
    </div>
    <div class="well">
    {{--@include('partials.form_open', ['name' => 'assessment'])--}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    {{Form::open(['url' => 'assessment'])}}
    {{Form::hidden('user_id', $user->id)}}
    {{Form::hidden('period', '2017')}}
    {{Form::hidden('team_id', $team->id)}}
    @include('partials.radio_button', ['label' => 'College Goal','name' => 'goals', 'id' => 'goal_id'])
    {{--@include('partials.textfield', ['label' => 'course','name' => 'course'])--}}
    <h2>Course</h2>
    @include('partials.ajax')
    @include('partials.radio_button', ['label' => 'Student Learning Outcome','name' => 'slos', 'id' => 'slo_id'])
    @include('partials.textbox', ['label' => 'Method of Outcome Assessment','name' => 'method'])
    @include('partials.textbox', ['label' => 'Performance Measure','name' => 'measure'])

    {{Form::submit('Submit')}}

@endsection