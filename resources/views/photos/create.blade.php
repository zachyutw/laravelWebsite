@extends('layout.app') 
@section('content')
<div class="container">

<div class="col-md-8 col-lg-8 offset-md-2">
        <h1>Upload Photos</h1>
<div class="card">
    <div class="card-body">
        {!! Form::open(['action'=>'PhotosController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!} 
        {{ Form::bsText('title'      ,'',['placeholder'=>'Photo Title'])}} 
        {{ Form::bsTextArea('description'     ,'',['placeholder'=>'Photo Description'])}}      
        {{ Form::hidden('album_id',$album_id)}}
        {{ Form::bsFile('photo')}}
        {{ Form::bsSubmit('Submit',['class'=>'btn btn-primary'])}} 
        {!! Form::close()
        !!}
    </div>
</div>
</div>
</div>
@endsection