
@extends('backend.layouts.master')

@section('content')

<center><h1>All the Districts</h1></center>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">District Name</th>
      <th scope="col">Division Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($districts as $key=>$district)
    <tr>
      <th scope="row" style="font-weight: italic;">{{$key+1}}</th>
      <td>{{$district->dist_name }}</td>
      <td>{{$district->div->div_name }}</td>
      <td>	</td>
    </tr>

@endforeach
  </tbody>
</table>




@stop