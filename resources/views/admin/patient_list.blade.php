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
        <table>
                <tr style="background-color:black;">
                    <th style="padding:10px;font-size: 20px;color:white">Patient Name</th>
                    <th style="padding:10px;font-size: 20px;color:white">Email</th>
                    <th style="padding:10px;font-size: 20px;color:white">Phone</th>
                    <th style="padding:10px;font-size: 20px;color:white">Blood Group</th>
                    <th style="padding:10px;font-size: 20px;color:white">Gender</th>
                    <th style="padding:10px;font-size: 20px;color:white">Date Of Birth</th>
                    <th style="padding:10px;font-size: 20px;color:white">Image</th>
                    <th style="padding:10px;font-size: 20px;color:white">Address</th>
                    <th style="padding:10px;font-size: 20px;color:white">Delete</th>
                    <th style="padding:10px;font-size: 20px;color:white">Update</th>
                </tr>
                @foreach($data as $patient)
                <tr style="background-color:skyblue;" align="center">
                    <td style="padding:10px;font-size: 20px;color:black">{{$patient->name}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$patient->email}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$patient->phone}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$patient->blood}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$patient->gender}}</td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$patient->dob}}</td>
                    <td style="padding:10px;font-size: 20px;color:black"><img height="100px;" width="100px;" src="patient/{{$patient->image}}" alt=""></td>
                    <td style="padding:10px;font-size: 20px;color:black">{{$patient->address}}</td>

                    <td><a class="btn btn-danger" onclick="return confirm('Are You Sure to Delte This?')" href="{{url('deletepatient',$patient->id)}}">Delete</a></td>
                    <td><a class="btn btn-primary" href="{{url('updatepatient',$patient->id)}}">Update</a></td>
                </tr>
                @endforeach
</table>
        </div>
    </div>
</main>
  @include('admin.script')
  </body>
</html>
