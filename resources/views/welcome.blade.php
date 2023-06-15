<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Semangkuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
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

        .card {
            border: none;
            margin-bottom: 10px;
        }
    </style>


</head>



<body>


    <div>
        <nav class="navbar navbar-expand-lg bg-light sticky-top mb-3" data-bs-theme="dark">
            <div class="container-fluid">
                <a href="./index.html" target="_blank">
                    <img src="{{ asset('storage/images/semangkuk icon.png') }}" width="300" height="80">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse px-2" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item px-2">
                            <a class="nav-link text-dark" href="http://127.0.0.1:8000/dashboard">HOW IT WORKS</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        @if (Route::has('login'))
                            <div class="top-right links">
                                <a class="btn btn-warning btn" href="{{ route('login') }}">Login</a>
                                <a class="btn btn-warning btn" href="{{ route('register') }}">Register</a>

                            </div>
                        @endif
                    </form>
                </div>
            </div>
    </div>




    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <!-- Jumbotron -->
    <div class="bg-image p-5 text-center shadow-1-strong rounded text-white"
        style="background-image: url('{{ asset('storage/images/foodcrs1.jpg') }}');">

        <div class="mask" style="background-color: rgba(255, 255, 255, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <img src="{{ asset('storage/images/semangkuk icon.png') }}">

            </div>
        </div>
    </div>
    <!-- Jumbotron -->
    <div class="d-flex justify-content-center bg-warning">

        <h4 class="mb-5 text-center"><strong>
                <br></br>Why Semangkuk?</strong></h4>
    </div>

    <section class="text-center bg-body-secondary">
        <br></br>


        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 col-md-12 mb-4 d-flex justify-content-center">
                <div class="card">
                    <div class="bg-image hover-overlay ripple bg-body-secondary">
                        <img src="{{ asset('storage/images/easy.png') }}" width="100" height="100">
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body bg-body-secondary">
                        <h5 class="card-title">EASY!</h5>
                        <p class="card-text">
                            You can start cooking when the produce arrived with our video assistant
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="bg-image hover-overlay ripple bg-body-secondary">
                        <img src="{{ asset('storage/images/qualityprice.png') }}" width="100" height="100">
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body bg-body-secondary">
                        <h5 class="card-title">High Quality yet Afforadble</h5>
                        <p class="card-text">
                            We got our product from top local farms that makes it cheap and high in quality
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="bg-image hover-overlay ripple bg-body-secondary">
                        <img src="{{ asset('storage/images/nutrition.png') }}" width="100" height="100">
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body bg-body-secondary">
                        <h5 class="card-title">Nutrition Tracker</h5>
                        <p class="card-text">
                            On a diet? We got you covered with our own Nutrition Tracker!
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>



    <main class="mt-5">
        <div class="container">

            <section>
                <div class="row">
                    <div class="col-md-6 gx-5 mb-4">
                        <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5"
                            data-mdb-ripple-color="light">
                            <img src="{{ asset('storage/images/semangkuk box.png') }}">
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 gx-1 mb-4">
                        <h4><strong>How does the produce reach our loyal customer ?</strong></h4>
                        <p class="text-muted">
                            We will send our customer a box filled with produce that is packaged and handled with care.
                            and inside of it is our prized, high quality, and fresh produce. That you as our lovely
                            customer
                            can turn into delicious meal !
                        </p>

                        <h4><strong>What if you are not the best at cooking ?</strong></h4>
                        <p class="text-muted">
                            Do not worry ! We got you covered with recipe, and how-to video for each recipe that we
                            provide.
                            and it comes with its Nutritional Facts. Like their calories, protein, fat, sugar, sodium
                            etc.
                        </p>
                    </div>
                </div>
            </section>
            <!--Section: Content-->
    </main>

    <br></br>
    <section class="text-center">
        <h4 class="mb-5"><strong>We got lots of Recipe to try</strong></h4>
        <br></br>
    </section>
    <!-- Jumbotron -->
    <div class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white"
        style="background-image: url('{{ asset('storage/images/banner.png') }}');">
        <h1 class="mb-3 h2 text-warning">Lets begin your Healthy Journey</h1>

        <p class="text-dark">
            With an affordable, high quality, and definitely fresh meal !
        </p>
    </div>
    <!-- Jumbotron -->


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
            <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
            </a>
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
