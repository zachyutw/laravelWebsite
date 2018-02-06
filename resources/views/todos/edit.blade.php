@extends('layout.app')
@section('content')
<div class="container">
        <div class="col-md-8 col-lg-8 offset-md-2">
<a class="btn btn-primary" href="/todo/{{$todo->id}}">Back</a>
<h1>Edit Todo</h1>
    {!! Form::open(['action'=>['TodosController@update',$todo->id],'method'=>'POST']) !!}
        {{ Form::bsText('text',$todo->text)}}
        {{ Form::bsTextArea('body',$todo->body)}}
        {{ Form::bsText('due',$todo->due)}}
        {{ Form::hidden('_method','PUT')}}
        {{ Form::bsSubmit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
        </div>
    </div>
@endsection