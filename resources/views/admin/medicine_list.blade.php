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
        <div align="center" style="padding-top:20px;">
        <h1 font-size:0px;"><b>Medicine List</b></h1>
        </div>
        <div align="center" style="padding-top:50px;">
      <table>
      <tr style="background-color:black;">
                    <th style="padding:10px;font-size: 20px;color:white">Medicine Name</th>
                    <th style="padding:10px;font-size: 20px;color:white">Catagory Name</th>
                    <th style="padding:10px;font-size: 20px;color:white">Description</th>
                    <th style="padding:10px;font-size: 20px;color:white">Price</th>
                    <th style="padding:10px;font-size: 20px;color:white">Manufactured</th>
                    <th style="padding:10px;font-size: 20px;color:white">Image</th>
                    <th style="padding:10px;font-size: 20px;color:white">Delete</th>
                    
                </tr>
                @foreach($data as $pharmacy)
                <tr style="background-color:skyblue;" align="center">
                    <td style="padding:10px;font-size: 20px;color:black">{{$pharmacy->name}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$pharmacy->cname}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$pharmacy->description}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$pharmacy->price}}TK</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$pharmacy->mname}}</td>
                    <td style="padding:10px;font-size: 20px;color:black"><img height="100px;" width="100px;" src="medicine/{{$pharmacy->image}}" alt=""></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are You Sure to Delte This?')" href="{{url('deletemedicine',$pharmacy->id)}}">Delete</a></td>
                    
                </tr>
                @endforeach
      </table>

</div>
</div>
</main>
  @include('admin.script')
  </body>
</html>
