@extends('layout.app') 
@section('content')
<div class="container">
    <a class="btn btn-primary" href="/albums">Go Back</a><a class="btn btn-success" href="/photos/create/{{$album->id}}">Upload Photos</a>
    <div class="card">
        <div class="card-body ">
            <h1 class="card-title">
                {{$album->name}}
            </h1>
        </div>
    </div>
    <div class="col-md-12 col-lg-12">
        <div id="photos" class="row">
            @if (count($album->photos)>0) @foreach ($album->photos as $photo)
            <div class="col-md-4 col-lg-4 col-sm-6">
                <div class="card mt-4 box-shadow">
                    <div class="card-body text-center">
                        <a href="/photos/{{$photo->id}}">
                                            <img class=" rounded " style="height:225px;max-width:100%" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="Card image cap"/>
                                       
                                    </a>
                    </div>
                    <div class="card-body text-center">
                        <p class="card-text">{{$photo->title}}
                    </div>
                </div>
            </div>
            @endforeach @else
            <div class="card-body">
                <p>No Photos To Display</p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection