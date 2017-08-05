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
                    <?php
                    $user = \App\User::find($post->id);
                    $user = $user->name;
                    ?>
                    {{$user}}
                </a>
            </p>
            <p>
                {{$post->body}}
            </p>
        </div><!-- /.blog-post -->
    </div>


    <hr>
    <div class="form-control">
        @if(count($post->comments))
            <div class="comments">
                <ul class="list-group">
                    @foreach($post->comments as $comment)
                        <li class="list-group-item">
                            @include('comments.comment')
                        </li>
                    @endforeach
                </ul>
            </div>
            <hr>
        @endif
        @include('comments.add')
        @include('layouts.errors')
    </div>




@endsection