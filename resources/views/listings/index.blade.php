@extends('layout.app') 
@section('content')
<div class="container">
        <div class="col-md-8 col-lg-8 offset-md-2">
                <div class="card">
                        <div class="card-header">
                                <h1>Listings <span class="float-right"><a href="listings/create" class="btn btn-success btn-sm">add listing</a></span></h1>
                        </div>
                        <div class="card-body">
                                @if(count($listings)>0)
                                <table class="table table-striped">
                                        <tr>
                                                <th>Company</th>
                                                <th></th>
                                                <th></th>
                                        </tr>
                                        @foreach ($listings as $listing)
                                        <tr>
                                                <td>{{$listing->name}}</td>
                                                <td>
                                                        <span class="float-right">
                                                <a href="listings/{{$listing->id}}/edit" class="btn btn-default btn-sm">Edit</a> 
                                        </span>
                                                </td>
                                                <td>
                                                        {!! Form::open(['action'=>['ListingsController@destroy',$listing->id],'method'=>'POST','class'=>'float-left','onsubmit'=>'return
                                                        confirm("Are you sure?")']) !!} {{ Form::hidden('_method','DELETE')}}
                                                        {{ Form::bsSubmit('Delete',['class'=>'btn btn-danger'])}} {!! Form::close()
                                                        !!}
                                                </td>
                                        </tr>
                                        @endforeach
                                </table>
                                @endif
                        </div>
                </div>
        </div>
</div>
@endsection