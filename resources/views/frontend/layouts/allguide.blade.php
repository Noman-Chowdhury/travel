@extends('frontend.partials.master')
@include('frontend.partials.banner')

@section('content')
<style type="text/css">
  body {
    color: black;
    font-family: "Poppins", sans-serif;
    font-size: 20px;
    font-weight: 300;
    line-height: 1.625em;
}

</style>

<center><h2>From: {{$location->location_name}}</h2></center><hr>
@foreach($guide as $key=>$g)
<label for="name" class="bold">{{$key+1}}</label>
<div class="container">
  
  <p id="name">Name:  <t>{{$g->name}}</t></p>
  <p id="name">Lives In:  <t>{{$g->loc->location_name}},{{$g->loc->dist->dist_name}},{{$g->loc->dist->div->div_name}}</t></p>
  <p id="name">Phone Number:  <t>{{$g->number}}</t></p>
  <p id="name">Fee:  <t>{{$g->fee}}</t></p>
  <p id="name">{{$g->status}}</t></p>
</div>
@endforeach

</div>



@stop