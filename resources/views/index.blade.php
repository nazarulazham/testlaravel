  
@extends('app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome To Laravel!</h1>
        <p>This is the laravel application</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        <p><a href="/home">Login Admin</a></p>
    </div>
@endsection