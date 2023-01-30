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
      <form action="{{url('/uploadpizza')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <div>
          <label>Title</label>
          <input style="color: black;" type="text" name="title" placeholder="Write a title" required>
        </div>

        <div>
          <label>Price</label>
          <input style="color: black ;" type="number" name="price" placeholder="price" required>
        </div>

        <div>
          <label>Image</label>
          <input type="file" name="image" required>
        </div>

        <div>
          <label>Description</label>
          <input style="color: black ;" type="text" name="description" placeholder="description" required>
        </div>

        <div>
          <input style="background-color: grey;" type="submit" value="Save" required>
        </div>


      </form>

      <p></p>

      

      <div>
        <table bgcolor="grey">
          <tr>
            <th style="padding: 30px;">Pizza Name</th>
            <th style="padding: 30px;">Price</th>
            <th style="padding: 30px;">Description</th>
            <th style="padding: 30px;">Image</th>
            <th style="padding: 30px;">Action</th>
            <th style="padding: 30px;">Action 2</th>
          </tr>

          @foreach($data as $data)
          <tr align="center">
            <td>{{$data->title}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->description}}</td>
            <td><img height="200px" width="200px" src="/pizzaimage/{{$data->image}}"></td>
            <td><a href="{{url('/deletepizza',$data->id)}}">Delete</a></td>
            <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
          </tr>
          @endforeach
        </table>
      </div>



    </div>

  </div>



  @include("admin.adminscript")

  <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>

</body>

</html>