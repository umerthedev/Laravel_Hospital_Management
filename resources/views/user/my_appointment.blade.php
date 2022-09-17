<!DOCTYPE html>
<html lang="en">
<head>
  
  @include('user.css');
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  
   @include('user.header');
 

 
   <div class="container mt-3">
    
    <h2>Your Appointment Status</h2>
              
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Appointment Date</th>
          <th>Doctor</th>
          <th>Message</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody> 
        @foreach ($appoint as $app)
            
       
        <tr>
          <td>{{$app->date}}</td>
          <td>{{$app->doctor}}</td>
          <td>{{$app->message}}</td>
          <td>{{$app->status}}</td>
          <td><a href="{{url('delete_app',$app->id)}}" onclick="return confirm('Are You Sure Want To Cancel This Appointment')" class="btn btn-danger"> Cancel</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
      
 

  

  @include('user.footer')


  

  @include('user.script')


  
</body>
</html>
