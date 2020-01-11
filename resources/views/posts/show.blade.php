@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <form action="/posts/{{$post->id}}" method="POST">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <div class="create-btn">
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            <input type="submit" name="btn" class="btn btn-danger" value="Delete" />
        </div>
    </form>
@endsection