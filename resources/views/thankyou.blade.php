<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Semangkuk</title>
    <script src="https://kit.fontawesome.com/638c2d02ba.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <style>
        body {
            padding-top: 1em;
        }

        /* Carousel styling */
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
            height: 100vh;
        }

        .carousel-item:nth-child(1) {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(2) {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .carousel-item:nth-child(3) {
            background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #introCarousel {
                margin-top: -58.59px;
            }

            #introCarousel,
            .carousel-inner,
            .carousel-item,
            .carousel-item.active {
                height: 50vh;
            }
        }

        .navbar .nav-link {
            color: #000000 !important;
        }


        .cards {
            display: flex;
            flex-direction: row;
        }

        .card {
            display: flex;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .card {
            box-sizing: content-box;
            margin: 10px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.589);
        }

        .container {
            padding: 2px 16px;
        }

        i {
            margin-right: 10px;
        }

        .offcanvas-size-md {
            --bs-offcanvas-height: 300vh;
        }
    </style>


</head>



<body>


    <div>
        <nav class="navbar navbar-expand-lg bg-light sticky-top" data-bs-theme="dark">
            <div class="container-fluid">
                <a href="http://127.0.0.1:8000/" target="_blank">
                    <img src="{{ asset('storage/images/semangkuk icon.png') }}" width="300" height="80">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse px-2" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    </ul>

                    <a href="{{ route('logout') }}" class="btn bg-warning"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
    </div>
    </nav>
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-4">
            <div class="border border-3 border-warning"></div>
            <div class="card  bg-white shadow p-5">
                <div class="mb-4 text-center">
                    <img src="{{ asset('storage/images/tank you.png') }}"style="width: 120px; height: 120px">
                </div>
                <div class="text-center">
                    <h1>Thank You !</h1>
                    <p>Your order will shortly be delivered to your location ! </p>
                    <a href="http://127.0.0.1:8000/dashboard" target="_blank">
                        <img src="{{ asset('storage/images/semangkuk icon.png') }}" width="300" height="80">

                    </a>
                    <p>Press here to keep browsing</p>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Footer -->
<footer class="text-center text-lg-start bg-white">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">

        </div>
        <!-- Left -->

        <!-- Right -->
        <div>

        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <img src="{{ asset('storage/images/semangkuk icon.png') }}" height="100" width="350">
                    </h6>
                    <p>

                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4 text-black">
                        Products
                    </h6>
                    <p class="text-black">
                        <a href="#!" class="text-reset text-warning">Produce</a>
                    </p>
                    <p class="text-black">
                        <a href="#!" class="text-reset text-warning">Recipe</a>
                    </p>
                    <p class="text-black">
                        <a href="#!" class="text-reset text-warning">Plan</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4 text-black">Contact</h6>
                    <p class="text-black"><i class="fas fa-home me-3 text-black"></i> Jakarta, Indonesia</p>
                    <p class="text-black">
                        <i class="fas fa-envelope me-3 text-black"></i>
                        semangkukofficial@gmail.com
                    </p>
                    <p class="text-black"><i class="fas fa-phone me-3 text-black"></i> +62 8521 3456 78</p>

                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4">
        © 2023 Copyright:
        <p>SEMANGKUK</p>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

</html>
