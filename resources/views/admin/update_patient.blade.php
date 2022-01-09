<!DOCTYPE html>
<html lang="en">
  <head>
  <base href="/public">
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
        <div class="container" align="center" style="padding-top:50px;">
        <form action="{{url('editpatient',$data->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" name="name" value="{{$data->name}}" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" name="email" value="{{$data->email}}" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label  class="form-label">Phone Number</label>
    <input type="number" name="phone" value="{{$data->phone}}" class="form-control">
  </div>
  <div class="mb-3">
    <label>Blood Group</label>
    <select class="form-control" name="blood" value="{{$data->blood}}" required>
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
<input type="text"  name="gender" value="{{$data->gender}}" class="form-control">
  </div>
  <div class="mb-3">
  <label class="form-label">Date Of Birth</label>
<input type="date" name="dob" value="{{$data->dob}}" class="form-control">
  </div>
  <div class="form-group">
    <label>Old Image</label>
    <img height="100px;" width="100px;" src="patient/{{$data->image}}" alt="">
  </div><br>
  <div class="form-group">
    <label>New Image</label>
    <input type="file" name="image" class="form-control-file">
  </div><br>
  <div class="mb-3">
    <label  class="form-label">Address</label>
    <input type="text" name="address" value="{{$data->address}}" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
 </form>
 </div>
</div>
</main>
  @include('admin.script')
  </body>
</html>
