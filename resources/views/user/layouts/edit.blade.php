@extends('user.layouts.master')
@section('content')

<form action="{{route('edit')}}" method="POST" role="form" enctype="multipart/form-data">
  @csrf
  
  <div class="form-group">
    <label for="name">Full Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" value="{{auth()->user()->name}}" name="name">
    </div>
  <div class="form-group">
    <label for="number">Phone Number</label>
    <input type="text" class="form-control" id="number" value="{{auth()->user()->number}}" name="number">
  </div>
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="text" class="form-control" id="email" value="{{auth()->user()->email}}" name="email">
  </div>
  <div class="form-group">
    <label for="password">Change Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>




                    
                  @stop