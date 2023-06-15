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
                    <div class="pr-2 d-flex">

                    </div>
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
    <div class="d-flex justify-content-center"
        style="background-image: url('{{ asset('storage/images/banner.png') }}');">
        <h4 class="mb-5 text-center"><strong>
                <br></br>Welcome, {{ Auth::user()->name }} !</strong></h4>

    </div>

    <div class="text-start container-fluid">

        <div class="d-flex justify-content-center">

        </div>



    </div>
    <div class="d-flex mt-2 mb-2 justify-content-center">
        <h1 class="mb-5 text-center"><strong>
                <br></br>Feeling confused, {{ Auth::user()->name }} ? Try out our demo before ordering might help
                !</strong></h1>

    </div>
    <div class="cards d-flex justify-content-center mb-5">
        <div class="card" style="width: 30rem;">
            <img class="card-img-top" src="{{ asset('storage/images/burger.jpg') }}" alt="Card image cap"
                style="height:456px;width:356px text-center">
            <div class="card-body">
                <h5 class="card-title text-start"><strong>Juicy Burger</strong>
                    450 Cal
                </h5>
                <div class="container">

                    <p><i class="fas fa-user me-3 text-black" aria-hidden="true"></i>She/Her</p>
                </div>
                <div class="container">

                    <p><i class="fas fa-dna me-3 text-black" aria-hidden="true"></i>45gr Protein</p>
                </div>
                <div class="container">

                    <p><i class="fa-solid fa-briefcase me-3 text-black"></i></i>Delicious Food</p>
                </div>
                <div class="container">

                    <p><i class="fas fa-location-dot me-3 text-black" aria-hidden="true"></i>One Order Away</p>
                </div>
                <h4><strong>About Me</strong></h4>
                <p class="card-text">What do we have in common? Both of us like to have meat stuffed between our
                    buns. Likes to travel to one's mouth and satisfy someone's need.</p>
                <div class="container d-flex justify-content-center">
                    <p>
                        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                            aria-controls="offcanvasTop"><i class="fa-solid fa-video fa-4x fa-fw mr-5 "
                                style="margin-right:2px;"></i>
                        </button>
                    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" style="min-height: 500px"
                        aria-labelledby="offcanvasTopLabel">
                        <div class="offcanvas-header">
                            <h2 class="offcanvas-title m-auto" id="offcanvasTopLabel">Video
                                Tutorial</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <h3 class="m-auto">A video tutorial on how to make your own juicy burger</h3>
                        <div class="offcanvas-body m-auto" style="min-height: 1000px">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/iM_KMYulI_s"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop3"
                        aria-controls="offcanvasTop"><i class="fa-solid fa-list-check fa-4x fa-fw mr-5"
                            style="margin-right:2px;"></i>
                    </button>

                    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop3" style="min-height: 360px"
                        aria-labelledby="offcanvasTopLabel">
                        <div class="offcanvas-header">
                            <h2 id="offcanvasTopLabel" class="m-auto">Recipe</h2>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body m-auto">
                            <h5>
                                ½ tbsp olive oil <br>
                                1 onion, peeled and finely chopped <br>
                                1 x 500g pack British Beef Steak Mince 15% fat <br>
                                1 tsp mixed dried herbs <br>
                                1 egg, beaten <br>
                                4 slices mature Cheddar (optional) <br>
                                4 white rolls <br>
                                few round lettuce leaves, torn <br>
                                1 beef tomato, sliced <br>
                                ketchup, to serve (optional) <br>
                            </h5>
                        </div>
                    </div>
                    <a href="{{ route('order') }}" class="btn"><i class="fa-solid fa-utensils fa-4x fa-fw mr-5"
                            style="margin-right:2px;"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 30rem;">
            <img class="card-img-top" src="{{ asset('storage/images/steak and veggies.jpg') }}" alt="Card image cap"
                style="height:456px;width:256px text-center">
            <div class="card-body">
                <h5 class="card-title text-start"><strong>Pan Seared Steak</strong>
                    600 Cal
                </h5>


                <div class="container">

                    <p><i class="fas fa-user me-3 text-black" aria-hidden="true"></i>He/Him</p>
                </div>
                <div class="container">

                    <p><i class="fas fa-dna me-3 text-black" aria-hidden="true"></i>85gr Protein</p>
                </div>
                <div class="container">

                    <p><i class="fa-solid fa-briefcase me-3 text-black"></i></i>Big Meat</p>
                </div>
                <div class="container">

                    <p><i class="fas fa-location-dot me-3 text-black" aria-hidden="true"></i>One Order Away
                    </p>
                </div>
                <h4><strong>About Me</strong></h4>
                <p class="card-text">Who doesn't love big juicy and dark meat ?
                    Go ahead and eat me till my juice gushing out of me !
                    Swipe right and I will show you how much I'm Packing !
                </p>
                <div class="container d-flex justify-content-center">
                    <p>
                        <button class="btn" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasTop1" aria-controls="offcanvasTop"><i
                                class="fa-solid fa-video fa-4x fa-fw mr-5" style="margin-right:2px;"></i>
                        </button>
                    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop1" style="min-height: 500px"
                        aria-labelledby="offcanvasTopLabel">
                        <div class="offcanvas-header">
                            <h2 class="offcanvas-title m-auto" id="offcanvasTopLabel">Video
                                Tutorial</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <h3 class="m-auto">A video tutorial on how to make your own juicy steak</h3>
                        <div class="offcanvas-body m-auto" style="min-height: 1000px">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/uNT_AxXrUGs"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop4"
                        aria-controls="offcanvasTop"><i class="fa-solid fa-list-check fa-4x fa-fw mr-5"
                            style="margin-right:2px;"></i>
                    </button>

                    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop4" style="min-height: 400px"
                        aria-labelledby="offcanvasTopLabel">
                        <div class="offcanvas-header">
                            <h2 id="offcanvasTopLabel" class="m-auto">Recipe</h2>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body m-auto">
                            <h5>
                                1 lb flank steak, very thinly sliced into bite-sized strips <br>
                                2 Tbsp olive oil , (or vegetable oil), divided <br>
                                1 lb broccoli, (cut into 6 cups of florets) <br>
                                2 tsp sesame seeds, optional garnish <br>

                                1 tsp fresh ginger, grated (loosely packed) <br>
                                2 tsp garlic, grated (from 3 cloves) <br>
                                1/2 cup hot water <br>
                                6 Tbsp low sodium soy sauce, (or GF Tamari) <br>
                                3 Tbsp packed light brown sugar <br>
                                1 1/2 Tbsp corn starch <br>
                                1/4 tsp black pepper <br>
                                2 Tbsp sesame oil <br>
                            </h5>
                        </div>
                    </div>
                    <a href="{{ route('order') }}" class="btn"><i class="fa-solid fa-utensils fa-4x fa-fw mr-5"
                            style="margin-right:2px;"></i>
                    </a>
                    </p>
                </div>
            </div>
            </section>
        </div>
        <div class="card" style="width: 30rem;">
            <img class="card-img-top" src="{{ asset('storage/images/orangejuice.jpg') }}" alt="Card image cap"
                style="height:456px;width:256px text-center">
            <div class="card-body">
                <h5 class="card-title text-start"><strong>Orange Juice</strong>
                    45 Cal
                </h5>
                <div class="container">

                    <p><i class="fas fa-user me-3 text-black" aria-hidden="true"></i>They/Them</p>
                </div>
                <div class="container">

                    <p><i class="fas fa-dna me-3 text-black" aria-hidden="true"></i>Rich in juice, Come and C
                    </p>
                </div>
                <div class="container">

                    <p><i class="fa-solid fa-briefcase me-3 text-black"></i></i>Mouth Refresher</p>
                </div>
                <div class="container">

                    <p><i class="fas fa-location-dot me-3 text-black" aria-hidden="true"></i>One Order Away
                    </p>
                </div>
                <h4><strong>About Me</strong></h4>
                <p class="card-text">
                    You like what you C? Come and C me to find out more ! Trust me there are more to C more than
                    the C down under ! Wait and I will C you soon !
                </p>
                <div class="container d-flex justify-content-center">
                    <p>
                        <button class="btn" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasTop2" aria-controls="offcanvasTop"><i
                                class="fa-solid fa-video fa-4x fa-fw mr-5" style="margin-right:2px;"></i>
                        </button>
                    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop2" style="min-height: 500px"
                        aria-labelledby="offcanvasTopLabel">
                        <div class="offcanvas-header">
                            <h2 class="offcanvas-title m-auto" id="offcanvasTopLabel">Video
                                Tutorial</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <h3 class="m-auto">A video tutorial on how to make your own fresh juice</h3>
                        <div class="offcanvas-body m-auto" style="min-height: 1000px">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/hroEEaSjnw4"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop5"
                        aria-controls="offcanvasTop"><i class="fa-solid fa-list-check fa-4x fa-fw mr-5"
                            style="margin-right:2px;"></i>
                    </button>

                    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop5" style="min-height: 50px"
                        aria-labelledby="offcanvasTopLabel">
                        <div class="offcanvas-header">
                            <h2 id="offcanvasTopLabel" class="m-auto">Recipe</h2>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body m-auto">
                            <h5>
                                4 Oranges <br>
                                Ice cubes <br>
                                Sugar (Optional) <br>
                                250 ml Fresh Water <br>
                            </h5>
                        </div>
                    </div>
                    <a href="{{ route('order') }}" class="btn"><i class="fa-solid fa-utensils fa-4x fa-fw mr-5"
                            style="margin-right:2px;"></i>
                    </a>
                    </p>
                </div>
            </div>
            </section>
        </div>
    </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <div class="d-flex justify-content-center bg-warning"
        style="background-image: url('{{ asset('storage/images/banner.png') }}');">

        <h4 class="mb-5 text-center"><strong>
                <br></br>Like what you see ?</strong></h4>
    </div>

    <div class="d-flex justify-content-center">

        <h4 class="mb-5 text-center"><strong>
                <br></br>Explore our vast selection of recipe today !</strong></h4>
    </div>
    <main class="mt-5">
        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-6 gx-5 mb-4">
                        <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5"
                            data-mdb-ripple-color="light">
                            <img src="{{ asset('storage/images/farm.jpg') }}" height="360px" width="540px">
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 gx-1 mb-4">
                        <h4><strong>With the press of the button on the left you will be greeted by a vast selection of
                                recipe to choose from !</strong></h4>
                        <p class="text-muted">
                            All the recipe comes straight from our trusty farm, to our warehouse and then it goes
                            to your kitche. Ready to be cooked !
                        </p>

                        <h4><strong>What are you waiting for? Go ahead and start ordering !</strong></h4>
                        <p class="text-muted">
                        </p>

                    </div>
                    <a href="{{ route('order') }}" class="btn bg-warning">
                        <h3>
                            ORDER NOW
                        </h3>
                    </a>
                </div>
            </section>
        </div>
    </main>
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
