<!DOCTYPE html>
<html lang="en">
  <head>
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
       
        <div class="row" align="center" style="padding-top:50px;">
        @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"></button>
          {{session()->get('message')}}
          </div>

        @endif
   <form action="{{url('upload_patient')}}" method="POST" enctype="multipart/form-data">
      @csrf
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label  class="form-label">Phone Number</label>
    <input type="number" name="phone" class="form-control">
  </div>
  <div class="mb-3">
    <label>Blood Group</label>
    <select class="form-control" name="blood" required>
        <option value="">--Select--</option>
      <option>A+</option>
      <option>A-</option>
      <option>B+</option>
      <option>B-</option>
      <option>AB+</option>
      <option>AB-</option>
      <option>O+</option>
      <option>O-</option>

    </select>
  </div>
  <div class="mb-3">
    <label  class="form-label" name="gender">Gender</label><br>
    
  <label>Male</label>
<input type="radio"  name="gender" class="form-control">
  <label>Female</label>
  <input type="radio" name="gender" class="form-control">

  <label>Others</label>
  <input type="radio" name="gender" class="form-control">

  </div>
  <div class="mb-3">
  <label class="form-label">Date Of Birth</label>
<input type="date" name="dob" class="form-control">
  </div>
  <div class="mb-3">
    <label>Doctor Image</label>
    <input type="file" name="image" class="form-control-file">
  </div>
  <div class="mb-3">
    <label  class="form-label">Address</label>
    <input type="text" name="address" class="form-control">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
     </div>
</main>
  @include('admin.script')
  </body>
</html>
