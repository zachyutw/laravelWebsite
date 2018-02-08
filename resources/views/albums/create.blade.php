@extends('layout.app') 
@section('content')
<div class="container">

<div class="col-md-8 col-lg-8 offset-md-2">
        <h1>Create Albums</h1>
<div class="card">
    <div class="card-body">
        {!! Form::open(['action'=>'AlbumsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!} 
        {{ Form::bsText('name'      ,'',['placeholder'=>'Name'])}} 
        {{ Form::bsTextArea('description'     ,'',['placeholder'=>'Description'])}}        
        {{ Form::bsFile('cover_image')}}
        {{ Form::bsSubmit('Submit',['class'=>'btn btn-primary'])}} 
        {!! Form::close()
        !!}
    </div>
</div>
</div>
</div>
@endsection