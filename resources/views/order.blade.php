<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Semangkuk</title>
    <script src="https://kit.fontawesome.com/638c2d02ba.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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

                </div>
            </div>
    </div>
    </nav>
    <div class="d-flex justify-content-center">
        <h4 class="mb-5 text-center"><strong>
                <br></br>Welcome, {{ Auth::user()->name }} !</strong></h4>
    </div>

    <div class="text-start container-fluid">

        <div class="d-flex justify-content-center">
            <h4 class="mb-5 text-center" style="color: crimson"><strong>
                    IMPORTANT : Any orders that are outside of Jakarta cannot be processed until further notice
                    !</strong></h4>
        </div>
    </div>

    <section class="h-100 h-custom">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="h5">Recipe</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('storage/images/burger.jpg') }}"
                                                class="img-fluid rounded-3" style="width: 120px;" alt="Book">


                                            <div class="flex-column ms-4">
                                                <p class="mb-2">Juicy Burger ( Semangkuk Signature )</p>
                                                <p class="mb-0">Calories : 500 Kkal</p>
                                                <p class="mb-0">Protein : 35 gr</p>
                                                <p class="mb-0">Sugar : 13 gr</p>

                                                <p class="mt-4 mb-0">250 gr Minced Meat</p>
                                                <p class="mb-0">4 Gluten Free Buns</p>
                                                <p class="mb-0">1 Pcs Fresh Tomato</p>
                                                <p class="mb-0">1 Pcs Lettuce</p>
                                                <p class="mb-0">1 Package of Semangkuk's Signature Sauce</p>
                                                <p class="mb-0">2 Eggs</p>

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
                                            </div>

                                        </div>
                                    </th>

                                    <td class="align-middle">
                                        <p class="mb-0" style="font-weight: 500;">19</p>
                                    </td>
                                    <td class="align-middle">
                                        <div class="d-flex flex-row">
                                            <button class="btn btn-link px-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                <i class="fas fa-minus"></i>
                                            </button>

                                            <input id="form1" min="0" name="quantity" value="2"
                                                type="number" class="form-control form-control-sm"
                                                style="width: 50px;" />

                                            <button class="btn btn-link px-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <p class="mb-0" style="font-weight: 500;">IDR 39,000.00</p>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row" class="border-bottom-0">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('storage/images/steak and veggies.jpg') }}"
                                                class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                                            <div class="flex-column ms-4">
                                                <p class="mb-2">Signature Steak and Veggies</p>
                                                <p class="mb-0">Calories : 460 Kkal</p>
                                                <p class="mb-0">Protein : 50 gr</p>
                                                <p class="mb-0">Sugar : 10 gr</p>

                                                <p class="mt-4 mb-0">400 gr Tenderloin</p>
                                                <p class="mb-0">2 tbs Salt</p>
                                                <p class="mb-0">1 tbs Blackpepper</p>
                                                <p class="mb-0">1 Pcs Broccoli</p>
                                                <p class="mb-0">1 Package of Semangkuk's Signature Sauce</p>

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
                                            </div>
                                        </div>
                                    </th>
                                    <td class="align-middle border-bottom-0">
                                        <p class="mb-0" style="font-weight: 500;">24</p>
                                    </td>
                                    <td class="align-middle border-bottom-0">
                                        <div class="d-flex flex-row">
                                            <button class="btn btn-link px-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                <i class="fas fa-minus"></i>
                                            </button>

                                            <input id="form1" min="0" name="quantity" value="1"
                                                type="number" class="form-control form-control-sm"
                                                style="width: 50px;" />

                                            <button class="btn btn-link px-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="align-middle border-bottom-0">
                                        <p class="mb-0" style="font-weight: 500;">IDR 64,000.00</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('storage/images/orangejuice.jpg') }}"
                                                class="img-fluid rounded-3" style="width: 120px; height: 90px"
                                                alt="Book">


                                            <div class="flex-column ms-4">
                                                <p class="mb-2 text-muted">Orange Juice</p>
                                                <p class="mb-0 text-muted">Calories : 500 Kkal</p>
                                                <p class="mb-0 text-muted">Protein : 35 gr</p>
                                                <p class="mb-0 text-muted">Sugar : 13 gr</p>

                                                <p class="mt-4 mb-0 text-muted">4 pcs Freshly Picked Orange ( OUT OF STOCK )</p>
                                                <p class="mb-0">2 tsp of Stevia</p>


                                            </div>

                                        </div>
                                    </th>

                                    <td class="align-middle">
                                        <p class="mb-0 text-muted m-auto" style="font-weight: 500;">OUT OF STOCK</p>
                                    </td>
                                    <td class="align-middle">
                                        <div class="d-flex flex-row m-auto">





                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <p class="mb-0 text-muted" style="font-weight: 500;">IDR 9,000.00</p>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
                        <div class="card-body p-4">

                            <div class="row">
                                <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                                    <form>
                                        <img src="{{ asset('storage/images/QRIS.jpg') }}">
                                    </form>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="form-outline mb-4 mb-xl-5">
                                                <input type="text" id="typeName"
                                                    class="form-control form-control-lg" siez="17"
                                                    placeholder="Insert Your Name" />
                                                <label class="form-label" for="typeName">Customer Name</label>
                                            </div>

                                            <div class="form-outline mb-4 mb-xl-5">
                                                <input type="text" id="typeExp"
                                                    class="form-control form-control-lg"
                                                    placeholder="Input your address here" size="7"
                                                    id="exp" minlength="7" maxlength="7" />
                                                <label class="form-label" for="typeExp">Address</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <div class="form-outline mb-4 mb-xl-5">
                                                <input type="text" id="typeText"
                                                    class="form-control form-control-lg" siez="17"
                                                    placeholder="+62 8XX-XXXX-XXXX" minlength="19" maxlength="19" />
                                                <label class="form-label" for="typeText">ORDER NOW</label>
                                            </div>

                                            <div class="form-outline mb-4 mb-xl-5">

                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('thankyou') }}" class="btn bg-warning">
                                        <h5>
                                            ORDER NOW
                                        </h5>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-xl-3 m-auto">






                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
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
