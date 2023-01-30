<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    @include("admin.admincss")
    
  </head>
  <body>

  <div class="container-scroller">


  @include("admin.navbar")

  <form action="{{url('/updatestaffmember',$data->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label>Staff Name</label>
        <input style="color:black;" type="text" name="name" value="{{$data->name}}">
    </div>
    <div>
        <label>Speciality</label>
        <input style="color:black;" type="text" name="speciality" value="{{$data->speciality}}">
    </div>
    <div>
        <label>Old Image</label>
        <img height="200px" width="200px" src="/staffimage/{{$data->image}}">
    </div>
    <div>
        <label>New Image</label>
        <input type="file" name="image">
    </div>
    <div>
        <input style="background-color: grey;" type="submit" value="Update Staff" required="">
    </div>
  </form>

  </div>

  @include("admin.adminscript")
    
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
  </body>
</html>
