

<form action="{{route('tag.store')}}" method="POST">

    <h3>Add new Tag</h3>
    @csrf
    
    <div>
        <label for="name">Tag Name:</label>
          <input id="name" type="text" name="name" value="{{old('name')}}">
    </div>
    <div>
          @error('name')
            <span style="color:red;">{{ $message }}</span>
          @enderror
    </div>
  


    <button type="submit">Submit</button>

</form>
