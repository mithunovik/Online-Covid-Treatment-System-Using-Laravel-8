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
        <div align="center" style="padding-top:50px;">
        <h1 font-size:0px;"><b>Doctor List</b></h1>
        </div>
        <div align="center" style="padding-top:50px;">
        <table>
                <tr style="background-color:black;">
                    <th style="padding:10px;font-size: 20px;color:white">Doctor Name</th>
                    <th style="padding:10px;font-size: 20px;color:white">Email</th>
                    <th style="padding:10px;font-size: 20px;color:white">Phone</th>
                    <th style="padding:10px;font-size: 20px;color:white">Speciality</th>
                    <th style="padding:10px;font-size: 20px;color:white">Room</th>
                    <th style="padding:10px;font-size: 20px;color:white">Image</th>
                    <th style="padding:10px;font-size: 20px;color:white">Time</th>

                    <th style="padding:10px;font-size: 20px;color:white">Delete</th>
                    <th style="padding:10px;font-size: 20px;color:white">Update</th>
                </tr>
                @foreach($data as $doctor)
                <tr style="background-color:skyblue;" align="center">
                    <td style="padding:10px;font-size: 20px;color:black">{{$doctor->name}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$doctor->email}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$doctor->phone}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$doctor->speciality}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$doctor->room}}</td>
                    <td style="padding:10px;font-size: 20px;color:black"><img height="100px;" width="100px;" src="doctor/{{$doctor->image}}" alt=""></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are You Sure to Delte This?')" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                    <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
                </tr>
                @endforeach
</table>
        </div>
    </div>
</main>
  @include('admin.script')
  </body>
</html>
