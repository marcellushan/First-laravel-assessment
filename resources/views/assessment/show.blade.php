@extends('layouts.app') @section('content')
        <div class="title_header"> Assessment</div>
        <div class="title_header"> Unit: {{$team->name}}</div>
        <div class="title_header">Unit Leader: {{$user->name}}</div>
    </div>
    <div class="well">
        @include('partials.text', ['label' => 'College Goal','name' => 'goal','field' => 'name'])
        @include('partials.text', ['label' => 'Associated Course','name' => 'record','field' => 'course'])
        @include('partials.text', ['label' => 'Student Learning Outcome','name' => 'slo','field' => 'name'])
        @include('partials.text', ['label' => 'Method of Outcome Assessment','name' => 'record','field' => 'method'])
        @include('partials.text', ['label' => 'Performance Measure','name' => 'record','field' => 'measure'])

        <a href="{{URL::to('/')}}/assessment/{{$record->id}}/edit">edit</a>

        {{Form::open(['url' => 'assessment/' . $record->id ,'method' => 'PUT'])}}
        {{Form::hidden('submit_date', date("Y-m-d")) }}
        {{Form::submit('Submit Assessment')}}
        {{Form::close()}}
@endsection