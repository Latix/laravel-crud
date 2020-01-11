@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>
            This is forbes application from scratch
        </p>
        <p>
            <a href="#" class="btn btn-primary btn-md" href="/login" role="button">Login</a>
            <a href="#" class="btn btn-success btn-md" href="/login" role="button">Register</a>
        </p>
    </div>
@endsection
