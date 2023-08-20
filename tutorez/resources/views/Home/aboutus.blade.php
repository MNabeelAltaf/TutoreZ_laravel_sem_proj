<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Css file -->
    <link rel="stylesheet" href={{ asset('css/aboutus/aboutus.css')  }}>
    <link rel="stylesheet" href={{ asset('css/aboutus/navBar.css') }}>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>



@include('Home.navBar');

    <!-- <nav>
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
                        </ul>
                    </li>
                    <li><a href="aboutus.php">ABOUT US</a></li>
                    <li><a href="contactus.php" target="_blank">CONTACT US</a></li>
                    <span class="ml-lg-5">
                        
                    <buton class="btn btn-success bg-success" onclick="register()">Join</buton> 
                        <a class="btn btn-success bg-success" href="register.php">Join</a>

                    </span> <br>
                    <span class="ml-lg-5">
                        <a class="btn btn-success bg-success" href="login.php">Login</a>

                    </span>
                </ul>
            </div>

            
            <div class="search-box">
                <i class='bx bx-search'></i>
                <div class="input-box">
                    <input type="text" placeholder="Search...">
                </div>
            </div>
        </div>
    </nav> -->
    <br>









    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About US</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src={{  asset("css/aboutus/images/img1.svg") }} alt="...">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2009-2011</h4>
                            <h4 class="subheading">Our Humble Beginnings</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src={{  asset("css/aboutus/images/img2.svg") }} alt="..."></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>March 2011</h4>
                            <h4 class="subheading">First Phase</h4>
                            <p><i>Online Teaching</i></p>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src={{ asset("css/aboutus/images/img3.svg") }} alt="..."></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>December 2015</h4>
                            <h4 class="subheading">Second Phase</h4>
                            <p><i>Physical Teaching</i></p>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src={{ asset("css/aboutus/images/img4.svg") }} alt="..."></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>July 2020</h4>
                            <h4 class="subheading">Phase Two Expansion</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br>
                            Of Our
                            <br>
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>









    <!-- Optional JavaScript -->
    <script src= {{ asset("js/aboutus/main.js") }}></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>