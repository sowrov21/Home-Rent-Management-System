

<form action="{{route('apartment.store')}}" method="POST" enctype="multipart/form-data">

    <h3>Add new appartment</h3>
    @csrf
    <input id="name" type="hidden" name="owner_id" value="{{Auth::user()->id ?? '1'}}">
    <div>
        <label for="name">Apartment title:</label>
    
        <input id="name" type="text" name="title" placeholder=" apartment title">
    </div>
    <div>
        @error('title')
          <span style="color:red;">{{ $message }}</span>
        @enderror
  </div>


  <div >
    <label for="location_id" >Select Location </label>

    <select name="location_id" >

      @foreach ($locations as $location)

        <option value="{{ $location->id }}">{{ $location->name  }}</option>

      @endforeach

    </select>

  </div>

  <div>
    <label >Tags </label>
    @foreach ($tags  as $tag)

    <input type="checkbox" name="tag_id[]" value="{{ $tag->id }}"/> {{ $tag->name }}

  @endforeach
  </div>

  <div >
    <label >Image</label>
    <input type="file" name="image[]" multiple accept="image/*">
  </div>


    <button type="submit">Submit</button>
    <button ><a href="{{route('apartment.index')}}">Back</a> </button>

</form>