
<?php
$names = $name;
?>
<h2>{{$label}}</h2>
@foreach($$names as $$name)
            {{Form::radio($list_type, $$name->id)}} {{$$name->name}}</br>
@endforeach