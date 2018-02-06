@extends('layouts.app')

@section('content')
<div class="container">
        <div class="col-md-8 col-log-8">
    <div class="row justify-content-center">
    
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('sidebar')
    @include('inc.sidebar')
@endsection