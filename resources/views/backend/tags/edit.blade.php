

<form action="{{route('tag.update',$tag->id)}}" method="POST">

    <h3>Edit Tag</h3>
    @csrf
    
    <div>
        <label for="name">Tag Name:</label>
          <input id="name" type="text" name="name" value="{{$tag->name}}">
    </div>
    <div>
          @error('name')
            <span style="color:red;">{{ $message }}</span>
          @enderror
    </div>
  


    <button type="submit">Submit</button>

    <button ><a href="{{route('tag.index')}}">Back</a> </button>

</form>
