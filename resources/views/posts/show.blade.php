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
                <?php
                $user = \App\User::find($post->user_id);
                ?>
                <a href="/profile/{{$user->id}}">

                    {{$user->name}}
                </a>
            </p>
            <p>
                {{$post->body}}
            </p>

            <?php
                $media = $post->getMedia();
                ?>
            @if(emptyArray($media))
                @foreach($media as $a7a)
                    <img src="{{$a7a->getUrl()}}" height="222" width="222">
                @endforeach
            @endif
        </div><!-- /.blog-post -->
        <?php
            $user = \App\User::find($post->user_id);
        ?>
        @include('posts.update_delete',compact('user'))
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