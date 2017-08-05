@if(auth()->id()==$user->id)
    <div class="form-group text-left">
        <a class="btn btn-outline-primary" href="/posts/{{$post->id}}/edit">Update</a>
        <a class="btn btn-outline-primary" href="/posts/{{$post->id}}/delete">Delete</a>
    </div>
@endif