<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="icon" href="resources/newtech-1.png">

    <title>New Tech</title>

</head>

<body class="main-body ">

    <div class="container-fluid vh-100 d-flex justify-content-center">

        <div class="row align-content-center">


            <!--Header-->
            <!--Header-->
            <!--Header-->
            <!--Header-->



            <div class="col-12">


                <div class="row text text-center mb-5 ">

                    <div class="col-12">

                        <h1 class="text-center title1">Welcome to New Tech</h1>

                    </div>

                </div>

            </div>



            <!--Header-->
            <!--Header-->
            <!--Header-->
            <!--Header-->




            <div class="col-12 p-3 ">

                <!--Register Box-->
                <!--Register Box-->
                <!--Register Box-->
                <!--Register Box-->

                <div class="row g-3" id="registerBox">


                    <div class="col-12 text-center">
                        <p class="title2 text-warning">Create New Account</p>
                    </div>





                    <div class="col-10 col-lg-6 offset-1 offset-lg-3  ">


                        <div class="row">


                            <div class="col-6 mb-2 ">

                                <label class="form-label fw-bold">First Name</label>
                                <input type="text" class="form-control">

                            </div>
                            <div class="col-6 mb-2">

                                <label class="form-label fw-bold">Last Name</label>
                                <input type="text" class="form-control">

                            </div>
                            <div class="col-12 mb-2">

                                <label class="form-label fw-bold">Email</label>
                                <input type="text" class="form-control">

                            </div>
                            <div class="col-12 mb-2">

                                <label class="form-label fw-bold">Password</label>
                                <input type="password" class="form-control">

                            </div>
                            <div class="col-6 mb-2">

                                <label class="form-label fw-bold">Mobile</label>
                                <input type="text" class="form-control">

                            </div>
                            <div class="col-6 mb-2">

                                <label class="form-label fw-bold">Gender</label>
                                <select name="" id="" class="form-select">
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                </select>

                            </div>

                            <div class="col-6 mb-2 mt-4 d-grid">

                                <button class="btn btn-outline-warning fw-bold border-3 fs-5" onclick="changeView();">Register</button>


                            </div>
                            <div class="col-6 mb-2 mt-4 d-grid">

                                <button class="btn btn-outline-dark fw-bold border-3 fs-5" onclick="changeView();">Log In</button>

                            </div>


                            <a href="adminSignIn.php" class="text-white fs-5 border-3 fw-bold btn btn-outline-danger col-6 offset-3 mt-5">Admin Sign In</a>


                        </div>


                    </div>


                </div>


                <!--Register Box-->
                <!--Register Box-->
                <!--Register Box-->
                <!--Register Box-->



               



                <!--Login Box-->
                <!--Login Box-->
                <!--Login Box-->
                <!--Login Box-->


                <div class="row g-3 d-none " id="loginBox">


                    <div class="col-12 text-center">
                        <p class="title2 text-warning">Login</p>
                    </div>





                    <div class="col-10 col-lg-6 offset-1 offset-lg-3  ">




                        <div class="row">


                            <div class="col-12 mb-2">

                                <label class="form-label fw-bold">Email</label>
                                <input type="text" class="form-control">

                            </div>

                            <div class="col-12 mb-2">

                                <label class="form-label fw-bold">Password</label>
                                <input type="password" class="form-control">

                            </div>


                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="rememberme">
                                    <label class="form-check-label fw-bold" for="flexCheckDefault">Remember Me</label>
                                </div>
                            </div>

                            <div class="col-6 text-end">
                                <a href="#" class="link-primary text-black fs-6" onclick="forgotPassword();">Forgot Password</a>
                            </div>



                            <div class="col-6 mb-2 mt-4 d-grid">

                                <button class="btn btn-outline-dark fw-bold border-3 fs-5" onclick="login();">Log In</button>

                            </div>

                            <div class="col-6 mb-2 mt-4 d-grid">

                                <button class="btn btn-outline-warning fw-bold border-3 fs-5" onclick="changeView();">Register</button>

                            </div>

                            <a href="adminSignIn.php" class="text-white fs-5 border-3 fw-bold btn btn-outline-danger col-6 offset-3 mt-5">Admin Sign In</a>
                           

                        </div>






                    </div>

                </div>
            </div>


            <!--Login Box-->
            <!--Login Box-->
            <!--Login Box-->
            <!--Login Box-->


            <div class="col-12 fixed-bottom d-none d-lg-block">
                <p class="text-center text-white fs-5">Copyright &copy; 2022 NewTech All Right Reserved.</p>
            </div>

        </div>

    </div>




    </div>

    </div>


    <script src="script.js"></script>

</body>

</html>