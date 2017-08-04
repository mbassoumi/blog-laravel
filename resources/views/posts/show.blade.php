@extends('layouts.master')

@section('content')
    <div class="form-control">
        <div class="blog-post">

            <h2 class="blog-post-title">
                {{$post->title}}
            </h2>

            <p class="blog-post-meta">
                {{$post->created_at->toFormattedDateString()}}
                by
                <a href="#">
                    a7a
                </a>
            </p>

            <p>
                {{$post->body}}
            </p>
        </div><!-- /.blog-post -->
    </div>
@endsection