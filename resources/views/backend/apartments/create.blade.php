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

<form action="{{route('apartment.store')}}" method="POST" enctype="multipart/form-data">

    <h3>Add new appartment</h3>
    @csrf
    <input id="title" type="hidden" name="owner_id" value="{{Auth::user()->id ?? '1'}}">
    <div>
        <label for="title">Apartment title:</label>
    
        <input id="title" type="text" name="title" placeholder=" apartment title"  value="{{ old('title') }}">
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

  <label >Main Image</label>
  <input type="file" name="main_image" accept="image/*">
</div>

  <div >
    <label >Other Images</label>
    <input type="file" name="image[]" multiple accept="image/*">
  </div>
  <div >


  <div>
    <label for="	price">Apartment Price:</label>
  
    <input id="	price" type="number" name="price" placeholder="apartment price" value="{{ old('price') }}">
  </div>
  <div>
    @error('price')
      <span style="color:red;">{{ $message }}</span>
    @enderror
  </div>
  

  <div>
    <label >Apartment Size:</label>

    <input  type="number" name="apartment_size" placeholder=" apartment size" value="{{ old('apartment_size') }}">
</div>
<div>
    @error('apartment_size')
      <span style="color:red;">{{ $message }}</span>
    @enderror
</div>


<div >
  <label for="apartment_type_id" >Apartment Type </label>

  <select name="apartment_type_id" >

      <option value="1">Family</option>
      <option value="2">Bachelor</option>

  </select>

</div>

<div>
  <label>Total Bed</label>

  <input  type="number" name="total_bed" placeholder=" apartment bed" value="{{ old('total_bed') }}">
</div>
<div>
  @error('title')
    <span style="color:red;">{{ $message }}</span>
  @enderror
</div>


<div>
  <label >Total Belcony</label>

  <input  type="number" name="total_balcony" placeholder=" apartment belcony"  value="{{ old('total_balcony') }}">
</div>
<div>
  @error('total_balcony')
    <span style="color:red;">{{ $message }}</span>
  @enderror
</div>



<div>
  <label for="name">Total Parking:</label>

  <input type="number" name="total_parking" placeholder=" apartment parking" value="{{ old('total_parking') }}">
</div>
<div>
  @error('total_parking')
    <span style="color:red;">{{ $message }}</span>
  @enderror
</div>




<div>
  <label for="parking_size">Parking Size:</label>

  <input id="parking_size" type="number" name="parking_size" placeholder=" parking size"  value="{{ old('parking_size') }}">
</div>
<div>
  @error('parking_size')
    <span style="color:red;">{{ $message }}</span>
  @enderror
</div>

<div>
  <label for="floor_number">Floor no:</label>

  <input id="parking_size" type="number" name="floor_number" placeholder=" floor number" value="{{ old('floor_number') }}">
</div>
<div>
  @error('floor_number')
    <span style="color:red;">{{ $message }}</span>
  @enderror
</div>
<div>
  <label for="unit_number">Unit Number:</label>

  <input id="unit_number" type="number" name="unit_number" placeholder=" unit number" value="{{ old('unit_number') }}">
</div>
<div>
  @error('unit_number')
    <span style="color:red;">{{ $message }}</span>
  @enderror
</div>
<div>
  <label for="unit_per_floor">Unit per floor:</label>

  <input id="unit_per_floor" type="number" name="unit_per_floor" placeholder="unit per floor" value="{{ old('unit_per_floor') }}">
</div>
<div>
  @error('unit_per_floor')
    <span style="color:red;">{{ $message }}</span>
  @enderror
</div>
<div>
  <label for="total_lift">Total Lift:</label>

  <input id="total_lift" type="number" name="total_lift" placeholder="total lift" value="{{ old('total_lift') }}">
</div>
<div>
  @error('total_lift')
    <span style="color:red;">{{ $message }}</span>
  @enderror
</div>

<div >
  <label for="apartment_facing" >Apartment Facing </label>

  <select name="apartment_facing" >

      <option value="North">North</option>
      <option value="South">South</option>
      <option value="East">East</option>
      <option value="West">West</option>

  </select>

</div>
<div>
  <label for="year_build">Property Built Year:</label>

  <input id="year_build" type="date" name="year_build" >
</div>
<div>
  @error('year_build')
    <span style="color:red;">{{ $message }}</span>
  @enderror
</div>



    <button type="submit">Submit</button>
    <button ><a href="{{route('apartment.index')}}">Back</a> </button>

</form>