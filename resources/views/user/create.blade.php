@extends('layouts.app') @section('content')
    {{Form::open(['url' => 'user'])}}
<h2>Add a User</h2>
    <h3>Username<input type="text" name="username"></h3>
    <h3>Name<input type="text" name="name"></h3>
    <button type="submit">Submit</button>
    {{Form::close()}}
@endsection