
@extends('backend.layouts.master')

@section('content')

@if(Session::has('message'))
<center><div class="alert alert-success">
	{{Session::get('message')}}
	</div></center>
	@endif

<form action="{{route('admin.adddistrict')}}" method="POST" role="form">
	@csrf
  <div class="form-group">
    <label for="div">Select Division</label>

    <select name="divid" id="div">
    	@foreach($divisions as $division)

		<option value="{{$division->div_id}}">{{$division->div_name}}</option>

    	@endforeach

    </select>
  </div>
  <div class="form-group"> 
  	<b><label for="name">Enter District Name</label></b>
  	<input type="text" name="name" id="name">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop