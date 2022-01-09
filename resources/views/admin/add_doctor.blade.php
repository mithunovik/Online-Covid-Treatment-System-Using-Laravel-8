<!DOCTYPE html>
<html lang="en">
  <head>
      <style type="text/css">

          .label 
          {
              display: inline-block;

              
          }

      </style>
    @include('admin.css')
  </head>
  <body>
    <!-- top navigation bar -->
    @include('admin.navbar')
    <!-- top navigation bar -->
    <!-- offcanvas -->
    @include('admin.sidebar')
    <!-- offcanvas -->
   
    <main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Dashboard</h4>
          </div>
        </div>
        <h1 align="center"  style="padding-top:20px; font-size:30px;"><b>Add Doctors</b></h1>
        <div class="row" align="center" style="padding-top:50px;">

        @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"></button>
          {{session()->get('message')}}
          </div>

        @endif
         
        <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="form-group">
    <label>Doctor Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Doctor Name" required>
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" name="email" class="form-control"   placeholder="Enter email" required>
    
  </div>
  <div class="form-group">
    <label>Phone Number</label>
    <input type="number" name="phone" class="form-control"  placeholder="Phone Number" required>
  </div>
  <div class="form-group">
    <label>Speciality</label>
    <select class="form-control" name="speciality" required>
        <option value="">--Select--</option>
      <option>Medicine</option>
      <option>Cardiology</option>
      <option>Dental</option>
      <option>General Health</option>
      <option>Eye</option>
      <option>Nose</option>
      <option>Skin</option>
    </select>
  </div>
  <div class="form-group">
    <label>Room Number</label>
    <input type="number" name="room" class="form-control"  placeholder="Room Number" required>
  </div><br>
  <div class="form-group">
    <label>Doctor Image</label>
    <input type="file" name="image" class="form-control-file">
  </div>
  <div class="form-group">
    <label>Time</label>
    <input type="text" name="time" class="form-control"  placeholder="Enter the Time" required>
  </div><br>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
    </main>
  @include('admin.script')
  </body>
</html>
