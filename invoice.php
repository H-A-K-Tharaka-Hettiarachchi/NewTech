<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NewTech | Invoice</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="icon" href="resources/newtech-1.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body class="">

    <div class="container-fluid ">

        <div class="row">

            <?php include "header.php"; ?>

            <hr class="border-3 border border-white">

            <div class="bg-black">


                <div class=" col-12">
                    <div class=" row">

                        <div class=" bg-dark col-12 btn-toolbar justify-content-end p-3 rounded border border-2 border-dark border-start-0 border-end-0">

                            <button class=" btn btn-primary me-3"><i class="bi bi-printer-fill"></i>&nbsp; Print</button>
                            <button class=" btn btn-danger me-3"><i class="bi bi-file-earmark-pdf-fill"></i>&nbsp; Export as PDF</button>

                        </div>

                    </div>
                </div>


                <div class=" col-12 mt-5" >

                    <div class="row">

                        <div class=" col-lg-10 offset-lg-1 bg-dark rounded rounded-3 mb-5">

                            <div class=" col-12 ">
                                <div class="row">
                                    <div class="col-3 bg-primary"></div>
                                    <div class=" col-1 offset-0 text-end">
                                        <div class="logo1 mt-3 text-end mb-3 ms-3"></div>
                                    </div>
                                    <div class="col-3 mt-5 offset-1 ">
                                        <h1 class="text-white fw-bold d-none d-lg-none d-xl-block">INVOICE</h1>
                                    </div>
                                    <div class=" col-4 text-end text-white mt-3">
                                        <span class="me-4 fs-4  text-decoration-underline">New Tech</span><br><br>
                                        <span class="me-4">Delgoda Gampaha, Sri Lanka</span><br>
                                        <span class="me-4">newtech@gmail.com</span><br>
                                        <span class="me-4">+94 76 2206 166</span>
                                    </div>

                                </div>

                            </div>


                            <div class="col-12">
                                <hr class="border-3  border border-white">
                            </div>

                            <div class="col-12 text-white">

                                <div class="row">

                                    <div class=" col-6">
                                        <h5 class="fw-bold">INVOICE TO : Tharaka</h5><br>
                                        <span>Dompe Wanaluwawa</span><br>
                                        <span>tharaka@gmail.com</span><br>
                                        <span>+94 77 9276 166</span>
                                    </div>

                                    <div class=" col-6 text-end mt-4">

                                        <h1 class="">INVOICE #01</h1>
                                        <span class="fs-5">Date : </span>
                                        <span>2022/10/31</span>

                                    </div>

                                </div>

                            </div>


                            <div class="col-12">
                                <hr class="border-3  border border-white">
                            </div>





                            <div class=" col-12 mt-5 mb-5 ">

                                <div class="row">

                                    <table class="table text-white">

                                        <thead>

                                            <tr class="border border-3 border-secondary">

                                                <th>#</th>
                                                <th class="text-center">DESCRIPTION</th>
                                                <th class="text-end">QTY</th>
                                                <th class="text-end">UNIT PRICE</th>
                                                <th class="text-end">TOTAL</th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            <tr>

                                                <td>01</td>
                                                <td class="text-center">MSI Pulse GL76</td>
                                                <td class="text-end">1</td>
                                                <td class="text-end">Rs.756000</td>
                                                <td class="text-end">Rs.756000</td>

                                            </tr>
                                            <tr>

                                                <td>02</td>
                                                <td class="text-center">ASUS ROG STRIX 5</td>
                                                <td class="text-end">1</td>
                                                <td class="text-end">Rs.1300000</td>
                                                <td class="text-end">Rs.1300000</td>

                                            </tr>

                                        </tbody>

                                        <tfoot>

                                            <tr>

                                                <td colspan="3" class="border-0 "></td>
                                                <td class="fs-5 fw-bold">SUBTOTAL</td>
                                                <td class="text-end fs-5 ">Rs.2056000</td>

                                            </tr>


                                            <tr>

                                                <td colspan="3" class="border-0 "></td>
                                                <td class="fs-5 fw-bold">DELIVERY FEE</td>
                                                <td class="text-end fs-5 bg-secondary">Rs.1000</td>

                                            </tr>


                                            <tr>

                                                <td colspan="3" class="border-0 "></td>
                                                <td class="fs-5 fw-bold text-danger">TOTAL AMOUNT</td>
                                                <td class="text-end fs-5 bg-danger">Rs.2057000</td>

                                            </tr>

                                        </tfoot>

                                    </table>

                                </div>

                            </div>



                            <div class=" col-12 text-center text-success fs-1 fw-bolder mb-5 mt-5">THANK YOU !</div>


                            <div class=" col-12 text-center text-warning fs-5  mb-5 mt-5">It Has Been a Pleasure Doing Business With You.</div>



                            <div class="col-12 ">

                                <div class="row">
                                    <div class="bg-primary rounded" style="height: 100px;"></div>
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