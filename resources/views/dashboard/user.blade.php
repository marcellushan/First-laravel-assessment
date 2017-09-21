@extends('layouts.app') @section('content')
    <h2>User {{$user->name}} </h2>
<h2>Team {{$team->name}}</h2>
    <h3> Saved Assessments</h3>
<h4>
    <table>
        <tr>
            <th>Student Learning Objective</th>
            <th>Username</th>
        </tr>
@forelse ($saveds as $saved)
            <tr>
                <td>
    <a href="{{URL::to('/')}}/assessment/{{$saved->id}}/edit">{{ $saved->slo->name }}</a>
                </td>
                <td>
                    {{$saved->user->name}}
                </td>
        </tr>
@empty
    <p>No Assessments</p>
@endforelse
    </table>
</h4>
    <h3> Submitted Assessments</h3>
    <h4>
        <table>
            <tr>
                <th>Student Learning Objective</th>
                <th>Username</th>
            </tr>
            @forelse ($submitteds as $submitted)
                <tr>
                    <td>
                        <a href="{{URL::to('/')}}/assessment/{{$submitted->id}}">{{ $submitted->slo->name }}</a>
                    </td>
                    <td>
                        {{$submitted->user->name}}
                    </td>
                </tr>
            @empty
                <p>No Submitted Assessments</p>
            @endforelse
        </table>
    </h4>
    <a href="{{URL::to('/')}}/assessment/create/{{$user->id}}/{{$team->id}}">Create New Assessment</a>

@endsection