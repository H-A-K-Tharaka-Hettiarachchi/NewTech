<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NewTech | Watchlist</title>

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
                        <h1 class="fw-bold text-warning mt-2 mb-2">Watchlist <i class="bi bi-heart-fill fs-2"></i></h1>
                    </div>
                </div>

                <div class="col-12 text-white">
                    <div class="row">
                        <h3>Watchlist (2)</h3>
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Watchlist</li>
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




                <div class="col-12">



                    <div class="row row-cols-1 row-cols-md-4 g-4 mb-3">



                        <div class="col">
                            <div class="card h-100 bg-dark text-white">
                                <img src="resources/laptop_images/OIP (1).jpg" class="card-img-top img-thumbnail bg-dark border-2 border-start-0 border-end-0 border-top-0 border-secondary" alt="..." style="height:270px ;">
                                <div class="card-body">
                                    <h5 class="card-title">Asus ROG Strix 5</h5>

                                    <p class="card-text">Instock</p>
                                    <p>12 Quantity Avalable</p>
                                </div>
                                <div class="card-footer border-secondary">
                                   <div class="col-12 card-group">
                                    <button class="btn btn-outline-warning d-grid col-xl-4 col-12 col-md-12 col-lg-12 offset-xl-1 mb-2">Add to Cart</button>
                                    <button class="btn btn-outline-danger d-grid col-xl-4  col-12 col-md-12 col-lg-12 offset-xl-2 mb-2">Unwatch</button>
                                    <button class="btn btn-outline-success d-grid col-xl-6 col-12 col-md-12 col-lg-12 offset-xl-3 mt-4 mb-2" onclick="window.location='singleProductView.php'">Buy Now</button>
                                   </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 bg-dark text-white">
                                <img src="resources/laptop_images/hp1.png" class="card-img-top img-thumbnail bg-dark border-2 border-start-0 border-end-0 border-top-0 border-secondary" alt="..." style="height:270px ;">
                                <div class="card-body">
                                    <h5 class="card-title">HP Victus</h5>
                                    <p class="card-text">Instock</p>
                                    <p>16 Quantity Avalable</p>
                                </div>
                                <div class="card-footer border-secondary">
                                   <div class="col-12 card-group">
                                    <button class="btn btn-outline-warning d-grid col-xl-4 col-12 col-md-12 col-lg-12 offset-xl-1 mb-2">Add to Cart</button>
                                    <button class="btn btn-outline-danger d-grid col-xl-4  col-12 col-md-12 col-lg-12 offset-xl-2 mb-2">Unwatch</button>
                                    <button class="btn btn-outline-success d-grid col-xl-6 col-12 col-md-12 col-lg-12 offset-xl-3 mt-4 mb-2" onclick="window.location='singleProductView.php'">Buy Now</button>
                                   </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 bg-dark text-white">
                                <img src="resources/laptop_images/dell2.png" class="card-img-top img-thumbnail bg-dark border-2 border-start-0 border-end-0 border-top-0 border-secondary" alt="..." style="height:270px ;">
                                <div class="card-body">
                                    <h5 class="card-title">Dell Inspiron 5</h5>
                                    <p class="card-text">Instock</p>
                                    <p>31 Quantity Avalable</p>
                                </div>
                                <div class="card-footer border-secondary">
                                   <div class="col-12 card-group">
                                    <button class="btn btn-outline-warning d-grid col-xl-4 col-12 col-md-12 col-lg-12 offset-xl-1 mb-2">Add to Cart</button>
                                    <button class="btn btn-outline-danger d-grid col-xl-4  col-12 col-md-12 col-lg-12 offset-xl-2 mb-2">Unwatch</button>
                                    <button class="btn btn-outline-success d-grid col-xl-6 col-12 col-md-12 col-lg-12 offset-xl-3 mt-4 mb-2" onclick="window.location='singleProductView.php'">Buy Now</button>
                                   </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 bg-dark text-white">
                                <img src="resources/laptop_images/acer-nitro-7-ksp-8.png" class="card-img-top img-thumbnail bg-dark border-2 border-start-0 border-end-0 border-top-0 border-secondary" alt="..." style="height:270px ;">
                                <div class="card-body">
                                    <h5 class="card-title">Acer Nitro 7</h5>
                                    <p class="card-text">Instock</p>
                                    <p>3 Quantity Avalable</p>
                                </div>
                                <div class="card-footer border-secondary">
                                   <div class="col-12 card-group">
                                    <button class="btn btn-outline-warning d-grid col-xl-4 col-12 col-md-12 col-lg-12 offset-xl-1 mb-2">Add to Cart</button>
                                    <button class="btn btn-outline-danger d-grid col-xl-4  col-12 col-md-12 col-lg-12 offset-xl-2 mb-2">Unwatch</button>
                                    <button class="btn btn-outline-success d-grid col-xl-6 col-12 col-md-12 col-lg-12 offset-xl-3 mt-4 mb-2" onclick="window.location='singleProductView.php'">Buy Now</button>
                                   </div>
                                </div>
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