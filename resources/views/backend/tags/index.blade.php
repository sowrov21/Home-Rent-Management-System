<h1>All Tags</h1>

<button><a href="{{route('tag.create')}}"> Add new tag</a></button><br><br>

<table >

    <thead>
        <tr>
            <td>SL</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>

        @foreach ($tags as $key=>$tag)
        <tr>
          
            <td>{{++$key}}</td>
            <td>{{$tag->name}}</td>
            <td>
                <button><a href="{{route('tag.edit',$tag->id)}}">Edit</a></button>|
                <button><a href="{{route('tag.show',$tag->id)}}">Details</a></button>|
                {{-- <a href="{{route('tag.destroy',$tag->id)}}">Delete</a> --}}
            <form action="{{ route('tag.destroy',   $tag->id) }}" method="post" >
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
