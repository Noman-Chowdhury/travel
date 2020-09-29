@extends('backend.layouts.master')

@section('content')

	<form action="{{route('addusers')}}" method="POST" role=""	enctype="multipart/form-data">
		@csrf
  <div class="form-group">
  	  <div class="form-group">
    <label for="exampleInputPassword1">Full Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Full Name" name="name">
  </div>

    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Phone Number</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone Number" name="number">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Profile Picture</label>
    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="" name="image">
  </div>


  <button type="submit" class="btn btn-success">Submit</button>
</form>


@stop