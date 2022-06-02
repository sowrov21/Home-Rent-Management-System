<form action="{{ route('Role.updateRole',$role->id) }}" method="POST">

    <h3>Edit Name</h3>
    @csrf
    <label for="name">Role Name:</label>

    <input id="name" type="text" name="name" value="{{ $role->name }}">

    <button type="submit">Submit</button>
    <button ><a href="{{route('Role.allUser')}}">Back</a> </button>
