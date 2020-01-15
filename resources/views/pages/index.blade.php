@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>
            This is forbes application from scratch
        </p>
        <p>
            <a href="{{ route('login') }}" class="btn btn-primary btn-md" role="button">Login</a>
            <a href="{{ route('register') }}" class="btn btn-success btn-md" role="button">Register</a>
        </p>
    </div>
@endsection
