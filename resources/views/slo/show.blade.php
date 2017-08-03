@extends('layouts.app') @section('content')
       <div class="title_header"> SLO: {{$record->name}}</div>
    <div class="title_header"> Team ID: {{$record->team_id}}</div>
</div>
{{--<div class="well">--}}
    {{--@include('partials.text', ['label' => 'College Goal','name' => 'goal','field' => 'name'])--}}
    {{--@include('partials.text', ['label' => 'Associated Course','name' => 'record','field' => 'course'])--}}
    {{--@include('partials.text', ['label' => 'Student Learning Outcome','name' => 'slo','field' => 'name'])--}}
    {{--@include('partials.text', ['label' => 'Method of Outcome Assessment','name' => 'record','field' => 'method'])--}}
    {{--@include('partials.text', ['label' => 'Performance Measure','name' => 'record','field' => 'measure'])--}}

@endsection