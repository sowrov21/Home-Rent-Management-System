

<div>
    @if ($errors->any())
    <div style="background-color:#ff9966 ">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
</div>


<form action="{{route('apartment.update',$apartment->id)}}" method="POST" enctype="multipart/form-data">

    <h3>Add new appartment</h3>
    @csrf
    <input id="name" type="hidden" name="owner_id" value="{{Auth::user()->id ?? '1'}}">
    <div>
        <label for="name">Apartment Name:</label>
    
        <input id="name" type="text" name="title" value={{$apartment->title}} placeholder=" apartment title">
    </div>
    <div>
        @error('title')
          <span style="tag:red;">{{ $message }}</span>
        @enderror
  </div>

  <div >
    <label for="name" >Select Location </label>

    <select name="location_id" >

      @foreach ($locations as $location)


        @if ($location->id == $apartment->location_id)
        
        <option value=" {{ $location->id }}" selected >{{ $location->name  }}</option>

        @else
        <option value=" {{ $location->id }}">{{ $location->name  }}</option>

        @endif


      @endforeach
         

    </select>
  </div>

  <div>
        <label>Tags</label> <br>
       
            @foreach ($tags  as $tag)
            <br>
            <input type="checkbox" name="tag_id[]" value="{{ $tag->id }}" {{ (in_array($tag->id, $selectedTags))? "checked" : "" }}/> 
            
            {{ $tag->name }}

             @endforeach
  </div>


    <div >
         <label >Add more image</label>
      <input type="file" name="image[]" multiple accept="image/*">
    </div>

     <div>
        <p>Existing Images</p>
        @foreach ($images as $image)
        {{-- @dd($image->name) --}}
                    @if(file_exists(storage_path().'/app/public/apartments/'.$image->name ) && (!is_null($image->name)))

                    <img src="{{ asset('storage/apartments/'.$image->name) }}" height="100" width="100">

                    @else
                    {{'image nai'}}
                    {{-- <img src="{{ asset('img/default.png') }}" /> --}}
                    @endif
        @endforeach

      </div>
       
     <button><a href="{{route('apartment_image.index',$apartment->id)}}">Manage Images</a></button> 


    <button type="submit">Submit</button>
    <button ><a href="{{route('apartment.index')}}">Back</a> </button>

</form>
