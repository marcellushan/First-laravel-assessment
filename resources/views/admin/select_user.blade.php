@extends('layouts.app') @section('content')
<select id="selectbox" name="" onchange="javascript:location.href = this.value;">
    <option>Select</option>
    @foreach($users as $user)
        {{--<option value="{{URL::to('/')}}/user/{{$user->id}}">{{$user->name}}</option>--}}
        <option value="{{URL::to('/')}}/admin/select_user/{{$user->id}}"> {{$user->name}}</option>
    @endforeach
</select>
@endsection