@extends('layouts.app') @section('content')
<select id="selectbox" name="" onchange="javascript:location.href = this.value;">
    <option>Select</option>
    @foreach($teams as $team)
        {{--<option value="{{URL::to('/')}}/user/{{$user->id}}">{{$user->name}}</option>--}}
        <option value="{{URL::to('/')}}/admin/select_user/{{$team->id}}"> {{$team->name}}</option>
    @endforeach
</select>
@endsection