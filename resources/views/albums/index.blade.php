@extends('layout.app') 
@section('content')
<div class="container">
        <div class="col-md-12 col-lg-12">
                <div class="card">
                        <div class="card-header">
                                <h1>Albums <span class="float-right"><a href="albums/create" class="btn btn-success btn-sm">add listing</a></span></h1>
                        </div>
                </div>
                <div class="row">
                        @if (count($albums)>0) @foreach ($albums as $album)
                        <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="card mt-4 box-shadow">
                                        <a href="/albums/{{$album->id}}">
                                                <img class="card-img-top thumbnail" style="height:200px;width:100%;" src="storage/album_covers/{{$album->cover_image}}" alt="Card image cap"/>
                                        </a>
                                        <div class="card-body text-center">
                                                <p class="card-text">{{$album->name}}
                                        </div>
                                </div>
                        </div>
                        @endforeach @else
                        <div class="card-body">
                                <p>No Albums To Display</p>
                        </div>
                        @endif
                </div>

        </div>
</div>
@endsection