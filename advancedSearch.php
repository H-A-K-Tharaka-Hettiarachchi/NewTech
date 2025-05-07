<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NewTech | Advanced Search</title>

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



                <div class="row">
                    <div class="offset-lg-4 col-12 col-lg-4">
                        <div class="row">

                            <div class="col-2">
                                <div class="mt-4 mb-2 logo1"></div>
                            </div>
                            <div class="col-10 text-center mt-3">
                                <p class="fs-1 text-warning fw-bold mt-3 mb-2 pt-2"><i class="bi bi-search fs-1"></i>&nbsp;Advanced Search</p>
                            </div>
                        </div>
                    </div>
                </div>




                <hr class="border-1 mb-5 text-white ">

                <div class="col-12">


                    <div class="row text-center">

                        <div class="col-lg-8 col-12 offset-lg-2 ">

                            <div class="col-12 border border-1 border-secondary">


                                <div class="col-12  card-group mt-5 mb-3">
                                    <div class="col-lg-7 col-10 offset-1 mb-3">
                                        <input type="text" class="col-12 form-control" placeholder="Type KeyWord to Search...">
                                    </div>

                                    <div class="col-lg-2 col-6 offset-3 offset-lg-1 mb-3">
                                        <button class="col-12 btn btn-outline-primary ">Search</button>
                                    </div>
                                </div>
                                <hr class="border border-2 border-secondary">

                                <div class="col-12 card-group ">

                                    <div class="col-12 col-lg-4 border border-1 border-secondary">

                                        <div class="col-12 mb-2 mt-4">

                                            <select class="bg-secondary col-12 p-2 mb-3 text-center text-white border-0  dropdown">

                                                <option class="fw-bold ">Select Category</option>
                                                <option class="fw-bold ">Console Gaming</option>
                                                <option class="fw-bold ">Laptops</option>
                                                <option class="fw-bold ">Dekstop Workstations</option>
                                                <option class="fw-bold ">Gaming Dekstops</option>
                                                <option class="fw-bold ">Budget Dekstop Computers</option>
                                                <option class="fw-bold ">Processors</option>
                                                <option class="fw-bold ">Graphic Tablet/Tab</option>
                                                <option class="fw-bold ">Motherboards</option>
                                                <option class="fw-bold ">Graphic Cards</option>
                                                <option class="fw-bold ">Power Supply,UPS & Surge Protectors</option>
                                                <option class="fw-bold ">Cooling and Lighting</option>
                                                <option class="fw-bold ">Storage</option>
                                                <option class="fw-bold ">Casing</option>
                                                <option class="fw-bold ">Optical Drives</option>
                                                <option class="fw-bold ">Monitors</option>
                                                <option class="fw-bold ">Speakers & HeadPhones</option>
                                                <option class="fw-bold ">Keybords,Mice & GamePads</option>
                                                <option class="fw-bold ">Gaming Chairs</option>
                                                <option class="fw-bold ">Cables & Connectors</option>
                                                <option class="fw-bold ">External Storage</option>
                                                <option class="fw-bold ">Live Streaming & Recording</option>

                                            </select>

                                        </div>


                                        <div class="col-12 mb-2">

                                            <select class="bg-secondary col-12 p-2 mb-3 text-center text-white border-0  dropdown">



                                                <option class="fw-bold ">Select Brand</option>
                                                <option class="fw-bold ">Asus</option>
                                                <option class="fw-bold ">Acer</option>
                                                <option class="fw-bold ">Msi</option>
                                                <option class="fw-bold ">Lenovo</option>
                                                <option class="fw-bold ">Dell</option>
                                                <option class="fw-bold ">Hp</option>
                                                <option class="fw-bold ">Mac Book Air</option>
                                                <option class="fw-bold ">Apple</option>
                                                <option class="fw-bold ">Intel®</option>
                                                <option class="fw-bold ">Amd Ryzen</option>
                                                <option class="fw-bold ">Amd Epyc</option>
                                                <option class="fw-bold ">Nvidia</option>
                                                <option class="fw-bold ">Trancend</option>
                                                <option class="fw-bold ">Wd</option>
                                                <option class="fw-bold ">Samsung</option>
                                                <option class="fw-bold ">Xbox</option>
                                                <option class="fw-bold ">Elgato</option>
                                                <option class="fw-bold ">Adlink</option>
                                                <option class="fw-bold ">Ugreen</option>
                                                <option class="fw-bold ">Belkin</option>
                                                <option class="fw-bold ">Corsair</option>
                                                <option class="fw-bold ">Galax</option>
                                                <option class="fw-bold ">Raidmax</option>
                                                <option class="fw-bold ">Gamedias</option>
                                                <option class="fw-bold ">Sony</option>
                                                <option class="fw-bold ">Razer</option>
                                                <option class="fw-bold ">Streat Series</option>
                                                <option class="fw-bold ">Hyperx</option>
                                                <option class="fw-bold ">Jedel</option>
                                                <option class="fw-bold ">Jbl</option>
                                                <option class="fw-bold ">Benq</option>
                                                <option class="fw-bold ">Abans</option>
                                                <option class="fw-bold ">Huawie</option>
                                                <option class="fw-bold ">Antek</option>
                                                <option class="fw-bold ">Kingston</option>
                                                <option class="fw-bold ">Toshiba</option>
                                                <option class="fw-bold ">Wacom</option>
                                                <option class="fw-bold ">Vr</option>
                                                <option class="fw-bold ">Mac Book Pro</option>

                                            </select>
                                        </div>


                                        <div class="col-12 mb-3">

                                            <select class="bg-secondary col-12 p-2 mb-3 text-center text-white border-0  dropdown">


                                                <option class="fw-bold ">Select Model</option>
                                                <option class="fw-bold ">Pulse GL76 11UDK</option>
                                                <option class="fw-bold ">Nitro 7</option>
                                                <option class="fw-bold ">Intel® i3 7gen</option>
                                                <option class="fw-bold ">Intel® i5 12gen</option>
                                                <option class="fw-bold ">Intel® i7 12gen</option>
                                                <option class="fw-bold ">Intel® i9 12gen</option>
                                                <option class="fw-bold ">AMD Epyc Rome 8</option>
                                                <option class="fw-bold ">Intel® i9 13gen</option>
                                                <option class="fw-bold ">Atx Gaming</option>
                                                <option class="fw-bold ">ROG Strix 5</option>
                                                <option class="fw-bold ">Inspiron 5 3000</option>
                                                <option class="fw-bold ">Victus</option>
                                                <option class="fw-bold ">Tuf</option>
                                                <option class="fw-bold ">Lenovo Legion</option>
                                                <option class="fw-bold ">Acer Predator Orion</option>
                                                <option class="fw-bold ">Mag Infinite S3</option>
                                                <option class="fw-bold ">Meg Aegis Ti5</option>
                                                <option class="fw-bold ">Meg Infinite X 10TG</option>
                                                <option class="fw-bold ">Meg Trident X 11TE</option>



                                            </select>

                                        </div>



                                        <div class="col-6 offset-3  mb-4">

                                            <div class="form-check mb-2">
                                                <input class="form-check-input fs-5" type="radio" value="" id="flexCheckDefault" name="condition" checked>
                                                <label class="form-check-label text-white " for="flexCheckDefault">
                                                    Brand New
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input fs-5" type="radio" value="" id="flexCheckChecked" name="condition">
                                                <label class="form-check-label text-white " for="flexCheckChecked">
                                                    Used
                                                </label>
                                            </div>

                                        </div>


                                        <div class="col-12 mb-3">

                                            <select class="form-select col-12 bg-secondary text-white text-center rounded-0">
                                                <option value="">Blue</option>
                                                <option value="">Black</option>
                                                <option value="">White</option>
                                                <option value="">Titanium Gray</option>
                                                <option value="">Gold</option>
                                                <option value="">Silver</option>
                                            </select>

                                        </div>



                                        <div class="col-10 offset-1 mb-3">
                                            <div class="col-12 mb-2">
                                                <input type="number" class="form-control col-12 mt-2" placeholder="Price From...">
                                            </div>
                                            <div class="col-12 mb-2">
                                                <input type="number" class="form-control col-12 mb-2" placeholder="Price To...">
                                            </div>
                                        </div>



                                        <div class="col-6 offset-3  mb-4">

                                            <div class="form-check mb-2">
                                                <input class="form-check-input fs-5" type="radio" value="" id="flexCheckDefault" name="price" checked>
                                                <label class="form-check-label text-white " for="flexCheckDefault">
                                                    Price Hight to Low
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input fs-5" type="radio" value="" id="flexCheckChecked" name="price">
                                                <label class="form-check-label text-white " for="flexCheckChecked">
                                                    Price Low to Hight
                                                </label>
                                            </div>

                                        </div>


                                        <div class="col-6 offset-3  mb-4">

                                            <div class="form-check mb-2">
                                                <input class="form-check-input fs-5" type="radio" value="" id="flexCheckDefault" name="qty" checked>
                                                <label class="form-check-label text-white " for="flexCheckDefault">
                                                    Quantity Hight to Low
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input fs-5" type="radio" value="" id="flexCheckChecked" name="qty">
                                                <label class="form-check-label text-white " for="flexCheckChecked">
                                                    Quantity Low to Hight
                                                </label>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-12 col-lg-8 mb-5">

                                        <div class="col-12 text-white">
                                            <span class="col-12 fw-bold"><i class="bi bi-search" style="font-size: 200px;"></i></span>
                                        </div>
                                        <div class="col-12 text-white">
                                            <h1>No Items Search Yet.</h1>
                                        </div>

                                    </div>

                                </div>



                            </div>

                        </div>

                    </div>


                    <!-- <div class="row text-center ">
                        <div class="col-5 col-lg-4 offset-1 offset-lg-3 mb-5">
                            <input type="text" placeholder="Search..." class="form-control">
                        </div>
                        <div class="col-5 col-lg-5  mb-5">
                            <button class="btn btn-outline-primary d-grid">Search</button>
                        </div>
                    </div> -->
                </div>

                <hr class="border-1 mb-5 text-white ">


            </div>



            <?php include "footer.php"; ?>


        </div>



    </div>







    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
    <script src="bootstrap.bundle.js"></script>
</body>

</html>