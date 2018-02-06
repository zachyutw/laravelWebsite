@extends('layout.app') 
@section('content')
<a class="btn btn-primary" href="/">Go Back</a>


<div class="card">
{{-- 
    <div class="card-body ">
        <h1 class="card-title">
            {{$listing->name}}
        </h1>
        <div class="card-subtitle  badge badge-danger">{{$listing->due}}</div>
        <hr/>
        <p>{{$todo->body}}</p>
        <br/><br/>
        <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a> 
        {!! Form::open(['action'=>['TodosController@destroy',$todo->id],'method'=>'POST','class'=>'float-right'])!!} 
            {{ Form::hidden('_method','DELETE')}} 
            {{ Form::bsSubmit('Delete',['class'=>'btn btn-danger'])}} 
        {!! Form::close()!!}
    </div>
     --}}
</div>
@endsection