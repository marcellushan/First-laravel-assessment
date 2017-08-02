@extends('layouts.app') @section('content')
        <div class="title_header"> Assessment</div>
        <div class="title_header"> Unit: {{$team->name}}</div>
        <div class="title_header">Unit Leader: {{$record->period}}</div>
    </div>
    <div class="well">
        {{Form::open(['url' => 'assessment/1','method' => 'PUT'])}}
        {{--@include('partials.form_open', ['name' => 'assessment/{{1}}' ,'method' => 'PUT'])--}}
        @include('partials.selected_radio_button', ['label' => 'College Goal','name' => 'goals', 'list_type' => 'goal_id','assessment' => 'record','selection' => 'goal_id'])
        @include('partials.textfield', ['label' => 'Associated Course','name' => 'record','field' => 'course','assessment' => 'record'])
        @include('partials.selected_radio_button', ['label' => 'Student Learning Outcome','name' => 'slos', 'list_type' => 'slo_id','assessment' => 'record','selection' => 'slo_id'])
        @include('partials.textbox', ['label' => 'Method of Outcome Assessment','name' => 'method','field' => 'method','assessment' => 'record'])
        @include('partials.textbox', ['label' => 'Performance Measure','name' => 'measure','field' => 'measure','assessment' => 'record'])
        {{Form::submit('Submit')}}
@endsection