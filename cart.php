<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NewTech | Cart</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="icon" href="resources/newtech-1.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body class="">

    <div class="container-fluid">

        <div class="row">

            <?php include "header.php"; ?>

            <hr class="border-3 border border-white">

            <div class="bg-black">

                <div class="col-12">
                    <div class="row text-center">
                        <h1 class="fw-bold text-warning mt-2 mb-2">Cart <i class="bi bi-cart3 fs-1 text-warning"></i></h1>
                    </div>
                </div>

                <div class="col-12 text-white">
                    <div class="row">
                        <h3> (2) Items Avalable</h3>
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Cart</li>
                            </ol>
                        </nav>
                    </div>
                </div>


                <hr class="border-1 mb-5 text-white ">

                <div class="col-12">
                    <div class="row text-center ">
                        <div class="col-5 col-lg-4 offset-1 offset-lg-3 mb-5">
                            <input type="text" placeholder="Search..." class="form-control">
                        </div>
                        <div class="col-5 col-lg-5  mb-5">
                            <button class="btn btn-outline-primary d-grid">Search</button>
                        </div>
                    </div>
                </div>

                <hr class="border-1 mb-5 text-white ">

                <div class="col-12  p-0">
                    <div class="row">

                        <div class="col-10 col-lg-8 offset-1 offset-lg-2 bg-dark rounded mb-5">

                            <div class="col-6 offset-3 mt-5 d-none d-lg-block">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">

                                        <div class="carousel-item active">
                                            <img src="resources/laptop_images/msi1.png" class="d-lg-block d-none w-100" alt="..." style="height:400px ;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="resources/laptop_images/msi2.png" class="d-lg-block d-none w-100" alt="..." style="height:400px ;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="resources/laptop_images/msi3.png" class="d-lg-block d-none w-100" alt="..." style="height:400px ;">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 offset-md-3 mt-5 d-block d-lg-none">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">

                                        <div class="carousel-item active">
                                            <img src="resources/laptop_images/msi1.png" class="d-lg-none d-block w-100" alt="..." style="height: 250px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="resources/laptop_images/msi2.png" class="d-lg-none d-block w-100" alt="..." style="height: 250px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="resources/laptop_images/msi3.png" class="d-lg-none d-block w-100" alt="..." style="height: 250px;">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            <hr class="text-white">


                            <div class="col-12 card-group mb-4">

                                <div class="col-12 col-lg-12 mb-lg-0 mb-5">

                                    <div class="text-white fs-4 text-center">MSI Pulse GL76 11UDK</div>
                                    <hr class="text-white">
                                    <div class="col-12 card-group">
                                        <div class="text-white fs-5 col-6">Color</div>
                                        <div class="text-white fs-6 col-6">Titanium Gray</div>
                                    </div>
                                    <hr class="text-white">
                                    <hr class="text-white">
                                    <div class="col-12 card-group ">
                                        <div class="text-white fs-5 col-6">Quantity</div>
                                        <div class="text-white fs-6 col-4 "><input type="number" class="form-control" value="1"></div>
                                    </div>
                                    <hr class="text-white">
                                    <hr class="text-white">
                                    <div class="col-12 card-group">
                                        <div class="text-white fs-5 col-6">Price</div>
                                        <div class="text-white fs-6 col-4 text-decoration-line-through">Rs. 778000 .00</div>
                                    </div>
                                    <hr class="text-white">
                                    <hr class="text-white">
                                    <div class="col-12 card-group">
                                        <div class="text-white fs-5 col-6">Offer</div>
                                        <div class="text-white fs-6 col-4">Rs. 22000 .00</div>
                                    </div>
                                    <hr class="text-white">
                                    <hr class="text-white">
                                    <div class="col-12 card-group">
                                        <div class="text-white fs-5 col-6">New Price</div>
                                        <div class="text-white fs-6 col-4">Rs. 756000 .00</div>
                                    </div>
                                    <hr class="text-white">
                                    <hr class="text-white">
                                    <div class="col-12 card-group btn-group">
                                        <div class="text-white fs-6 col-4 offset-2 offset-lg-3"><button class="btn btn-outline-success d-grid fs-4">Buy Now</button></div>
                                        <div class="text-white fs-6 col-4 offset-1 offset-lg-1"><button class="btn btn-outline-danger d-grid fs-4">Remove</button></div>
                                    </div>
                                    <hr class="text-white">

                                </div>
                                <div class="col-12 col-lg-6">

                                   


                                </div>

                            </div>






                        </div>








                        <div class="col-10 col-lg-8 offset-1 offset-lg-2 bg-dark rounded mb-5">

                            <div class="col-6 offset-3 mt-5 d-none d-lg-block">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">

                                        <div class="carousel-item active">
                                            <img src="resources/gaming_dekstop_images/Lenovo Legion T5 26IOB6 90RT00U8MH(1).png" class="d-lg-block d-none w-100" alt="..." style="height:400px ;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="resources/gaming_dekstop_images/Lenovo Legion T5 26IOB6 90RT00U8MH(2).png" class="d-lg-block d-none w-100" alt="..." style="height:400px ;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="resources/gaming_dekstop_images/Lenovo Legion T5 26IOB6 90RT00U8MH(3).png" class="d-lg-block d-none w-100" alt="..." style="height:400px ;">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 offset-md-3 mt-5 d-block d-lg-none">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">

                                        <div class="carousel-item active">
                                            <img src="resources/gaming_dekstop_images/Lenovo Legion T5 26IOB6 90RT00U8MH(1).png" class="d-lg-none d-block w-100" alt="..." style="height: 250px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="resources/gaming_dekstop_images/Lenovo Legion T5 26IOB6 90RT00U8MH(2).png" class="d-lg-none d-block w-100" alt="..." style="height: 250px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="resources/gaming_dekstop_images/Lenovo Legion T5 26IOB6 90RT00U8MH(3).png" class="d-lg-none d-block w-100" alt="..." style="height: 250px;">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            <hr class="text-white">


                            <div class="col-12 card-group mb-4">

                                <div class="col-12 col-lg-12 mb-lg-0 mb-5">

                                    <div class="text-white fs-4 text-center">Lenovo Legion T5 26IOB6</div>
                                    <hr class="text-white">
                                    <div class="col-12 card-group">
                                        <div class="text-white fs-5 col-6">Color</div>
                                        <div class="text-white fs-6 col-6">Black Matt</div>
                                    </div>
                                    <hr class="text-white">
                                    <hr class="text-white">
                                    <div class="col-12 card-group ">
                                        <div class="text-white fs-5 col-6">Quantity</div>
                                        <div class="text-white fs-6 col-4 "><input type="number" class="form-control" value="1"></div>
                                    </div>
                                    <hr class="text-white">
                                    <hr class="text-white">
                                    <div class="col-12 card-group">
                                        <div class="text-white fs-5 col-6">Price</div>
                                        <div class="text-white fs-6 col-4 text-decoration-line-through">Rs. 386000 .00</div>
                                    </div>
                                    <hr class="text-white">
                                    <hr class="text-white">
                                    <div class="col-12 card-group">
                                        <div class="text-white fs-5 col-6">Offer</div>
                                        <div class="text-white fs-6 col-4">Rs. 26000 .00</div>
                                    </div>
                                    <hr class="text-white">
                                    <hr class="text-white">
                                    <div class="col-12 card-group">
                                        <div class="text-white fs-5 col-6">New Price</div>
                                        <div class="text-white fs-6 col-4">Rs. 360000 .00</div>
                                    </div>
                                    <hr class="text-white">
                                    <hr class="text-white">
                                    <div class="col-12 card-group btn-group">
                                        <div class="text-white fs-6 col-4 offset-2 offset-lg-3"><button class="btn btn-outline-success d-grid fs-4">Buy Now</button></div>
                                        <div class="text-white fs-6 col-4 offset-1 offset-lg-1"><button class="btn btn-outline-danger d-grid fs-4">Remove</button></div>
                                    </div>
                                    <hr class="text-white">

                                </div>
                                <div class="col-12 col-lg-6">

                                   


                                </div>

                            </div>






                        </div>
                        <div class="col-12 col-lg-8 offset-lg-2 bg-dark mb-5">

                            <div class="text-white fs-4 text-center">ORDER SUMMARY</div>
                            <hr class="text-white">

                            <div class="col-12 card-group ">
                                <div class="text-white fs-5 col-6 ">Sub Total</div>
                                <div class="text-white fs-6 col-6 ">Rs. 1116000 .00</div>
                            </div>
                            <hr class="text-white">
                            <hr class="text-white">
                            <div class="col-12 card-group">
                                <div class="text-white fs-5 col-6 mt-2">Shipping</div>
                                <div class="text-white fs-6 col-6 mt-2">Rs. 1600 .00</div>
                            </div>
                            <hr class="text-white">
                            <hr class="text-white">
                            <div class="col-12 card-group">
                                <div class="text-white fs-5 col-6">Service Tax</div>
                                <div class="text-white fs-6 col-6">Rs. 250 .00</div>
                            </div>
                            <hr class="text-white">
                            <hr class="text-white">
                            <div class="col-12 card-group">
                                <div class="text-white fs-5 col-6">Total</div>
                                <div class="text-white fs-6 col-6">Rs. 1117850 .00</div>
                            </div>
                            <hr class="text-white">
                            <hr class="text-white">
                            <div class="col-12 card-group mb-3">
                                <div class="text-white fs-5 col-lg-4 col-6 offset-4  offset-lg-5"><button class="btn btn-outline-warning d-grid fs-4">Check Out</button></div>
                            </div>


                        </div>



                    </div>
                </div>



            </div>
            <?php include "footer.php"; ?>
        </div>

    </div>
    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>