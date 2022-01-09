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
          <div align="center" style="padding-top:50px;">
            <b style=" font-size: 40px;">Ambulance List For Khulna</b>
        </div>
          <div align="center" style="padding-top:50px;">
        <table>
                <tr style="background-color:black;">
                    <th style="padding:10px;font-size: 20px;color:white">Name</th>
                    <th style="padding:10px;font-size: 20px;color:white">Address</th>
                    <th style="padding:10px;font-size: 20px;color:white">Phone</th>
                    <th style="padding:10px;font-size: 20px;color:white">Delete</th>
                    <th style="padding:10px;font-size: 20px;color:white">Update</th>
                </tr>
                @foreach($khul as $khu)
                <tr style="background-color:skyblue;" align="center">
                    <td style="padding:10px;font-size: 20px;color:black">{{$khu->name}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$khu->address}}</td>

                    <td style="padding:10px;font-size: 20px;color:black">{{$khu->phone}}</td>

                    <td><a class="btn btn-danger" onclick="return confirm('Are You Sure to Delte This?')" href="{{url('delete_khul',$khu->id)}}">Delete</a></td>
                    <td><a class="btn btn-primary" href="{{url('update_khul',$khu->id)}}">Update</a></td>
                </tr>
                @endforeach
</table>
        </div>
        </div>
</div>
</main>
  @include('admin.script')
  </body>
</html>
