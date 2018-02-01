@extends('layout.app') 
@section('content')
<h1>Todos</h1>
@if(count($todos)>0) @foreach($todos as $todo)
<div class="card">
    <div class="card-body ">
        <h4 class="card-title d-inline">
            <a href="todo/{{$todo->id}}">{{$todo->text}}</a>
            </h3>
            <span class="card-subtitle d-inline badge badge-danger">{{$todo->due}}</span>
    </div>
</div>
@endforeach @endif
@endsection