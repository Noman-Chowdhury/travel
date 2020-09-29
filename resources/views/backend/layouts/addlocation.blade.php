@extends('backend.layouts.master')

@section('content')
	
	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Location
</button>

@if(Session::has('message'))
<div class="alert alert-success">
	{{Session::get('message')}}
</div>
@endif
<table class="table">
  <thead class="thead-dark">
    <tr>
      <b><th scope="col">#</th></b>
      <b><th scope="col">Location Name</th></b>
      <b><th scope="col">Location Image</th></b>
      <b><th scope="col">District Name</th></b>
      <b><th scope="col">Division Name</th></b>
      <b><th scope="col">Location Details</th></b>
    </tr>
  </thead>
  <tbody>
  @foreach($locations as $key=>$location)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$location->location_name}}</td>
      <td>{{$location->image}}</td>
      <td>{{$location->dist->dist_name}}</td>
      <td>{{$location->dist->div->div_name}}</td>
      <td>{{$location->location_details}}</td>
    </tr>
@endforeach
  </tbody>
</table>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Location</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
  <form action="{{route('admin.addlocation')}}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="location_name">Location Name</label>
    <input type="text" class="form-control" id="location_name" name="location_name" aria-describedby="emailHelp" placeholder="Enter Location Name">
  </div>

  <div class="form-group">

    <label for="img1">Image</label>
    <input type="file" class="form-control" id="img1" name="image"  placeholder="Enter Package Price">
  </div>
  <div class="form-group">

    <select class="browser-default custom-select" name="district_id" >
  <option selected>Select District</option>
  @foreach($divisions as $division)
  <option value="{{$division->dist_id}}">{{$division->dist_name}}</option>
@endforeach
</select>
</div>
  <div class="form-group">

    <label for="location_details">Location Details</label>
    <input type="text" class="form-control" id="location_details" name="location_details" placeholder="Enter Package Details">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>

    </div>
  </div>
</div>



@stop