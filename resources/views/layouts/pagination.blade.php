<nav class="blog-pagination text-center">
    @if($posts->currentPage()==1)
        <a class="btn btn-outline-secondary disabled" href="{{$posts->previousPageUrl()}}">Older</a>
    @else
        <a class="btn btn-outline-primary" href="{{$posts->previousPageUrl()}}">Older</a>
    @endif

    @if($posts->hasMorePages())
        <a class="btn btn-outline-primary" href="{{$posts->nextPageUrl()}}">Newer</a>
    @else
        <a class="btn btn-outline-secondary disabled" href="{{$posts->nextPageUrl()}}">Newer</a>
    @endif
</nav><!-- /.blog-main -->