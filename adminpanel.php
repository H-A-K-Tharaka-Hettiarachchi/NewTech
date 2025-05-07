<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="icon" href="resources/newtech-1.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


    <title>NewTech | Admin Panel</title>


</head>

<body class=" ">

    <div class="container-fluid">

        <div class="row">


            <div class=" col-12 bg-dark text-white">

                <div class="row">

                    <div class="offset-lg-0 col-12 col-lg-4 align-self-start mt-2 ">

                        <label class="form-label text-center">
                            <h3>New Tech</h3>
                        </label>

                        <button class="bg-dark border-0 mt-1 mb-1 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-list fs-2 text-white fw-bolder"></i></button>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="adminpanel.php">Dashboard</a></li>
                            <li><a class="dropdown-item" href="manageusers.php">Manage Users</a></li>
                            <li><a class="dropdown-item" href="manageProducts.php">Manage Products</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Message</a></li>
                            <li><a class="dropdown-item" href="#">Calender</a></li>

                        </ul>

                    </div>


                    <div class="offset-lg-4  offset-0 col-12 col-lg-3 align-self-end mt-2 ">



                    </div>

                </div>

            </div>




            <div class=" col-12 bg-black" style="height: 100%;">

                <div class="row">



                    <hr class="border-3 border border-white">
                    <h1 class="text-primary">Dashboard</h1>
                    <hr class="border-3 border border-white">

                    <div class="col-10 card-group ms-lg-5 d-flex mb-3 mt-3">



                        <div class="col-1  ms-5 rounded-circle  bg-secondary">
                            <div class=" text-center"><i class="bi bi-house-fill fs-1 text-white"></i></div>
                        </div>
                        <div class="col-1 offset-1 rounded-circle  bg-secondary">
                            <div class=" text-center"><i class="bi bi-people-fill fs-1 text-white"></i></div>
                        </div>
                        <div class="col-1 offset-1 rounded-circle  bg-secondary">
                            <div class=" text-center"><i class="bi bi-box2-fill fs-1 text-white"></i></div>
                        </div>
                        <div class="col-1 offset-1 rounded-circle  bg-secondary">
                            <div class=" text-center"><i class="bi bi-calendar-fill fs-1 text-white"></i></div>
                        </div>
                        <div class="col-1 offset-1 rounded-circle  bg-secondary">
                            <div class=" text-center"><i class="bi bi-chat-fill fs-1 text-white"></i></div>
                        </div>
                        <div class="col-1 offset-1 rounded-circle  bg-secondary">
                            <div class=" text-center"><i class="bi bi-gear-wide-connected fs-1 text-white"></i></div>
                        </div>


                    </div>

                    <hr class="border-3 border border-white">




                    <div class="col-12">


                        <div class="row">

                            <div class=" col-lg-2 col-10 offset-1 offset-lg-1  bg-primary rounded mb-3">
                                <div class=" col-12 text-white fs-1 text-center">Total Sales</div>
                                <div class="col-12">
                                    <hr class="border-3 border border-white">
                                </div>
                                <div class="col-12 text-center"><i class="bi bi-tags-fill fs-1 text-white">&nbsp; 427K</i> </div>
                            </div>

                            <div class=" col-lg-2 col-10 offset-1 offset-lg-0 ms-lg-3 bg-secondary rounded mb-3">
                                <div class=" col-12 text-white fs-1 text-center">Total Users</div>
                                <div class="col-12">
                                    <hr class="border-3 border border-white">
                                </div>
                                <div class="col-12 text-center"><i class="bi bi-people-fill fs-1 text-white">&nbsp; 623K</i> </div>
                            </div>

                            <div class=" col-lg-2 col-10 offset-1 offset-lg-2  bg-warning rounded mb-3">
                                <div class=" col-12 text-white fs-1 text-center">Popularity</div>
                                <div class="col-12">
                                    <hr class="border-3 border border-white">
                                </div>
                                <div class="col-12 text-center"><i class="bi bi-globe fs-1 text-white">&nbsp; 10.3M</i> </div>
                            </div>

                            <div class=" col-lg-2 col-10 offset-1 offset-lg-0 ms-lg-3 bg-info rounded mb-3">
                                <div class=" col-12 text-white fs-1 text-center">Total Profit</div>
                                <div class="col-12">
                                    <hr class="border-3 border border-white">
                                </div>
                                <div class="col-12 text-center"><i class="bi bi-cash-coin fs-1 text-white">&nbsp; 1.2M</i> </div>
                            </div>


                        </div>

                    </div>



                    <div class=" col-12 mb-3 mt-5 bg-secondary mb-5">

                        <div class="row">


                            <div class="col-10 offset-1">


                                <div class="row">

                                    <div class="col-12 card-group">

                                        <div class="col-12  col-lg-5 offset-lg-2 mb-5 mt-5">

                                            <div class="row row-cols-1 row-cols-md-2 g-0">
                                                <div class="col">
                                                    <div class="card bg-dark text-white">
                                                        <div class=" card-header text-center fs-5">Mostly Famouse Seller</div>
                                                        <img src="resources/20220330_202931.jpg" class="card-img-top" alt="..." style="height:250px ;">
                                                        <div class="card-body">
                                                            <hr class="border-white">
                                                            <h5 class="card-title text-center">Tharaka Hettiarachchi</h5>
                                                            <p class="card-text text-center">tharaka@gmail.com</p>
                                                            <p class="card-text text-center">0762206166</p>
                                                            <p class="card-text text-center"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>



                                        </div>




                                        <div class="col-12  col-lg-5 offset-lg-0 mt-5">

                                            <div class="row row-cols-1 row-cols-md-2 g-0">
                                                <div class="col">
                                                    <div class="card bg-dark text-white mb-5">
                                                        <div class=" card-header text-center fs-5 mb-4">Mostly Sold Item</div>
                                                        <img src="resources/laptop_images/msi1.png" class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <hr class="border-white">
                                                            <h5 class="card-title text-center">MSI Pulse GL76</h5>
                                                            <p class="card-text text-center">342 items</p>
                                                            <p class="card-text text-center">Rs.756000</p>
                                                            <p class="card-text text-center"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>



                                        </div>

                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>


                </div>


            </div>






        </div>

    </div>

    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>

</body>

</html>