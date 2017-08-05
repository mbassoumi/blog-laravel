@extends ('layouts.master')



@section('content')
        @foreach($posts as $post)
            {{--{{$post->title}}--}}
            @include('posts.post')
        @endforeach

        <div class="form-group text-center">
            <a class="btn btn-outline-primary" href="/posts/create">Create New Post</a>
        </div>
    @include('layouts.pagination')


@endsection

