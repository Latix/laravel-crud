@extends('layouts.app')

@section('content')
    <h1>Create Posts</h1>
    <form action="/posts" method="POST">
        {{csrf_field()}}
        <div class="form-group input-fields">
            <input type="text" name="title" placeholder="Title" class="form-control"/>
            <textarea type="text" name="body" placeholder="Body" class="form-control"></textarea>
            <div class="create-btn">
                <input type="submit" name="btn" class="btn btn-success" value="Submit" />
            </div>
        </div>
    </form>
@endsection