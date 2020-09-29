@extends('user.layouts.master')
@section('content')
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ----------> 


<table class="table table-user-information">
                    <tbody>
                      @foreach($booking as $key=>$book)
                      

                      <tr>
                        <td> Package: {{$key+1}} ::</td>
                        <td>{{$book->package->package_name}}</td>
                      </tr>
                
                      <tr>
                        <td>Check In Date</td>
                        <td>{{$book->checkin_date}}</td>
                      </tr>
                      <tr>
                        <td>Location</td>
                        <td>{{$book->package->loc->location_name}}</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Persons</td>
                        <td>{{$book->person}}</td>
                      </tr>
                        <tr>
                        <td>Total Cost</td>
                        <td>{{$book->package->price*$book->person}}</td>
                      </tr>
                      <tr>
                        <td>Status</td>
                        <td>{{$book->status}} <br>be on {{$book->checkin_date}}</td>
                      </tr>
                      @if($book->status=='Pending')
                        <td>Payment Method</td>
                        <td><a href="" data-toggle="modal" data-target="#exampleModal1">Click for Payment</a></td>
                      </tr>
                        <td>Action</td>
                        <td><a href="{{route('deletebooking',$book->id)}}">Cancal Booking</a><a href=""><br>Update Information</a>
                        </td>
                         @endif  
                      </tr>
                     
                      <tr>
                        
                        <td><td><a href="{{route('feedback',$book->package->package_id)}}"> Give Feedback</a></td></td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>


<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="margin-right: 100%;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Invoice:#100{{$book->id}}
                    </h3>
              
                <div class="panel-body">
                    <form role="form">
                    
                    <div class="row">
                        

bKash Number : 01777174791<br>
Account type : Personal<br>
===============================<br>
To send money:<br>

01. Go to your bKash Mobile Menu by dialing *247#<br>
02. Choose “Send Money”, Enter 1<br>
03. Enter ' 01777174791 '<br>
04. Enter the amount.<br>
05. Enter ' Invoice Number' as reference.<br>
06. Now enter your bKash Mobile Menu PIN to confirm the transaction<br>

For Any Help call : 01777174791<br>
Reference Number: 379<br>

                       
                    </div>
                    </form>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon"></span>{{$book->totalcost}}</span> Total Cost</a>
                </li>
            </ul>
            <br/>
            <a href="{{route('userpayment',$book->id)}}" class="btn btn-success btn-lg btn-block" role="button">Complete Payment</a>
        </div>
    </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"></button>
        <button type="button" class="btn btn-primary"></button>
      </div>
    </div>
  </div>
</div>

                  @stop