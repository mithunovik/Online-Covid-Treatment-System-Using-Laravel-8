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
</div>
<h1 align="center"  style="padding-top:20px; font-size:30px;"><b>Add Ambulance For Mymensingh</b></h1>
<div class="row" align="center" style="padding-top:50px;">

@if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
          {{session()->get('message')}}
          </div>

        @endif
<form action="{{url('upload_mymen')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" name="name" class="form-control">
   
  </div>
  <div class="mb-3">
    <label  class="form-label">Address</label>
    <input type="text" name="address" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Phone</label>
    <input type="number" name="phone" class="form-control" >
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</main>
  @include('admin.script')
  </body>
</html>
