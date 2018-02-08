@extends('layout.app')
@section('content')

<a class="btn btn-primary" href="/listings">Back</a>
<h1>Create Listings</h1>
<div class="card">
    <div class="card-body">
        {!! Form::open(['action'=>['ListingsController@update',$listing->id],'method'=>'POST']) !!} 
        {{ Form::bsText('name'      ,$listing->name     ,['placeholder'=>'Company name'] )}} 
        {{ Form::bsText('email'     ,$listing->email    ,['placeholder'=>'Company email'] )}} 
        {{ Form::bsText('website'   ,$listing->website  ,['placeholder'=>'Company website'] )}} 
        {{ Form::bsText('phone'     ,$listing->phone    ,['placeholder'=>'Company phone'] )}} 
        {{ Form::bsText('address'   ,$listing->address  ,['placeholder'=>'Company address'] )}} 
        {{ Form::bsTextArea('bio'   ,$listing->bio      ,['placeholder'=>'Company bio'])}} 
        {{ Form::hidden('_method','PUT')}}
        {{ Form::bsSubmit('Submit',['class'=>'btn btn-primary'])}} {!! Form::close()
        !!}
    </div>
</div>
@endsection