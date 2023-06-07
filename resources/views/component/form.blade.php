<div class="col-8 mt-5 center">
    <h2 class="text-center">Create Data</h2>

    <form action="{{route('store')}}" method="POST">
        <label for="fname">First Name</label>
        <input class="form-control mb-2" type="text" id="fname" name="fname" placeholder="first name">
        <label for="lname">Last Name</label>
        <input class="form-control mb-2" type="text" id="lname" name="lname" placeholder="last name">
        <label for="email">Email</label>
        <input class="form-control mb-2" type="email" id="email" name="email" placeholder="email">
        <label for="password">Password</label>
        <input class="form-control mb-2" type="password" id="password" name="password" placeholder="password">
        <label for="submit"></label>

        <button class="btn btn-success">Submit</button>
    </form>
</div>
