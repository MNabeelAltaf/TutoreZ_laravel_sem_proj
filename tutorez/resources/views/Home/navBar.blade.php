<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- CSS nav bar file -->
    <link rel="stylesheet" href={{ asset('css/home/navBar.css') }}>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>



</head>

<body>

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
                    <li><a href="{{ url('/Home') }}">Home</a></li>
                    <li>
                        <a href="#courses">Courses</a>
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
                        <a href="#communities">Communities</a>
                        <i class='bx bxs-chevron-down js-arrow arrow '></i>
                        <ul class="js-sub-menu sub-menu">
                            <li><a href="#">Programming</a></li>
                            <li><a href="#">App Developers</a></li>
                            <li><a href="#">Machine Learning</a></li>
                            <li><a href="#">Graphic Designing</a></li>
                            <li><a href="Courses_Subjects_Communities.php" target="_blank">More</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/About') }}">ABOUT US</a></li>
                    <li><a href="{{ url('/Contact') }}" target="_blank">CONTACT US</a></li>
                    <span class="ml-lg-5">
                        <!-- <buton class="btn btn-success bg-success" onclick="register()">Join</buton> -->
                        <a class="btn btn-success bg-success" href="{{ url('/Register') }}">Join</a>

                    </span> <br>
                    <span class="ml-lg-5">
                        <!-- <buton class="btn btn-success " onclick="login()">Login</buton> -->
                        <a class="btn btn-success " href="{{ url('/Login') }}">Login</a>

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



    <!-- External file JavaScript -->
    <script src=js/home/main.js></script>
    <!-- jQuery & JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>