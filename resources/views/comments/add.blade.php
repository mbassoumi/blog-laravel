<div class="cards">
    <div class="card-block">
        <form method="POST" action="/posts/{{$post->id}}/comments">

            {{csrf_field()}}

            <div class="form-group">
                <textarea name="body" placeholder="Your Comment here" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add comment</button>
            </div>

        </form>
    </div>
</div>