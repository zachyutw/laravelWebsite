@extends('layout.app') 
@section('content')


<div class="container">
        <div class="col-md-8 col-lg-8 offset-md-2">
                <a class="btn btn-primary" href="/albums/{{$photo->album_id}}">Go Back</a>
                <div class="card">

                        <div class="card-body ">
                            <h1 class="card-title">
                                {{$photo->title}}
                            </h1>
                            <hr/>
                            <p>{{$photo->description}}</p>
                            <hr/>
                            <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="$photo->title"/>
                            <br/><br/>
                        
                            {!! Form::open(['action'=>['PhotosController@destroy',$photo->id],'method'=>'POST','class'=>'float-right'])!!} 
                                {{ Form::hidden('_method','DELETE')}} 
                                {{ Form::bsSubmit('Delete',['class'=>'btn btn-danger'])}} 
                            {!! Form::close()!!}
                            <small>Size: {{$photo->size}}</small>
                        </div>
                        
                </div>
        </div>
</div>    

@endsection