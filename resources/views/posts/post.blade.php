
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
            <a href="#">
                <?php
                    $user = \App\User::find($post->id);
                    $user = $user->name;
                ?>
                {{$user}}
            </a>
        </p>
        <p>{{$post->body}}</p>
    </div><!-- /.blog-post -->
<hr>
<hr>
{{--</div>--}}