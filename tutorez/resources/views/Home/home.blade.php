<!doctype html>
<html lang="en">

<head>
    <title>Tutor Finder</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <!-- Css file  -->
    <link rel="stylesheet" href={{ asset('css/home/Style.css') }}>
    <link rel="stylesheet" href={{ asset('css/home/navBar.css') }}>
    <link rel="stylesheet" href={{ asset('css/home/BackgroundAnimation.css') }}>



</head>

<body onload="openAdmin()">


    <div class="page-wrape">


        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <!-- <img src="assets/img/logo/loder.png" alt=""> -->
                        <h4>TutoreZ</h4>
                    </div>
                </div>
            </div>
        </div>


        <br><br>




        <div class="context">
            <h1 style="color: green; ">W e l c o m e &nbsp; t o</h1>
            <br>
            <h1 style="color: green; 
    text-shadow: #15b28b 2.5px 5.5px 25px; "><strong id="tute">TutoreZ.com</strong></h1>
            <!-- <h4 style="padding-left:37%; padding-top:2%; padding-bottom:5%;
     color: black;">Where &nbsp; U &nbsp; find &nbsp; Your &nbsp; Desire &nbsp;Tutor</h4> -->
        </div>


        <div class="area">
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>


        <div class="position-relative">

            <div class="hero-shape">

                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-50 " src={{ asset('css/home/images/educationBG_1.svg') }} alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50 " src={{ asset('css/home/images/educationBG1.svg') }} alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-50" src={{ asset('css/home/images/educationBG_2.svg') }} alt="Third slide">
                        </div>
                    </div>
                </div>

            </div>



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
            <br>

            <div class="banner-bg pb-5 pt-md-5 position-relative">
                <div class="container pb-5 pt-md-5">
                    <div class="row py-5 justify-content-between align-items-center">
                        <div class="col-lg-6 col-md-7 py-5">
                            <h1 class="font-weight-bold display-4 mb-4">Our tutors offers face-to-face and online
                                tuition. </h1>
                            <p class="lead mb-5">Our focus - modular training programs from leading practice lectors.
                            </p>
                            <a href="{{ url('/Contact') }}" target="_blank" class="btn btn-success">Contact Us &rarr; </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="position-relative" style="z-index:1;">
            <div class="container py-5">
                <div class="row pt-5 justify-content-between text-center">
                    <div class="col-12">
                        <h2 class="font-weight-bold mb-5 pb-3">Choose our tutors by subjects.</h2>
                    </div>
                    <div class="col-md-4 col-lg-3 pb-4">
                        <a href="{{ url('/Tutor') }}" target="_blank">
                            <div class="p-4 bg-tutor rounded"> <i class="lni lni-calculator"></i>
                                <h6 class="font-weight-bold mb-0 pt-3">

                                    Mathematics

                                </h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-3 pb-4">

                        <a href="{{ url('/Tutor') }}" target="_blank">
                            <div class="p-4 bg-tutor rounded"> <i class="lni lni-library"></i>
                                <h6 class="font-weight-bold mb-0 pt-3">History</h6>
                            </div>
                        </a>

                    </div>
                    <div class="col-md-4 col-lg-3 pb-4">

                        <a href="{{ url('/Tutor') }}" target="_blank">

                            <div class="p-4 bg-tutor rounded"> <i class="lni lni-code"></i>
                                <h6 class="font-weight-bold mb-0 pt-3">Programming</h6>
                            </div>

                        </a>

                    </div>
                    <div class="col-md-4 col-lg-3 pb-4">

                        <a href="{{ url('/Tutor') }}" target="_blank">

                            <div class="p-4 bg-tutor rounded"> <i class="lni lni-layers"></i>
                                <h6 class="font-weight-bold mb-0 pt-3">Art</h6>
                            </div>

                        </a>

                    </div>
                    <div class="col-md-4 col-lg-3 pb-4">

                        <a href="{{ url('/Tutor') }}" target="_blank">

                            <div class="p-4 bg-tutor rounded"> <i class="lni lni-music"></i>
                                <h6 class="font-weight-bold mb-0 pt-3">Music</h6>
                            </div>

                        </a>
                    </div>
                    <div class="col-md-4 col-lg-3 pb-4">

                        <a href="{{ url('/Tutor') }}" target="_blank">

                            <div class="p-4 bg-tutor rounded"> <i class="lni lni-package"></i>
                                <h6 class="font-weight-bold mb-0 pt-3">Chemistry</h6>
                            </div>

                        </a>

                    </div>
                    <div class="col-md-4 col-lg-3 pb-4">

                        <a href="{{ url('/Tutor') }}" target="_blank">

                            <div class="p-4 bg-tutor rounded"> <i class="lni lni-users"></i>
                                <h6 class="font-weight-bold mb-0 pt-3">Languages</h6>
                            </div>

                        </a>

                    </div>
                    <div class="col-md-4 col-lg-3 pb-4">

                        <a href="{{ url('/Tutor') }}" target="_blank">


                            <div class="p-4 bg-tutor rounded"> <i class="lni lni-bulb"></i>
                                <h6 class="font-weight-bold mb-0 pt-3">Physics</h6>
                            </div>

                        </a>

                    </div>
                </div>
            </div>

            <!-- View More button -->
            <div class="col-12 text-center">
                <a href="{{ url('/CSC') }}" class="btn btn-success">View More &rarr; </a>
            </div>
        </div>
        <br><br>

        <hr style="width:100%; 
        height: 100%; 
        border-width: 1.1px; 
        text-align:center; 
        color: rgb(114, 113, 113);">

        <div class="position-relative">
            <div class="position-relative" style="z-index:1;">
                <div id="courses" class="container py-5">
                    <div class="row pt-5 justify-content-between text-center">

                        <h2 class="font-weight-bold ">Popular Courses
                            <hr style="border-width:2px;">
                        </h2>

                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="cards-wrapper">
                                        <div class="card">
                                            <img src={{ asset('css/home/images/programming.jpg') }} class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Programming</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="{{ url('/Tutor') }}" class="btn btn-success">Get Tutor</a>
                                            </div>
                                        </div>
                                        <div class="card d-none d-md-block">
                                            <img src={{ asset('css/home/images/web_development.png') }} class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Web Development</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="{{ url('/Tutor') }}" class="btn btn-success">Get Tutor</a>
                                            </div>
                                        </div>
                                        <div class="card d-none d-md-block">
                                            <img src="css/home/images/graphic_designing.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Graphic Designing</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="{{ url('/Tutor') }}" class="btn btn-success">Get Tutor</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="cards-wrapper">
                                        <div class="card">
                                            <img src={{ asset('css/home/images/machine-learning.png')}} class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Machine Learning</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="{{ url('/Tutor') }}" class="btn btn-success">Get Tutor</a>
                                            </div>
                                        </div>
                                        <div class="card d-none d-md-block">
                                            <img src={{ asset('css/home/images/blockchain.jpg') }} class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">BlockChain Development</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="{{ url('/Tutor') }}" class="btn btn-success">Get Tutor</a>
                                            </div>
                                        </div>
                                        <div class="card d-none d-md-block">
                                            <img src={{ asset('css/home/images/cryptocurrency.jpg') }} class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Cryptocurrency</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="{{ url('/Tutor') }}" class="btn btn-success">Get Tutor</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="cards-wrapper">
                                        <div class="card">
                                            <img src={{ asset('css/home/images/ai.jpg') }} class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Basics of Ai</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="{{ url('/Tutor') }}" class="btn btn-success">Get Tutor</a>
                                            </div>
                                        </div>
                                        <div class="card d-none d-md-block">
                                            <img src={{ asset('css/home/images/app-development.png') }} class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">App Development</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="{{ url('/Tutor') }}" class="btn btn-success">Get Tutor</a>
                                            </div>
                                        </div>
                                        <div class="card d-none d-md-block">
                                            <img src={{ asset('css/home/images/cloud-computing.jpg') }} class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Cloud Computing</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up the bulk of the card's content.</p>
                                                <a href="{{ url('/Tutor') }}" class="btn btn-success">Get Tutor</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="right-shape home"></div>
            <br>
            <div class="col-12 text-center">
                <a href="{{ url('/CSC') }}" class="btn btn-success">View More &rarr; </a>
            </div>
            <br><br>
        </div>

        <hr style="width:100%; 
        height: 100%; 
        border-width: 1.1px; 
        text-align:center; 
        color: rgb(114, 113, 113);">



        <div class="position-relative" style="z-index:1;">
            <div id="communities" class="container py-5">
                <div class="row pt-5 justify-content-between text-center">
                    <div class="col-12  d-flex justify-content-between;">
                        <h2 class="font-weight-bold ">
                            Communities
                            <!-- <br>
                                <p style="font-size: 18px; text-align: left; margin-top: 10px; color: rgb(211, 185, 37);"><em>Discussion Foram</em></p> -->
                            <hr style="border-width:2px; width: 100%;   ">
                        </h2>
                        <br>
                    </div>

                    <br><br>

                    <div class="col-md-4 col-lg-3 pb-4">
                        <div class="p-4 bg-tutor rounded">

                            <img src={{ asset('css/home/images/communities/programming2.jpg') }} class="card-img-top w-100" alt="...">
                            <h4>Programming</h4>

                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 pb-4">
                        <div class="p-4 bg-tutor rounded">
                            <img src='css/home/images/communities/graphic_designing2.jpg' class="card-img-top w-100" alt="...">
                            <h4>Graphic</h4>
                            <h4>Designing</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 pb-4">
                        <div class="p-4 bg-tutor rounded">
                            <img src={{ asset ('css/home/images/communities/blockchain.jpg') }} class="card-img-top w-100" alt="...">
                            <h4>BlockChain Development </h4>

                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 pb-4">
                        <div class="p-4 bg-tutor rounded">
                            <img src={{ asset ('css/home/images/communities/Ai.jpg') }} class="card-img-top w-100" alt="...">
                            <h4>Artificial <br> Intelligence</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 pb-4">
                        <div class="p-4 bg-tutor rounded">
                            <img src={{ asset ('css/home/images/communities/web-development2.jpg') }} class="card-img-top w-100" alt="...">
                            <h4>Web Development</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 pb-4">
                        <div class="p-4 bg-tutor rounded">
                            <img src={{ asset ('css/home/images/communities/cloud-computing2.jpg') }} class="card-img-top w-100" alt="...">
                            <h4>Cloud Computing</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 pb-4">
                        <div class="p-4 bg-tutor rounded">
                            <img src={{ asset ('css/home/images/communities/EnglishLanguage.jpg') }} class="card-img-top w-100" alt="...">
                            <h4>English Language</h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 pb-4">
                        <div class="p-4 bg-tutor rounded">
                            <img src={{ asset ('css/home/images/communities/app-development2.jpg') }} class="card-img-top w-100" alt="...">
                            <h4>App Developers </h4>
                        </div>
                    </div>

                </div>
            </div>

            <!-- View More button -->
            <div class="col-12 text-center">
                <a href="{{ url('/CSC') }}" class="btn btn-success">View More &rarr; </a>
            </div>
        </div>
        <br><br>

        <hr style="width:100%; 
        height: 100%; 
        border-width: 1.1px; 
        text-align:center; 
        color: rgb(114, 113, 113);">


        <div class="container py-5">
            <div class="row justify-content-between py-5">
                <div class="col-12 text-center">
                    <h2 class="font-weight-bold mb-5 pb-3">Our Process</h2>
                </div>
                <div class="col-12 d-lg-flex ">
                    <div class="text-center"> <img src='css/home/images/img-two.png' class="img-fluid mb-2">
                        <h5 class="font-weight-bold mb-4">Find a tutor in select category</h5>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at risus ac quam
                            vulputate congue</p>
                    </div>
                    <div class="text-center d-none d-lg-block"> <img src=css/home/images/arrow.png> </div>
                    <div class="text-center"> <img src="css/home/images/img-one.png" class="img-fluid mb-2">
                        <h5 class="font-weight-bold mb-4">Choose an online lesson or meeting</h5>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at risus ac quam
                            vulputate congue.</p>
                    </div>
                    <div class="text-center d-none d-lg-block"> <img src="css/home/images/arrow.png"> </div>
                    <div class="text-center"> <img src="css/home/images/img-three.png" class="img-fluid mb-2">
                        <h5 class="font-weight-bold mb-4">Get knowledge together with the tutor</h5>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at risus ac quam
                            vulputate congue.</p>
                    </div>
                </div>
                <div class="col-12 text-center">

                    <hr style="width:100%; 
                    height: 100%; 
                    border-width: 1.1px; 
                    text-align:center; 
                    color: rgb(114, 113, 113);">

                </div>
            </div>
        </div>

        <div class="position-relative">
            <div class="container pt-5 position-relative" style="z-index:1;">
                <div class="row pt-5">
                    <div class="col-lg-6 mb-5">
                        <h2 class="font-weight-bold mb-5">Find out why you choose us?</h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at risus ac quam
                            vulputate congue vitae et neque. Pellentesque non justo velit. Donec quis tempus mi.</p>
                    </div>
                    <div class="col-lg-6 mb-5">
                        <div class="row">
                            <div class="col-md-6 mb-5">
                                <div class="mb-5 nb"><i class="lni lni-invention rounded-circle bg-warning d-inline p-3"></i></div>
                                <h5 class="font-weight-bold mb-5">Individual approaches</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at risus ac
                                    quam vulputate congue vitae et neque.</p>
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="mb-5 nb"><i class="lni lni-consulting rounded-circle bg-warning d-inline p-3"></i></div>
                                <h5 class="font-weight-bold mb-5">Wide tutoring offer</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at risus ac
                                    quam vulputate congue vitae et neque.</p>
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="mb-5 nb"><i class="lni lni-users rounded-circle bg-warning d-inline p-3"></i></div>
                                <h5 class="font-weight-bold mb-5">Qualified staff</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at risus ac
                                    quam vulputate congue vitae et neque.</p>
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="mb-5 nb"><i class="lni lni-graph rounded-circle bg-warning d-inline p-3"></i></div>
                                <h5 class="font-weight-bold mb-5">E-learning</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at risus ac
                                    quam vulputate congue vitae et neque.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-shape home"></div>
        </div>


        <br><br>

        <div class="bg-light">
            <div class="container py-5">
                <div class="row pt-5">
                    <div class="col-md-6 col-lg-3 mb-5">
                        <h3 class="font-weight-bold mb-4">BestTutors</h3>
                        <p class="semi-bold"> The best way to learn from a Tutor. </p>
                        <div class="social-icons mt-4"> <a href="https://www.facebook.com/" target="_blank"><i class="lni lni-facebook-filled"></i></a> <a href="https://twitter.com/" target="_blank"><i class="lni lni-twitter-filled"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i class="lni lni-instagram-filled"></i></a>
                            <a href="https://github.com/" target="_blank"><i class="lni lni-github-original"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-5">
                        <h6 class="mb-4 font-weight-bold">Products</h6>
                        <ul class="list-unstyled bb m-0">
                            <li><a href="">For Individuals</a></li>
                            <li><a href="">For Schools</a></li>
                            <li><a href="">For Universities</a></li>
                            <li><a href="">For Businesses</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-5">
                        <h6 class="mb-4 font-weight-bold">Company</h6>
                        <ul class="list-unstyled bb m-0">
                            <li><a href="{{ url('/About') }}">About Us</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Press</a></li>
                            <li><a href="">Investors</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-5">
                        <h6 class="mb-4 font-weight-bold">Privacy & Terms</h6>
                        <ul class="list-unstyled bb m-0">
                            <li><a href="">Community</a></li>
                            <li><a href="">Privacy</a></li>
                            <li><a href="">Terms</a></li>
                            <li><a href="">Copyright</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3 bg-white">
            <div class="container">
                <p class="m-0 text-center small medium-500">Copyright &copy; Your Website Name 2020. Made by <a href="#">M.Nabeel Altaf</a></p>
            </div>
        </div>

    </div>


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