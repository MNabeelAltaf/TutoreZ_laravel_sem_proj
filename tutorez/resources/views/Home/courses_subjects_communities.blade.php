<!doctype html>
<html lang="en">

<head>
    <title>Courses | Subjects| Communities </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Css file -->
    <link rel="stylesheet" href="css/Courses_Subjects_Communities/Courses_Subjects_Communities.css">
    <link rel="stylesheet" href="css/Courses_Subjects_Communities/navBar.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Boxicons CDN Link  for nav bar icons when responsive-->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>


    <!-- nav bar start -->
    <nav>
        <div class="navbar">
            <i class='bx bx-menu'></i>
            <div class="logo"><a href="#">Tutorez</a></div>
            <div class="nav-links">
                <div class="sidebar-logo">
                    <span class="logo-name">Tutorez</span>
                    <i class='bx bx-x'></i>
                </div>
                <ul class="links">
                    <li><a href="Home.php">Home</a></li>
                    <li>
                        <a href="Home.php #courses">Courses</a>
                        <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                        <ul class="htmlCss-sub-menu sub-menu">
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">App Development</a></li>
                            <li><a href="#">Basics of Ai</a></li>
                            <li class="more">
                                <span><a href="#">More</a>
                                    <i class='bx bxs-chevron-right arrow more-arrow'></i>
                                </span>
                                <ul class="more-sub-menu sub-menu">
                                    <li><a href="#">Graphic Designing</a></li>
                                    <li><a href="#">English Speaking</a></li>
                                    <li><a href="#">Arts</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="Home.php #communities">Communities</a>
                        <i class='bx bxs-chevron-down js-arrow arrow '></i>
                        <ul class="js-sub-menu sub-menu">
                            <li><a href="#">Programming</a></li>
                            <li><a href="#">App Developers</a></li>
                            <li><a href="#">Machine Learning</a></li>
                            <li><a href="#">Graphic Designing</a></li>
                            <li><a href="#">More</a></li>
                        </ul>
                    </li>
                    <li><a href="aboutus.php">ABOUT US</a></li>
                    <li><a href="contactus.php" target="_blank">CONTACT US</a></li>
                    <span class="ml-lg-5">
                        <!-- <buton class="btn btn-success bg-success" onclick="register()">Join</buton> -->
                        <a class="btn btn-success bg-success" href="register.php">Join</a>

                    </span> <br>
                    <span class="ml-lg-5">
                        <!-- <buton class="btn btn-success " onclick="login()">Login</buton> -->
                        <a class="btn btn-success bg-success" href="login.php">Login</a>

                    </span>
                </ul>
            </div>

            <!-- search tab -->
            <div class="search-box">
                <i class='bx bx-search'></i>
                <div class="input-box">
                    <input type="text" placeholder="Search...">
                </div>
            </div>
        </div>
    </nav>

    <!-- nav bar ends -->

    <br> <br>



    <div class="bg"></div>

    <br>



    <!-- Heading (Subjects) Grid screen -->

    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col">

                </div>
                <div class="col-6 text-center">
                    <h1>Subjects</h1>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </div>


    <!--Subjects Iframe Screen Grid -->
    <div class="row">
        <div class="row">
            <div class="col">

            </div>
            <div class="col-10 text-center">
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" src="{{ url('/Subjects') }}"></iframe>
                </div>
            </div>
            <div class="col">

            </div>
        </div>
    </div>


    <br><br>





    <!-- Heading(Courses) Grid System -->
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col">

                </div>
                <div class="col-6 text-center">
                    <h1>Courses</h1>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </div>


    <!--Courses Iframe Screen Grid -->
    <div class="row">
        <div class="row">
            <div class="col">

            </div>
            <div class="col-10 text-center">
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" src="{{ url('/Courses') }}"></iframe>
                </div>
            </div>
            <div class="col">

            </div>
        </div>
    </div>





    <!-- Heading(Courses) Grid System -->
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col">

                </div>
                <div class="col-6 text-center">
                    <h1>Communities</h1>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </div>


    <!--Courses Iframe Screen Grid -->
    <div class="row">
        <div class="row">
            <div class="col">

            </div>
            <div class="col-10 text-center">
                <div class="embed-responsive embed-responsive-21by9">
                 <iframe class="embed-responsive-item" src="{{ url('/Communities') }}">
                        Couldn't found
                    </iframe>
                </div>
            </div>
            <div class="col">

            </div>
        </div>
    </div>








    <!--  JavaScript -->

    <script src="js/Courses_Subjects_Communities/CSC.js"></script>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


</body>

</html>