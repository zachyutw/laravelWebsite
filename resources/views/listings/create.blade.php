@extends('layout.app') 
@section('content')
<div class="container">

<div class="col-md-8 col-lg-8 offset-md-2">
        <h1>Create Listings</h1>
<div class="card">
    <div class="card-body">
        {!! Form::open(['action'=>'ListingsController@store','method'=>'POST']) !!} 
        {{ Form::bsText('name'      ,'',['placeholder'=>'Company Name'])}} 
        {{ Form::bsText('email'     ,'',['placeholder'=>'Company email'])}}        
        {{ Form::bsText('website'   ,'',['placeholder'=>'Company Website'])}} 
        {{ Form::bsText('phone'     ,'',['placeholder'=>'Company phone'])}} 
        {{ Form::bsText('address'   ,'',['placeholder'=>'Company address'])}} 
        {{ Form::bsTextArea('bio'   ,'',['placeholder'=>'Company bio'])}} 
        {{ Form::bsSubmit('Submit',['class'=>'btn btn-primary'])}} {!! Form::close()
        !!}
    </div>
</div>
</div>
</div>
@endsection