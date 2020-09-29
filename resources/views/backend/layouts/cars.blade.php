@extends('backend.layouts.master')

@section('content')


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Cars
</button>

@if(Session::has('msg'))
<script type="text/javascript">
  {{Session::get('msg')}}
</script>
@endif

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Car Name</th>
      <th scope="col">Driver Name</th>
      <th scope="col">Seat</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($cars as $key=>$car)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$car->name}}</td>
      <td>{{$car->driver}}</td>
      <td>{{$car->seat}}</td>
      <td>{{$car->price}}</td>
      <td>{{$car->status}}</td>
      <td><a href="{{route('admin.packages.delete',$car->id)}}" class="btn btn-outline-danger" > × Remove</a></td>
    </tr>
@endforeach
  </tbody>
</table>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Cars</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
  <form action="{{route('addcars')}}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="packagename">Car Name</label>
    <input type="text" class="form-control" id="packagename" name="carname" aria-describedby="emailHelp" placeholder="Enter Car Name">
  </div>

  <div class="form-group">

    <label for="details">Driver Name</label>
    <input type="text" class="form-control" id="details" name="drivername" placeholder="Enter Driver Name ">
  </div>

     <div class="form-group">

    <label for="seat">Seat</label>
    <input type="text" class="form-control" id="seat" name="seat"  placeholder="Available Seat">
  </div>    

   <div class="form-group">

    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" name="price"  placeholder="Rent Price">
  </div>
   <div class="form-group">

    <label for="status">Status</label>
    <select name="status">
        <option value="Available">Available</option>
        <option value="Not Available">Not Available</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>

    </div>
  </div>
</div>

@stop