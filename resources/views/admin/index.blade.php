@extends('layouts.app') @section('content')
<h1>Administrator Dashboard</h1>

<h2>Management</h2>
<h3>Assessment</h3>
<h4><a href="{{URL::to('/')}}/user">Create</a>  - Update - Delete</h4>
<h3>User</h3>
<h4>Create - Update - Delete</h4>
<h3>Team</h3>
<h4>Create - Update - Delete</h4>
<h3>Goal</h3>
<h4>Create - Update - Delete</h4>
<h3>SLO</h3>
<h4>Create - Update - Delete</h4>



<h2>Reporting</h2>

<h3>Client</h3>
<h3>Admin</h3>

@endsection