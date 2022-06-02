

<form action="{{route('location.store')}}" method="POST">

  <h3>Update Location</h3>
  @csrf
  
  <div>
      <label for="name">Location Name:</label>
        <input id="name" type="text" name="name" value="{{$location->name}}">
  </div>
  <div>
        @error('name')
          <span style="color:red;">{{ $message }}</span>
        @enderror
  </div>



  <button type="submit">Submit</button>
  <button type="button"><a href="{{route('location.index')}}">Back</a> </button>

</form>
