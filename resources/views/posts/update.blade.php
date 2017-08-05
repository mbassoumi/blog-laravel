@extends('layouts.master')


@section('content')
    <h1>Edit The Post</h1>
    <hr>
    <form method="POST" action="/posts/{{$post->id}}/edit">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" >
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" class="form-control" placeholder="Body" ></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>
    </form>

    @include('layouts.errors')

@endsection
