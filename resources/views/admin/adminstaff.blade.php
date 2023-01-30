<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->

  @include("admin.admincss")

</head>

<body>

  <div class="container-scroller">


    @include("admin.navbar")
    <div style="position: relative ; top: 60px; right: -150px;">
      <form action="{{url('/uploadstaff')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
          <label>Name</label>
          <input style="color: black;" type="text" name="name" required="" placeholder="Enter name">
        </div>
        <div>
          <label>Speciality</label>
          <input style="color: black;" type="text" name="speciality" required="" placeholder="Enter the speciality">
        </div>
        <div>
          <label>Image</label>
          <input type="file" name="image" required="">
        </div>
        <div>
          <input style="color: white; background-color:grey;" type="submit" value="Save">
        </div>
      </form>

      <p></p>


      <table bgcolor="grey">
        <tr>
          <th style="padding: 30px;">Staff Name</th>
          <th style="padding: 30px;">Speciality</th>
          <th style="padding: 30px;">Image</th>
          <th style="padding: 30px;">Action</th>
          <th style="padding: 30px;">Action 2</th>
        </tr>
        @foreach($data as $data)
        <tr align="center">
          <td>{{$data->name}}</td>
          <td>{{$data->speciality}}</td>
          <td><img height="200px" width="200px" src="/staffimage/{{$data->image}}"></td>
          <td><a href="{{url('/updatestaff',$data->id)}}">Update</a></td>
          <td><a href="{{url('/deletestaff',$data->id)}}">Delete</a></td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>

  @include("admin.adminscript")

  <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>

</body>

</html>