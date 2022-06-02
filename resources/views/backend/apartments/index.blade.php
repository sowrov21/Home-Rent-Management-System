<h1>All Appartment</h1>

<button><a href="{{route('apartment.create')}}"> Add new apartment</a></button><br><br>


<table >

    <thead>
        <tr>
            <td>Id</td>
            <td>Title</td>
            <td>Location</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>

        @foreach ($apartments as $apartment)
        <tr>

            <td>{{$apartment->id}}</td>
            <td>{{$apartment->title}}</td>
            <td>{{$apartment->locations->name ?? ''}}</td>
            <td>
                <button><a href="{{route('apartment.edit',$apartment->id)}}">Edit</a></button>|
                <button><a href="{{route('apartment.show',$apartment->id)}}">Details</a></button>|
                <form action="{{ route('apartment.destroy',   $apartment->id) }}" method="post" >
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
