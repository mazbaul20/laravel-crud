<div class="col-12">
    <h1 class="h1 text-center mb-3 mt-2"><u>My First CRUD Project</u></h1>
    <a href="{{route('create')}}">
        <button class="btn btn-primary">Create</button>
    </a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Sl</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        @foreach ($users as $user)
            <tbody>
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$user->firstName}}</td>
                    <td>{{$user->lastName}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                <td>
                    <a href="{{route("show",$user->id)}}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                    <form id="delete" class="d-inline-block" action="{{route('delete',$user->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="text" hidden name="user_id" value="{{$user->id}}">
                        <button onclick="DeleteData()" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                </tr>
            </tbody>
        @endforeach
    </table>
    <script>
        function DeleteData(){
            document.getElementById('delete').innerHTML(alert("Do you want to delete data!!"));
        }
    </script>
</div>

