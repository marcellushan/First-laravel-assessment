@extends('layouts.app') @section('content')
    <div class="title_header"> Create Team</div>
    </div>
    <div class="well">
    {{Form::open(['url' => 'team'])}}
    @include('partials.textfield', ['label' => 'Team Name', 'name' => 'name'])
    @include('partials.textbox', ['label' => 'Mission','name' => 'mission'])
    {{Form::submit('Submit')}}
    {{Form::close()}}
@endsection