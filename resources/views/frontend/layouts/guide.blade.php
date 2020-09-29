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

<center><h2>Get Guide Information from Here</h2></center><hr>
<div>
  <label class="bold">Select Location to get Specific Tour Guide</label>
</div>

<div>
  @foreach($locations as $location)
  <div class="container">
      <a href="{{route('guides',$location->location_id)}}">{{$location->location_name}}</a>
  </div>
    
  @endforeach
</div>



@stop