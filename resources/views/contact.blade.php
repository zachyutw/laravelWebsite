@extends('layout.app')

@section('content')
<h1>Contact Page</h1>
{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{ Form::label('name','Name') }}
        {{ Form::text('name','',['class'=>'form-control','placeholder'=>'Enter name'] ) }}
    </div>
    <div class="form-group">
            {{ Form::label('email','Email') }}
            {{ Form::text('email','',['class'=>'form-control','placeholder'=>'xxxx@xxxx.xxxx'] ) }}
        </div>
        <div class="form-group">
                {{ Form::label('message','Message') }}
                {{ Form::textarea('message','',['class'=>'form-control','placeholder'=>'Message'] ) }}
            </div>
            <div>
                {{ Form::submit('Send',['class'=>'btn btn-primary'])}}
            </div>

{!! Form::close() !!}
@endsection

@section('sidebar')
    {{-- @parent --}} 
    <p>This is append to sidebar</p>

@endsection