

<form action="{{route('Role.storeRole')}}" method="POST">

    <h3>Add new Role</h3>
    @csrf
    <label for="name">Role Name:</label>
    
    <input id="name" type="text" name="name">

    <button type="submit">Submit</button>
    <button ><a href="{{route('Role.allUser')}}">Back</a> </button>

</form>