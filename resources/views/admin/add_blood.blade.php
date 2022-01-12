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
        <div align="center"  style="padding-top:20px; font-size:30px;">
        @if(session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"></button>
          {{session()->get('message')}}
          </div>

        @endif
        <h1><b>ADD BLOOD Bank</b></h1>

        </div>
        <div class="d-flex justify-content-center" style="padding-top:30px;">
<form action="{{url('upload_blood')}}" method="POST">
    @csrf
  <div class="form-group">
   <label>Blood Bank Name</label>
    <input type="text" name="name" class="form-control"   placeholder="Enter Blood Bank Name">
  </div>
 
  <div class="form-group">
  <label>Address</label>
    <input type="text" name="address" class="form-control"   placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label>Phone</label>
    <input type="number" name="phone" class="form-control"   placeholder="Enter Phone Number">
  </div>
 <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</main>
  @include('admin.script')
  </body>
</html>
