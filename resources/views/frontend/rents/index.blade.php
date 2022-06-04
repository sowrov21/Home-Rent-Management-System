<h1>All Roles</h1>

<button><a href="{{route('Role.createRole')}}"> Add new role</a></button><br><br>


<table >

    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>

        @foreach ($arrayData as $role)
        <tr>

            <td>{{$role->id}}</td>
            <td>{{$role->name}}</td>
            <td>
                <a href="{{ route('Role.editRole',$role->id) }}">Edit</a>|
                <a href="{{ route('Role.detailsRole',$role->id) }}">Details</a>|
                <a href="{{route('Role.destroyRole',$role->id)}}">Delete</a>
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
