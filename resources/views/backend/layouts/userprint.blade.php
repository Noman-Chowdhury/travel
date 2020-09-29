<h2><center>All User List</center></h2><hr>

<CENTER><label>Admin</label></CENTER><hr>
    <table class="table table-bordered" border="solid 1px red" width="100%">

  <thead>
    <tr>
      <th scope="col" >#</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
    </tr>
  </thead>
  <tbody>
   
    @foreach($admin as $key=>$user)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>0{{$user->number}}</td>
    </tr>
   
   @endforeach

   </tbody>
</table>
<hr>



<CENTER><label>Customer</label></CENTER><hr>
                           	
    <table class="table table-bordered" border="solid 1px red" width="100%">
  <thead>
    <tr>
      <th scope="col" >#</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
    </tr>
  </thead>
  <tbody>
   
    @foreach($customer as $key=>$user)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>0{{$user->number}}</td>
    </tr>
   
   @endforeach 

   </tbody>
</table>
<hr>