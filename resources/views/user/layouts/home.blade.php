@extends('user.layouts.master')
@section('content')

<table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Full Name:</td>
                        <td>{{Auth()->User()->name}}</td>
                      </tr>
                      <tr>
                        <td>Phone Number</td>
                        <td>{{Auth()->User()->number}}</td>
                      </tr>
                      <tr>
                        <td>Account Created At</td>
                        <td>{{Auth()->User()->created_at}}</td>
                      </tr>
                   
                         <tr>
                      <tr>
                        <td>Email</td>
                        <td>{{Auth()->User()->email}}</td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>Bangladesh, Dhaka</td>
                      </tr>
                      
                    
                     
                    </tbody>
                  </table>
                  @stop