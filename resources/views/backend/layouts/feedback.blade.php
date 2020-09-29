
@extends('backend.layouts.master')

@section('content')

<center><h1>Feedback Information</h1></center>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Comments</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($feedbacks as $key=>$feed)
    <tr>
      <th scope="row" style="font-weight: italic;">{{$key+1}}</th>
      <td>{{$feed->name }}</td>
      <td>{{$feed->email }}</td>
      <td>{{$feed->feed }}</td>
      <td>{{$feed->subject}}</td>
      <td>{{$feed->comments}}</td>
     
      <!-- <td>      
      
      <a href="{{route('deletefeedback',$feed->id)}}" class="btn btn-outline-danger" > × Remove</a></td> -->
     

        
    </tr>

@endforeach
  </tbody>
</table>




@stop