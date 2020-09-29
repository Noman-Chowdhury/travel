@extends('backend.layouts.master')

@section('content')
	
	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Guide Information
</button>

@if(Session::has('msg'))
<div class="alert alert-success">
	{{Session::get('msg')}}
</div>
@endif
<table class="table">
  <thead class="thead-dark">
    <tr>
      <b><th scope="col">#</th></b>
      <b><th scope="col">Guide Name</th></b>
      <b><th scope="col">From</th></b>
      <b><th scope="col">Phone Number</th></b>
      <b><th scope="col">Fee</th></b>
      <b><th scope="col">Status</th></b>
    </tr>
  </thead>
  <tbody>
  @foreach($guides as $key=>$guide)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$guide->name}}</td>
      <td>{{$guide->loc->location_name}}</td>
      <td>{{$guide->number}}</td>
      <td>{{$guide->fee}}</td>
      <td>{{$guide->status}}</td>
    </tr>
@endforeach
  </tbody>
</table>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Guide</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
  <form action="{{route('addguide')}}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="name">Guide Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Guide Name">
  </div>  


  <div class="form-group">

    <select class="browser-default custom-select" name="location" >

  @foreach($locations as $loc)
  <option value="{{$loc->location_id}}">{{$loc->location_name}}</option>
@endforeach
</select>
</div>
  <div class="form-group">
    <label for="number">Phone Number</label>
    <input type="text" class="form-control" id="number" name="number" aria-describedby="emailHelp" placeholder="Enter number ">
  </div>

  <div class="form-group">

    <label for="fee"> Guidence Fee</label>
    <input type="text" class="form-control" id="fee" name="fee" placeholder="Enter fee">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>

    </div>
  </div>
</div>



@stop