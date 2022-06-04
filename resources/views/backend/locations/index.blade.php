<h1>All Locations</h1>

<button><a href="{{route('location.create')}}"> Add new location</a></button><br><br>

<table >

    <thead>
        <tr>
            <td>SL</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>

        @foreach ($locations as $key=>$location)
        <tr>
          
            <td>{{++$key}}</td>
            <td>{{$location->name}}</td>
            <td>
                <button><a href="{{route('location.edit',$location->id)}}">Edit</a></button>|
                <button><a href="{{route('location.show',$location->id)}}">Details</a></button>|
            <form action="{{ route('location.destroy',   $location->id) }}" method="post" >
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
