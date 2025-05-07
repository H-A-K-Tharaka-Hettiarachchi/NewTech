<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NewTech | MSI Pulse GL76 11UDK</title>

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

                                <div class="col-12 p-4 ms-2 ms-lg-1">
                                    <input class="form-control border-warning border-0   border-bottom-0  col-12 mt-2 " />
                                    <button class="btn btn-outline-primary mb-3 offset-3 col-6 col-lg-6 mt-3  p-1">Search</button>
                                </div>

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





                        <div class=" col-12 col-lg-10 mt-3 card-group">
                            <div class=" col-12 col-lg-6 ">

                                <div id="carouselExampleIndicators" class="carousel slide d-block d-lg-none d-md-none" data-bs-ride="true">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="resources/laptop_images/msi1.png" class="d-block w-100 img-thumbnail bg-black border-0 rounded" alt="..." style="height: 300px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="resources/laptop_images/msi2.png" class="d-block w-100 img-thumbnail bg-black border-0 rounded" alt="..." style="height: 300px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="resources/laptop_images/msi3.png" class="d-block w-100 img-thumbnail bg-black border-0 rounded" alt="..." style="height: 300px;">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>




                                <div id="carouselExampleControls" class="carousel slide d-none d-lg-block d-md-block" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="resources/laptop_images/msi1.png" class="d-block w-100 img-thumbnail bg-black border-0 rounded" alt="..." style="height: 450px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="resources/laptop_images/msi2.png" class="d-block w-100 img-thumbnail bg-black border-0 rounded" alt="..." style="height: 450px;">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="resources/laptop_images/msi3.png" class="d-block w-100 img-thumbnail bg-black border-0 rounded" alt="..." style="height: 450px;">
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



                                <div class="col-12  offset-lg-0 border border-1 border-secondary mt-5">

                                    <div class="col-12 text-white mt-3 ps-1">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                                <li class="breadcrumb-item active text-white" aria-current="page">Single Product View</li>
                                            </ol>
                                        </nav>
                                    </div>

                                    <hr class="border border-white">
                                    <div class=" col-12 text-center fw-bold fs-2 text-white">
                                        MSI Pulse GL76 11UDK
                                    </div>

                                    <hr class="border border-white">
                                    <hr class="border border-white">

                                    <div class=" col-12 text-white">
                                        <div class="col-12 my-2">
                                            <span class="badge d-block d-lg-block d-xl-none d-md-block ">

                                                <i class="bi bi-star-fill text-warning fs-5"></i>
                                                <i class="bi bi-star-fill text-warning fs-5"></i>
                                                <i class="bi bi-star-fill text-warning fs-5"></i>
                                                <i class="bi bi-star-fill text-warning fs-5"></i>
                                                <i class="bi bi-star-half text-warning fs-5"></i>

                                                &nbsp;&nbsp;&nbsp;

                                                <label class="fs-5 text-dark fw-bold text-white">4.5 Stars </label><br><br>
                                                <label class="fs-5 text-dark fw-bold text-white ps-5">100 Ratings And 450 Reviews</label>

                                            </span>
                                            <span class="badge d-none d-lg-none d-xl-block d-md-none">

                                                <i class="bi bi-star-fill text-warning fs-5"></i>
                                                <i class="bi bi-star-fill text-warning fs-5"></i>
                                                <i class="bi bi-star-fill text-warning fs-5"></i>
                                                <i class="bi bi-star-fill text-warning fs-5"></i>
                                                <i class="bi bi-star-half text-warning fs-5"></i>

                                                &nbsp;&nbsp;&nbsp;

                                                <label class="fs-5 text-dark fw-bold text-white">4.5 Stars | 100 Ratings | 450 Reviews</label><br><br>
                                                <label class="fs-5 text-dark fw-bold text-white ps-5"></label>

                                            </span>
                                        </div>
                                    </div>

                                    <hr class="border border-white">
                                    <hr class="border border-white">

                                    <div class="col-12 text-white">
                                        <div class="col-12 fs-5 ps-4">Rs.756000.00 | Save Rs.15120.00</div>
                                        <div class="col-12 ps-4"><small class=" text-danger text-decoration-line-through">Rs.771120.00</small>&nbsp; 2%</div>
                                    </div>

                                    <hr class="border border-white">
                                    <hr class="border border-white">

                                    <div class="col-12 card-group d-flex p-0">
                                        <div class="col-lg-3 fs-5 col-3 offset-1 text-white fw-bold offset-lg-1 ">Quantity :</div>
                                        <div class="col-lg-5 col-6"><input type="number" class="form-control"></div>
                                    </div>

                                    <hr class="border border-white">
                                    <hr class="border border-white">


                                    <div class="col-12">
                                        <div class="col-10 offset-1"><button class="btn btn-outline-success d-grid col-12 mt-3 mb-3">Buy Now</button></div>
                                        <div class="col-10 offset-1"><button class="btn btn-outline-warning d-grid col-12 mb-3">Add To Cart</button></div>
                                        <div class="col-10 offset-1"><button class="btn btn-outline-danger bi bi-heart-fill fs-5 d-grid col-12 mb-3"></button></div>
                                    </div>


                                </div>



                            </div>




                            <div class="col-12 col-lg-6 offset-lg-0 border border-1 border-secondary">


                                <div class=" col-12 my-5">

                                    <div class="container-fluid text-center my-5">

                                        <div class="row align-items-center justify-content-center">

                                            <div class="col align-self-center my-5">

                                                <div class="col-10 offset-1 text-white my-5 border border-secondary border-4 rounded">


                                                    <div class="col-12 mt-3 mb-3">
                                                        <div class="col-12 text-white fs-4 fw-bold">Delivery</div>
                                                    </div>

                                                    <hr class="border border-1 border-secondary border-2">
                                                    <hr class="border border-1 border-secondary border-2">

                                                    <div class="col-12">

                                                        <div class="col-12 fs-5"><i class="bi bi-geo-alt-fill text-white fs-4">
                                                            </i> 183/5/i,Wanaluwawa North Wanaluwawa <button class="border border-0 btn fs-5 text-primary text-decoration-underline">Change</button>
                                                        </div>

                                                    </div>

                                                    <hr class="border border-1 border-secondary border-2">

                                                    <div class="col-12">

                                                        <div class="col-12 fs-5"><i class="bi bi-truck fs-4 text-white"></i>&nbsp; Standard Delivery <br>
                                                            <h6>Rs.750.00 &nbsp; <small class="text-secondary">4-8 day(s)</small> </h6>
                                                        </div>
                                                        <br><br>
                                                        <div class="col-12 fs-5 mb-4"><i class="bi bi-cash-coin fs-4 text-white"></i></i>&nbsp; Cash On Delivery Avalable</div>

                                                        <hr class="border border-1 border-secondary border-2">

                                                        <div class="col-12 mt-3 mb-3">
                                                            <div class="col-12 text-white fs-4 fw-bold">Service</div>
                                                        </div>
                                                        <hr class="border border-1 border-secondary border-2">
                                                        <hr class="border border-1 border-secondary border-2">

                                                        <div class="col-12">
                                                            <div class="col-12 fs-5"><i class="bi bi-arrow-clockwise fs-4 text-white"></i>&nbsp; 7 Days Returns</div>
                                                            <small class="text-secondary"> Change of mind is not applicable</small>
                                                        </div>

                                                        <div class="col-12 mt-2 mb-3">
                                                            <div class="col-12 fs-5"><i class="bi bi-shield-fill-check fs-4 text-white"></i> (2) Warranty Avalable</div>
                                                        </div>
                                                        <hr class="border border-1 border-secondary border-2">

                                                        <div class="col-12 mt-3 mb-3">
                                                            <div class="col-12 text-white fs-5"><b class="fs-5">Sold By : </b>Tharaka Hettiarachchi
                                                                <button class="border border-0 btn fs-5 text-primary text-decoration-underline"><i class="bi bi-chat-right-text-fill fs-5 "></i>&nbsp; CHAT</button>
                                                            </div>
                                                        </div>
                                                        <hr class="border border-1 border-secondary border-2">

                                                        <div class="col-12 card-group d-flex mb-3">
                                                            <div class="col-4 border border-1 border-secondary"><small>Positive Seller Ratings</small><br><br>
                                                                <h5>73%</h5>
                                                            </div>
                                                            <div class="col-4 border border-1 border-secondary border-start-0"><small>Ship On Time</small><br><br>
                                                                <h5> 100%</h5>
                                                            </div>
                                                            <div class="col-4 border border-1 border-secondary border-start-0"><small>Chat Response Rate</small><br><br>
                                                                <h5> 100%</h5>
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


                    <?php include "footer.php"; ?>


                </div>


            </div>




            <script src="script.js"></script>
            <script src="bootstrap.js"></script>
            <script src="bootstrap.bundle.js"></script>
</body>

</html>