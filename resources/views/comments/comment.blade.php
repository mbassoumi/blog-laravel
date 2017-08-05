<div class="blog-comment">
    <p class="blog-post-meta">
        {{$comment->created_at->diffForHumans()}}
        by
        <?php
        $user = \App\User::find($comment->user_id);
        ?>
        <a href="/profile/{{$user->id}}">
            {{$user->name}}
        </a>
    </p>
    <p>{{$comment->body}}</p>
</div><!-- /.blog-post -->