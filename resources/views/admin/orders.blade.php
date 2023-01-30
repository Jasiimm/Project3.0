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

  

  <table bgcolor="grey" style="position: relative; top:-50px;">
    <tr>
        <td style="padding: 30px;">Name</td>
        <td style="padding: 30px;">Phone</td>
        <td style="padding: 30px;">Address</td>
        <td style="padding: 30px;">Foodname</td>
        <td style="padding: 30px;">Price</td>
        <td style="padding: 30px;">Quantity</td>
        <td style="padding: 30px;">Total Price</td>
    </tr>
    @foreach($data as $data)
    <tr align="center" style="background-color: grey;">
        <td>{{$data->name}}</td>
        <td>{{$data->phone}}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->foodname}}</td>
        <td>{{$data->price}}€</td>
        <td>{{$data->quantity}}</td>
        <td>{{$data->price * $data->quantity}}€</td>
    </tr>
    @endforeach
  </table>

  </div>

  @include("admin.adminscript")
    
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
  </body>
</html>
