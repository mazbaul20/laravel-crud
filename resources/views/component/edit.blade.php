<div class="col-8 mt-5 center">
    <h2 class="text-center">Update Data</h2>
    {{-- {{route('store')}} --}}
    <form action="{{url('update')}}" method="POST">
        @csrf
        <input type="text" name="user_id" hidden value="{{$users->id}}">
        <label for="fname">First Name</label>
        <input class="form-control mb-2" type="text" id="fname" name="fname" value="{{$users->firstName}}" placeholder="first name">
        <label for="lname">Last Name</label>
        <input class="form-control mb-2" type="text" id="lname" name="lname" value="{{$users->lastName}}" placeholder="last name">
        <label for="email">Email</label>
        <input class="form-control mb-2" type="email" id="email" name="email" value="{{$users->email}}" placeholder="email">
        <label for="password">Password</label>
        <input class="form-control mb-2" type="password" id="password" name="password" value="{{$users->password}}" placeholder="password">
        <label for="submit"></label>

        <button class="btn btn-success">Submit</button>

    </form>
</div>
