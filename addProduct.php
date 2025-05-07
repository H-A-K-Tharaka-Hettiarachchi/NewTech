<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NewTech | Add Product</title>

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
                        <h1 class="fw-bold text-warning mt-2 mb-2">Add New Product &nbsp;<i class="bi bi-plus-circle-dotted fs-2 text-warning"></i></h1>
                    </div>
                </div>
                <hr class="border-3 border border-white">



                <div class="col-12">

                    <div class="row align-items-center">

                        <div class="col-10 offset-1  col-md-10 offset-md-1 col-lg-10 offset-lg-1 col-xl-6 offset-xl-3 bg-dark mb-5 mt-5 img-thumbnail border border-1 border-primary rounded-3">


                            <div class="col-8 offset-2 mt-5 mb-3">

                                <label class="form-label col-12 text-white">Category</label>

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

                            <div class="col-8 offset-2 mb-3">

                                <label class="form-label col-12 text-white">Brand</label>

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






                            <div class=" offset-2 col-8 mb-3">

                                <label class="form-label col-12 text-white">Model</label>

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


                            <div class="col-8 offset-2 mb-3">

                                <label class="form-label col-12 text-white">Condition</label>

                                <div class="col-12 input-group offset-0 offset-lg-1 offset-xl-3 mb-5">

                                    <div class="form-check text-white">
                                        <input class="form-check-input fs-5" type="radio" name="flexRadioDefault" id="flexRadioDefault1" name="condition" checked>
                                        <label class="form-check-label pt-1" for="flexRadioDefault1">
                                            Brand New
                                        </label>
                                    </div>
                                    <div class="form-check text-white ms-4 ms-lg-5">
                                        <input class="form-check-input fs-5" type="radio" name="flexRadioDefault" id="flexRadioDefault2" name="condition">
                                        <label class="form-check-label pt-1" for="flexRadioDefault2">
                                            Used
                                        </label>
                                    </div>

                                </div>

                            </div>


                            <div class="col-8 offset-2">
                                <hr class="border border-2 border-primary">
                            </div>



                            <div class="col-8 offset-2 mt-2 mb-3">
                                <label class="form-label col-12 text-white mt-5">Title</label>
                                <input type="text" class=" col-12 form-control" placeholder="Enter Product Title...." />
                            </div>

                            <div class="col-8 offset-2 mb-3">

                                <label class="form-label col-12 text-white">Colour</label>

                                <select class="form-select col-12 bg-secondary text-white text-center rounded-0">
                                    <option value="">Blue</option>
                                    <option value="">Black</option>
                                    <option value="">White</option>
                                    <option value="">Titanium Gray</option>
                                    <option value="">Gold</option>
                                    <option value="">Silver</option>
                                </select>

                            </div>


                            <div class="col-8 offset-2 mb-3">

                                <label class="form-label col-12 text-white">Quantity</label>
                                <input type="number" class="col-12 form-control mb-5" value="0" />

                            </div>


                            <div class="col-8 offset-2">
                                <hr class="border border-2 border-primary">
                            </div>


                            <div class=" col-8 offset-2 mb-3">
                                <label class="form-label col-12 text-white mt-5">Price Rs.</label>
                                <input type="number" class="col-12 form-control" placeholder="Pick a good price..." />
                                <div class="col-12 mt-3 mb-4">

                                    <div class="form-check">
                                        <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label text-white" for="flexCheckDefault">
                                            Negotiable
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class=" col-8 offset-2 mb-3">
                                <label class="form-label col-12 text-white">Delivery Rs.</label>
                                <input type="number" class="col-12 form-control mb-5" value="0" />
                            </div>


                            <div class="col-8 offset-2">
                                <hr class="border border-2 border-primary">
                            </div>


                            <div class="col-8 offset-2 mb-3">
                                <label class="form-label col-12 text-white mt-5">Description</label>
                                <textarea cols="72" rows="10" class="col-12 mb-5" placeholder="More Detail Interested Buyers!"></textarea>
                            </div>


                            <div class="col-8 offset-2">
                                <hr class="border border-2 border-primary">
                            </div>


                            <div class="card-group ">

                                <div class=" col-8 offset-2  card-group d-flex  mt-5">

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-6 text-center border border-1 border-primary rounded-3 addimg">
                                        <span class="fw-bold text-white col-12"><i class="bi bi-folder-plus " style="font-size:100px ;"></i></span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-6 text-center border border-1 border-primary rounded-3 addimg">
                                        <span class="fw-bold text-white col-12"><i class="bi bi-folder-plus " style="font-size:100px ;"></i></span>
                                    </div>

                                </div>

                                <div class=" col-8 offset-2 mb-3 card-group d-flex mb-5">

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-6 text-center border border-1 border-primary rounded-3 addimg">
                                        <span class="fw-bold text-white col-12"><i class="bi bi-folder-plus addimg" style="font-size:100px ;"></i></span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-6  text-center border border-1 border-primary rounded-3 addimg">
                                        <span class="fw-bold text-white col-12"><i class="bi bi-folder-plus " style="font-size:100px ;"></i></span>
                                    </div>


                                </div>



                            </div>


                            <div class="col-8 offset-2 mb-3  mt-3 mb-5">

                                <div class="offset-lg-3 col-12 col-lg-6 d-grid mt-3">
                                    <input type="file" class="d-none" id="imageuploader" multiple />
                                    <label for="imageuploader" class="col-12 btn btn-success" onclick="changeProductImage();">Upload Images</label>
                                </div>

                            </div>


                            <div class="col-8 offset-2">
                                <hr class="border border-2 border-primary">
                            </div>


                            <div class="col-8 offset-2">

                                <div class="col-12">
                                    <button class="btn btn-outline-warning col-6 offset-3">Save Product</button>
                                </div>

                            </div>

                            <div class="col-8 offset-2">
                                <hr class="border border-2 border-primary">
                            </div>




                            <div class="col-8 offset-2 mt-5 mb-5">

                                <div class="col-12">
                                    <div class="row">

                                        <div class=" col-2 pm pm1 offset-2"></div>
                                        <div class=" col-2 pm pm2"></div>
                                        <div class=" col-2 pm pm3"></div>
                                        <div class=" col-2 pm pm4"></div>

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