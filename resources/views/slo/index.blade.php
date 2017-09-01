@extends('layouts.app') @section('content')
    <div class="title_header"> Teams</div>
    <h3>
    @foreach($records as $record)
       <a href="{{URL::to('/')}}">{{$record->name}}</a> <br>
        @endforeach
    </h3>
@endsection