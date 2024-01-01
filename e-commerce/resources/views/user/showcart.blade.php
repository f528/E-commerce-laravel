<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <title>marketplace</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--



-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>


    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2>add to cart <em>Chekout</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="products.html">Our Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>



                        <li class="nav-item ">
                            @if (Route::has('login'))
                                @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('showcart') }}">Cart {{ $count }} <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            </li>



                            <li><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                        @else
                            <li><a class="nav-link" href="{{ route('login') }}">Log in</a></li>
                            @if (Route::has('register'))
                                <li><a class="nav-link"href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endauth
                </div>
                @endif
                </li>


                </ul>
            </div>
            </div>


        </nav>

        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </header>

<br>



    <div class="container mt-75 p-5">
<br>
            <table>
                <tr style="background-color: rgb(98, 227, 227);">
                    <td style="padding:10px; font-size:20px;">Product Name</td>
                    <td style="padding:10px; font-size:20px;">Quantity</td>
                    <td style="padding:10px; font-size:20px;">Price</td>
                    <td style="padding:10px; font-size:20px;">Action</td>
                </tr>
                @foreach ($cart as $carts)
                    <tr style="background-color: balck;">
                        <td style="padding:20px; color:rgb(14, 12, 12);">{{ $carts->product_title }}</td>
                        <td style="padding:20px; color:white;">{{ $carts->qauntity }}</td>
                        <td style="padding:20px; color:rgb(227, 218, 218)66, 154, 154);"> {{ $carts->price }}</td>
                        <td class="btn btn-danger bg-black" > <a href="{{ url('deletcart',$carts->id) }}">Delete</a></td>
                    </tr>
                @endforeach



            </table>


    </div>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>


</body>

</html>
