<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="icon" href="resources/newtech-1.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


    <title>NewTech | Cooling and Lighting</title>


</head>


<body class="">

    <div class="container-fluid">

        <div class="row">

            <?php require "header.php"; ?>

            <hr class="" />

            <section class="bg-black">

                <div class="col-12 justify-content-center align-content-start">

                    <div class="row">


                        <div class="col-12 col-lg-2 bg-dark">

                            <div class="col-12 offset-lg-1 mt-2 mb-5">
                                <div class="row">
                                    <div class="col-5 offset-1 offset-lg-0  col-lg-4 lg"> <img class="logo1 mt-4"></div>
                                    <div class=" col-4 mt-5   text-start col-lg-4"><label class="title1 fs-1 text-white ">NewTech</label></div>
                                </div>


                            </div>

                            <div class="col-12 p-0">


                                <div class="col-12 p-0 ms-0 ms-lg-0">


                                <button class="bg-secondary col-12 p-2 mb-3 text-center  border-0 d-lg-none dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                                        Categories
                                    </button>

                                    <ul class="dropdown-menu">

                                        <li> <a class="fw-bold dropdown-item" href="home.php">Select Category</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="consolegaming.php">Console Gaming</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="laptops.php">Laptops</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="dekstopworktations.php">Dekstop Workstations</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="gamingdekstops.php">Gaming Dekstops</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="budgetdekstopcomputers.php">Budget Dekstop Computers</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="processors.php">Processors</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="graphictablettab.php">Graphic Tablet/Tab</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="motherboards.php">Motherboards</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="graphiccards.php">Graphic Cards</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="powersupply.php">Power Supply,UPS & Surge Protectors</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="coolingandlighting.php">Cooling and Lighting</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="storage.php">Storage</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="casing.php">Casing</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="opticaldrives.php">Optical Drives</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="monitors.php">Monitors</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="speakersandheadphones.php">Speakers & HeadPhones</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="keyboardsmicandgamepads.php">Keybords,Mice & GamePads</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="gamingchairs.php">Gaming Chairs</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="cablesandconnectors.php">Cables & Connectors</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="externalstorage.php">External Storage</a></li>
                                        <li> <a class="fw-bold dropdown-item" href="livestreamingandrecording.php">Live Streaming & Recording</a></li>

                                    </ul>

                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="con" onclick="changeproduct('con');">Console Gaming</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="lap" onclick="changeproduct('lap');">Laptops</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="dek" onclick="changeproduct('dek');">Dekstop Workstations</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="gam" onclick="changeproduct('gam');">Gaming Dekstops</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="bdc" onclick="changeproduct('bdc');">Budget Dekstop Computers</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="cpu" onclick="changeproduct('cpu');">Processors</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="gtab" onclick="changeproduct('gtab');">Graphic Tablet/Tab</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="mb" onclick="changeproduct('mb');">Motherboards</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="ram" onclick="changeproduct('ram');">Memory(RAM)</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="gpu" onclick="changeproduct('gpu');">Graphic Cards</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="psu" onclick="changeproduct('psu');">Power Supply,UPS & Surge Protectors</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="cool" onclick="changeproduct('cool');">Cooling and Lighting</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="sto" onclick="changeproduct('sto');">Storage</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="cas" onclick="changeproduct('cas');">Casing</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="rom" onclick="changeproduct('rom');">Optical Drives</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="moni" onclick="changeproduct('moni');">Monitors</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="shp" onclick="changeproduct('shp');">Speakers & HeadPhones</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="kmg" onclick="changeproduct('kmg');">Keybords,Mice & GamePads</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="gch" onclick="changeproduct('gch');">Gaming Chairs</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="cc" onclick="changeproduct('cc');">Cables & Connectors</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="exs" onclick="changeproduct('exs');">External Storage</div>
                                    <div class="btn btn-secondary text-black rounded-0 col-12 p-2 mb-1 text-center d-none d-lg-block fw-bold cbtn" id="lsr" onclick="changeproduct('lsr');">Live Streaming & Recording</div>



                                </div>



                            </div>



                        </div>

                        <!---->

                        <div class="col-12 col-lg-10   bg-opacity-25" id="home-body-2">

                           
                            <hr class="border-1 mb-4 text-white ">

                            <div class="col-12">
                                <div class="row text-center ">
                                    <div class="col-5 col-lg-4 offset-1 offset-lg-4 mb-3">
                                        <input type="text" placeholder="Search..." class="form-control">
                                    </div>
                                    <div class="col-5 col-lg-4  mb-3">
                                        <button class="btn btn-outline-primary d-grid">Search</button>
                                    </div>
                                </div>
                            </div>

                            <hr class="border-1 mb-5 text-white ">



 <!-- 

                            <div class="col-12">

                                <div class="row row-cols-1 row-cols-md-4  g-4">
                                    <div class="col">
                                        <div class="card h-100 bg-dark text-white">
                                            <img src="resources/laptop_images/acer-nitro-7-ksp-1.png" class="card-img-top img-thumbnail bg-black border-2 border-start-0 border-end-0 border-top-0 border-secondary " style="height: 180px;">
                                            <div class="card-body">
                                                <h5 class="card-title">Acer Nitro 7</h5>
                                                <p><b>IN Stock</b></p>
                                                <h6><b>Price :</b> Rs.923000.00</h6>
                                                <a class="card-text">-Laptops-</a>
                                            </div>
                                            <div class="card-footer border-secondary">
                                                <button class="btn btn-outline-warning col-12 mb-3">Add to Cart</button>
                                                <button class="btn btn-outline-success col-12 mb-3">By Now</button>
                                                <button class="btn btn-outline-danger col-12 ">Add to Watchlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100  bg-dark text-white">
                                            <img src="resources/laptop_images/dell3.png" class="card-img-top img-thumbnail bg-black border-2 border-start-0 border-end-0 border-top-0 border-secondary " style="height: 180px;">
                                            <div class="card-body">
                                                <h5 class="card-title">Dell Inspiron 15 3000</h5>
                                                <p><b>IN Stock</b></p>
                                                <h6><b>Price :</b> Rs.355000.00</h6>
                                                <a class="card-text">-Laptops-</a>
                                            </div>
                                            <div class="card-footer border-secondary">
                                                <button class="btn btn-outline-warning col-12 mb-3">Add to Cart</button>
                                                <button class="btn btn-outline-success col-12 mb-3">By Now</button>
                                                <button class="btn btn-outline-danger col-12 ">Add to Watchlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100 bg-dark text-white">
                                            <img src="resources/laptop_images/msi1.png" class="card-img-top img-thumbnail bg-black border-2 border-start-0 border-end-0 border-top-0 border-secondary " style="height: 180px;">
                                            <div class="card-body">
                                                <h5 class="card-title">MSI Pulse GL76</h5>
                                                <p><b>IN Stock</b></p>
                                                <h6><b>Price :</b> Rs.679000.00</h6>
                                                <a class="card-text">-Laptops-</a>
                                            </div>
                                            <div class="card-footer border-secondary">
                                                <button class="btn btn-outline-warning col-12 mb-3">Add to Cart</button>
                                                <button class="btn btn-outline-success col-12 mb-3">By Now</button>
                                                <button class="btn btn-outline-danger col-12 ">Add to Watchlist</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card h-100 bg-dark text-white">
                                            <img src="resources/laptop_images/download.jpg" class="card-img-top img-thumbnail bg-black border-2 border-start-0 border-end-0 border-top-0 border-warning " style="height: 180px;">
                                            <div class="card-body">
                                                <h5 class="card-title">Asus ROG Strix G17</h5>
                                                <p><b>IN Stock</b></p>
                                                <h6><b>Price :</b> Rs.1300 000.00</h6>
                                                <a class="card-text">-Laptops-</a>
                                            </div>
                                            <div class="card-footer border-secondary">
                                                <button class="btn btn-outline-warning col-12 mb-3">Add to Cart</button>
                                                <button class="btn btn-outline-success col-12 mb-3">By Now</button>
                                                <button class="btn btn-outline-danger col-12 ">Add to Watchlist</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> -->


                        </div>

                    </div>
                </div>
            </section>


            <?php require "footer.php"; ?>



        </div>

    </div>


    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>

</body>

</html>