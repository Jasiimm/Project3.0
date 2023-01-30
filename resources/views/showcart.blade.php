<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="/public">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <!--   <img src="assets/images/klassy-logo.png" align="klassy cafe html template"> -->
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/home">Home</a></li>
                            <li class="scroll-to-section"><a href="/about" class="">Over Ons</a></li>
                            <li class="scroll-to-section"><a href="/staff">Personeel</a></li>

                            <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="/pizzas">Pizza's</a></li>

                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="/contact">Contact</a></li>
                            <li class="scroll-to-section">
                                @auth
                                <a class="active" href="{{url('/showcart',Auth::user()->id)}}">
                                    Cart {{$count}}
                                </a>
                                @endauth
                                @guest
                                Cart[0]
                                @endguest
                            </li>


                            <li>
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                            <li>

                                <x-app-layout>

                                </x-app-layout>

                            </li>
                            @else
                            <li>
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                            </li>

                            @if (Route::has('register'))
                            <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> </li>
                            @endif
                            @endauth
                </div>
                @endif
                </li>



                </ul>
                <a class='menu-trigger'>
                    <!-- <span>Menu</span>  -->
                </a>
                <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div id="top">
        <table align="center" bgcolor="grey">
            <tr>
                <th style="padding: 30px; color:white;">Naam</th>
                <th style="padding: 30px; color:white;">Prijs</th>
                <th style="padding: 30px; color:white;">Aantal</th>
                <th style="padding: 30px; color:white;">Afbeelding</th>
                <th style="padding: 30px; color:white;">Actie</th>

            </tr>
    <form action="{{url('orderconfirm')}}" method="post" >
        @csrf
                @foreach($data as $data)
                <tr>
                    <td align="center">
                        {{$data->title}}
                        <input type="text" name="foodname[]" value="{{$data->title}}" hidden="">
                    </td>
                    <td align="center">
                        {{$data->price}}
                        <input type="text" name="price[]" value="{{$data->price}}" hidden="">
                    </td>
                    <td align="center">
                        {{$data->quantity}}
                        <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">
                    </td>
                    <td align="center"><img height="200px" width="200px" src="/pizzaimage/{{$data->image}}"></td>
                    <td></td>
                </tr>
                @endforeach

                @foreach($data2 as $data2)
                <tr style="position: relative; top:-90px; right: -510px;">
                    <td>
                        <a href="{{url('/remove',$data2->id)}}" class="btn btn-warning">Verwijder

                    </td>
                </tr>
                @endforeach
        </table>

        <div align="center" style="padding: 10px;">
            <button class="btn btn-primary" id="order" type="button">Bestel Nu</button>
        </div>

        <div id="appear" align="center" style="padding: 10px; display:none;">
            <div style="padding: 10px;">
                <input type="text" name="name" placeholder="Naam">
            </div>
            <div style="padding: 10px;">
                <input type="number" name="phone" placeholder="Telefoonnummer">
            </div>
            <div style="padding: 10px;">
                <input type="text" name="address" placeholder="Adres">
            </div>
            <div style="padding: 10px;">
                <input class="btn btn-success" color="green" type="submit" value="Order Confirm">
                <button id="close" type="button" class="btn btn-danger">Sluit</button>
            </div>
        </div>

      </div>
    </form>

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">

                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">








                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Stonks Pizza

                            <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
        $("#order").click(

            function() {
                $("#appear").show();
            }
        );

        $("#close").click(

            function() {
                $("#appear").hide();
            }
        );
    </script>


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>


</body>

</html>