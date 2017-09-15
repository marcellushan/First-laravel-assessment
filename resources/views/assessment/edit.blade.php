@extends('layouts.app') @section('content')
        <div class="title_header"> Assessment</div>
        <div class="title_header"> Unit: {{$record->team->name}}</div>
        <div class="title_header">Unit Leader: {{$record->user->name}}</div>
    </div>
    <div class="well">
        {{Form::open(['url' => 'assessment/' . $record->id,'method' => 'PUT'])}}
        {{--@include('partials.form_open', ['name' => 'assessment/{{1}}' ,'method' => 'PUT'])--}}
        @include('partials.selected_radio_button', ['label' => 'College Goal','name' => 'goals', 'list_type' => 'goal_id','assessment' => 'record','selection' => 'goal_id'])
        @include('partials.textfield', ['label' => 'Associated Course','name' => 'course','field' => 'course','record_type' => 'record'])
        @include('partials.selected_radio_button', ['label' => 'Student Learning Outcome','name' => 'slos', 'list_type' => 'slo_id','assessment' => 'record','selection' => 'slo_id'])
        @include('partials.textbox', ['label' => 'Method of Outcome Assessment','name' => 'method','field' => 'method','record_type' => 'record'])
        @include('partials.textbox', ['label' => 'Performance Measure','name' => 'measure','field' => 'measure','record_type' => 'record'])
        {{Form::submit('Submit')}}
@endsection