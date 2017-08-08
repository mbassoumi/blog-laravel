@extends('layouts.master')


@section('content')
    <h1>Publish post</h1>
    <hr>
    <form method="POST" action="/posts" enctype='multipart/form-data'>
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" >
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" class="form-control" placeholder="Body" ></textarea>
        </div>

        <div class="form-group">
            <input type="file" name="photo[]" multiple accept="image/* ">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>
    </form>

    @include('layouts.errors')

@endsection
