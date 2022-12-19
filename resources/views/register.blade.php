@extends('master')
@section('content')   
<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-3 d-flex justify-content-center custome-login">
            <form action="register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input name="name" type="textl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name">
                    
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
              </form>
        </div>
    </div>
</div>
@endsection
