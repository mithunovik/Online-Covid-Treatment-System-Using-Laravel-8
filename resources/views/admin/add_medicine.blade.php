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
        
        <div class="row" align="center" style="padding-top:20px;">
        <h1 align="center" style="font-size:30px;"><b>Add Medicine</b></h1>
        </div>
        <div class="row" align="center" style="padding-top:20px;">
  <form method="POST" action="{{url('upload_medicine')}}" enctype="multipart/form-data">
    @csrf
     <div class="mb-3">
      <label  class="form-label">Medicine Name</label>
      <input type="text" name="name" class="form-control">
     </div>
     <div class="mb-3">
      <label  class="form-label">Catagory Name</label>
      <input type="text" name="cname" class="form-control">
     </div>
     <div class="mb-3">
      <label  class="form-label">Description</label><br>
      <textarea rows="5" cols="110" name="description">
      </textarea>
     </div>
     <div class="mb-3">
      <label  class="form-label">Price</label>
      <input type="number" name="price" class="form-control">
     </div>
     <div class="mb-3">
      <label  class="form-label">Manufactured By</label>
      <input type="text" name="mname" class="form-control">
     </div>
     <div class="mb-3">
    <label>Doctor Image</label>
    <input type="file" name="image" class="form-control-file">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</main>
  @include('admin.script')
  </body>
</html>
