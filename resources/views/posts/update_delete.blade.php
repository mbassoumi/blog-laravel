@if(auth()->id()==$user->id)
    <div class="form-group text-left">
        <a class="btn btn-outline-primary" href="/posts/{{$post->id}}/edit">Update</a>
        <a class="btn btn-outline-primary" onclick="return confirmDelete({{$post->id}})" href="" id="delete">Delete</a>
    </div>
@endif




<script>

    /**
     * Created by majd2 on 2017-08-05.
     */
    function confirmDelete(id) {
        var answer 	= confirm("Would you like to ...?");

        if(answer==true) {
            //do something
            window.location = "/posts/"+id+"/destroy";

            return false;

        }else{
            //do something
            alert('Don\'t play around -_- !!')
            return false;
        }
    }
</script>
