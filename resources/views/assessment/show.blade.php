
    <div class="title_header"> Assessment</div>
    <div class="title_header"> Unit: {{$team->name}}</div>
    <div class="title_header">Unit Leader: {{$record->period}}</div>
</div>
<div class="well">
    @include('partials.text', ['label' => 'College Goal','name' => 'goal','field' => 'name'])
    @include('partials.text', ['label' => 'Associated Course','name' => 'record','field' => 'course'])
    @include('partials.text', ['label' => 'Student Learning Outcome','name' => 'slo','field' => 'name'])
    @include('partials.text', ['label' => 'Method of Outcome Assessment','name' => 'record','field' => 'method'])
    @include('partials.text', ['label' => 'Performance Measure','name' => 'record','field' => 'measure'])

@endsection