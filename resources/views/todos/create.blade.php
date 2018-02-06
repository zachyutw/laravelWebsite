@extends('layout.app')
@section('content')
<div class="container">
        <div class="col-md-8 col-lg-8 offset-md-2">
                <a class="btn btn-primary" href="/todo">Go Back</a>    
<h1>Create Todo</h1>
    {!! Form::open(['action'=>'TodosController@store','method'=>'POST']) !!}
        {{ Form::bsText('text')}}
        {{ Form::bsTextArea('body')}}
        {{ Form::bsText('due')}}
        {{ Form::bsSubmit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
        </div>
    </div>
@endsection