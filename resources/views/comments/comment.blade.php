<div class="blog-comment">
    <p class="blog-post-meta">
        {{$comment->created_at->toFormattedDateString()}}
        by
        <a href="#">
            a7a
        </a>
    </p>
    <p>{{$comment->body}}</p>
</div><!-- /.blog-post -->