
@extends('backend.layouts.master')

@section('content')

<center><h1>Booking Information</h1></center>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Package Name</th>
      <th scope="col">Date</th>
      <th scope="col">Person</th>
      <th scope="col">Comments</th>
      <th scope="col">Cost</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($bookinginfo as $key=>$book)
    <tr>
      <th scope="row" style="font-weight: italic;">{{$key+1}}</th>
      <td>{{$book->user->name }}</td>
      <td>{{$book->package->package_name }}</td>
      <td>{{$book->checkin_date }}</td>
      <td>{{$book->person}}</td>
      <td>{{$book->details}}</td>
      <td>{{$book->totalcost}}</td>
      <td>{{$book->status}}</td>
      <td>
      @if($book->status=='Pending')
      <a href="{{route('userbookingupdate',$book->id)}}" class="btn btn-outline-danger" > Approve </a>
        @endif
        @if($book->status=='Approve')
      <a href="{{route('userbookingdeny',$book->id)}}" class="btn btn-outline-danger" > × Remove</a></td>
      @endif

        
    </tr>

@endforeach
  </tbody>
</table>




@stop