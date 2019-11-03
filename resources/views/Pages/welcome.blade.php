
@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">
            
            <div class="content">
                <div class="title m-b-md">
                {{config('app.name','DemandHub')}}
                </div>
            <div class="jumbotron text-center">
                <p>This is a place to cater all your needs. </p>
                <p><a class="btn btn-primary btn-lg" href="/lsapp/public/login" role="button">Service Provider</a> <a class="btn btn-success btn-lg" href="/lsapp/public/register" role="button">User</a></p>
                </div> 
        </div>
@endsection