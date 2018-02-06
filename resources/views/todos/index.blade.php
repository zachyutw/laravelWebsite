@extends('layout.app') 
@section('content')
<div class="container">
    <div class="col-md-8 col-lg-8 offset-md-2">
        <h1>Todos <span class="float-right"><a href="todo/create" class="btn btn-success btn-sm">add todo</a></span></h1>
        @if(count($todos)>0)
        @foreach($todos as $todo)
        <div class="card">
            
            <div class="card-body ">
                <h3 class="card-title d-inline">
                    <a href="todo/{{$todo->id}}">{{$todo->text}}</a>
                </h3>
                <span class="card-subtitle d-inline badge badge-danger">{{$todo->due}}</span>
            </div>
        </div>
        @endforeach 
        @endif
    </div>
</div>

@endsection