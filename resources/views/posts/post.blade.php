
{{--<div class="form-control">--}}
    <div class="blog-post">
        <h2 class="blog-post-title">
            <a href="/posts/{{$post->id}}">
                {{$post->title}}
            </a>
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
        <?php
        $media = $post->getMedia();
        ?>
        @if(emptyArray($media))
            @foreach($media as $a7a)
                <img src="{{$a7a->getUrl()}}" height="222" width="222">
            @endforeach
        @endif
        <p>{{$post->body}}</p>



    </div><!-- /.blog-post -->
<hr>
<hr>
{{--</div>--}}