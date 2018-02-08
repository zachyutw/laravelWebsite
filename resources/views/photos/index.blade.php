@extends('layout.app') 
@section('content')
<div class="container">
        <div class="col-md-12 col-lg-12">
                <div class="card">
                        <div class="card-header">
                                <h1>Photos <span class="float-right"><a href="albums/create" class="btn btn-success btn-sm">add listing</a></span></h1>
                        </div>
                </div>
                <div id="photos" class="row">
                        @if (count($albums->photos)>0) 
                        @foreach ($albums->photos as $photo)
                        <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="card mt-4 box-shadow">
                                        <a href="/photos/{{$photo->id}}">
                                                <img class="card-img-top thumbnail" style="height:200px;width:100%;" src="storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="Card image cap"/>
                                        </a>
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