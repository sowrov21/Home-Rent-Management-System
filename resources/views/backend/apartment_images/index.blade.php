<h1>All Images of Apartment</h1>


<table >

    <thead>
        <tr>
            <td>SL</td>
            <td>Images</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>

        @foreach ($images as $key=>$image)
        <tr>
          
            <td>{{++$key}}</td>
            <td>
            
            @if(file_exists(storage_path().'/app/public/apartments/'.$image->name ) && (!is_null($image->name)))

            <img src="{{ asset('storage/apartments/'.$image->name) }}" height="100" width="100">

            @else
            {{'image nai'}}
            {{-- <img src="{{ asset('img/default.png') }}" /> --}}
            @endif

            </td>
            <td>
                <button><a href="{{route('apartment_image.edit',$image->id)}}">Edit</a></button>|
       
            <form action="{{ route('apartment_image.destroy',$image->id) }}" method="post" >
                     @csrf
                      @method('DELETE')
                     <button type="submit"  onclick="return confirm('Are You Sure Want To Delete?')">Delete</button>
             </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

<br><br><button ><a href="{{url('/')}}">Home</a> </button>

<style>
    table, th, td {
  border: 1px ;
  border-style: solid;
  border-collapse: collapse;
  text-align: center;

}
a{
    text-decoration: none;
}
</style>
