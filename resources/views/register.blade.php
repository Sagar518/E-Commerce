@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4" >
            <h1 style="text-align: center">Registration</h1>

            <form action="registerAction" method="POST" >
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" name="name" class="form-control"  placeholder="Name">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control"  placeholder="Email">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection
