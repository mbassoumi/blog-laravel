<div class="blog-comment">
    <p class="blog-post-meta">
        {{$comment->created_at->diffForHumans()}}
        by
        <a href="#">
            <?php
            $user = \App\User::find($comment->user_id);
            $user = $user->name;
            ?>
            {{$user}}
        </a>
    </p>
    <p>{{$comment->body}}</p>
</div><!-- /.blog-post -->