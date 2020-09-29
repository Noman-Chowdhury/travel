@extends('frontend.partials.master')
@include('frontend.partials.banner')

@section('content')
<style type="text/css">
	.form-control{
		width:  70%

	}

</style>
<center><h3>Please Submit the form to Rent a Car</h3></center><hr>
<center><div>
<div class="form-control"  >
	@if(Session::has('msg'))
	<div class="alert alert-success">
		{{Session::get('msg')}}
	</div>
	@endif
<form action="{{route('bookcar')}}" method="POST" role="form">
	@csrf
  <div class="form-group">

    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name="name">    
  </div>
  <div class="form-group">
    
    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="Number" placeholder="Enter Number" name="number">
  </div>
  <div class="form-group">

    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your Address" name="address" >
  </div> 

    <div class="form-group">
    
    <select name="destination" class="form-control">
    	@foreach($destinations as $car)
    	<option value="{{$car->location_name}}">{{$car->location_name}}</option>
    	@endforeach
    </select>
  </div>

  <div class="form-group">
    
    <select name="car" class="form-control">
    	@foreach($cars as $car)
    	<option value="{{$car->id}}">{{$car->name}},{{$car->seat}}Seat,BDT-{{$car->price}}TK </option>
    	@endforeach
    </select>
  </div>
  <div class="form-group">
   
    <input type="number" class="form-control" id="noofcars" placeholder="Number of Cars" name="noc">
  </div>
  <div class="form-group">

    <input type="number" class="form-control" id="people" placeholder="Number of People" name="nop">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</div></center>
@stop