<!doctype html>
<html lang="en">

<head>
    <title>Tutors</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Css file -->
    <link rel="stylesheet" href="css/tutorPage/tutorPage.css">
    <link rel="stylesheet" href="css/tutorPage/navBar.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Boxicons CDN Link  for nav bar icons when responsive-->
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
    <br>






    <header>
        <div class="box">
            <br>
            <i class="txt">
                <h1 style="text-decoration:underline;" class="">Tutors</h1> <br>
                Teaching is <em style="color: rgb(219, 40, 40); font-size: 40px;"><b>Not</b></em> a job.<br>
                It's a <b style="color:rgb(23, 71, 4)  ; text-decoration:underline; font-size: 40px;">Lifestyle.</b>
                <br> It <b style="color:rgb(3, 54, 3); text-decoration:underline; font-size: 40px;">Permeates</b> your
                whole life.
            </i>
        </div>
    </header>



    <br>

    <!-- select area, teaching mode and search container -->

    <div class="container responsive--">

        <div class="row bg-dark ">

            <div class="col-md ">

                <input class="form-control" type="list" list="mode" placeholder="Select Teaching Mode" required>
                <datalist id="mode">
                    <option value="Physical"></option>
                    <option value="Online"></option>
                </datalist>


            </div>

            <div class="col-md ">

                <input class="form-control" type="list" list="city" placeholder="Select City" required>
                <datalist id="city">
                    <option value="Rawalpindi"></option>
                    <option value="Islamabad"></option>
                    <option value="Lahore"></option>
                    <option value="Chiniot"></option>
                    <option value="Faisalabad"></option>
                    <option value="Gujranwala"></option>
                    <option value="Gujrat"></option>
                    <option value="Hafizabad"></option>
                    <option value="Swat"></option>
                    <option value="Tank"></option>
                    <option value="Shangla"></option>
                    <option value="Swabi"></option>
                    <option value="Mardan"></option>
                    <option value="Lower Chitral"></option>
                    <option value="Lower Dir"></option>
                    <option value="Buner"></option>
                    <option value="Bajaur"></option>
                    <option value="Abbottabad"></option>
                    <option value="Upper Dir"></option>
                </datalist>


            </div>

            <div class="col-md ">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" required>
                    &nbsp;
                    <button type="button" class="btn btn-primary">Search</button>
                </form>

            </div>
        </div>

    </div>


    <br>


    <!-- tutors card container -->

    <div class="container">


        <!-- row 1 -->

        <div class="row">

            <!-- col 1 -->
            <div class="col-md-2 "></div>


            <!-- col 2 -->
            <div class="col-md-8">
                <div class="card mb-8" style="max-width: 100%">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="css/tutorPage/img/tutorPic1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Mr. Smith</h5>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                    <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>

                                <label for="">Tutor ID: 5779</label>
                                <p class="card-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                    </svg>
                                    &nbsp;
                                    <label>Physics</label>
                                </p>


                                <p class="card-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                        <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                    </svg>
                                    &nbsp;
                                    <label>10</label> <span> dollar per hour</span>
                                </p>

                                <p class="card-text"><small class="text-muted">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                        </svg>

                                        <label>123 Main Street, New York, NY 10030</label>

                                    </small>
                                </p>


                                <p class="card-text"><small class="text-muted">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z" />
                                        </svg>

                                        &starf; &starf; &starf; &star;&star;


                                    </small>
                                </p>


                                <!-- <button class="btn btn-primary" onclick="requestForm()">Send Teaching Request
                                    &RightArrow;
                                </button> -->

                                <a class="btn btn-primary" href="{{ url('/DBTeachingRequests/create') }}">Send Teaching Request
                                    &RightArrow;
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- col 3 -->
            <div class="col-md-2 "></div>

        </div>


        <br>



        <!-- row 2  -->
        <div class="row">

            <!-- col 1  -->
            <div class="col-md-2 "></div>
            <!-- col 2 -->
            <div class="col-md-8">
                <div class="card mb-8" style="max-width: 100%">
                    <div class="row g-0">
                        <div class="col-md-6 ">
                            <img src="css/tutorPage/img/tutorPic2.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Johnson</h5>



                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                    <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>

                                <label for="">Tutor ID: 3473</label>

                                <p class="card-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                    </svg>
                                    &nbsp;
                                    <label>Machine Learning</label>
                                </p>



                                <p class="card-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                        <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                    </svg>
                                    &nbsp;
                                    <label>45</label> <span> dollar per hour</span>
                                </p>


                                <p class="card-text"><small class="text-muted">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                        </svg>

                                        <label>123 Main Street, New York, NY 10030</label>

                                    </small>
                                </p>


                                <p class="card-text"><small class="text-muted">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z" />
                                        </svg>

                                        &starf; &starf; &starf; &starf;&starf;


                                    </small>
                                </p>



                                <!-- <button class="btn btn-primary" onclick="requestForm()">Send Teaching Request
                                    &rightarrow; </button> -->
                                <a class="btn btn-primary" href="{{ url('/DBTeachingRequests/create') }}">Send Teaching Request
                                    &RightArrow;
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col 3 -->
            <div class="col-md-2 "></div>

        </div>


        <br>

        <!-- row 3 -->
        <div class="row">

            <!-- col 1 -->
            <div class="col-md-2 "></div>

            <!-- col 2 -->
            <div class="col-md-8">
                <div class="card mb-8" style="max-width: 100%">
                    <div class="row g-0">
                        <div class="col-md-6 ">
                            <img src="css/tutorPage/img/tutorPic3.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Peterson</h5>



                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                    <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>

                                <label for="">Tutor ID: 9632</label>

                                <p class="card-text">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                    </svg>

                                    <label> Basics of Artificial Intelligence </label>
                                </p>



                                <p class="card-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                        <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                    </svg>
                                    &nbsp;
                                    <label>35</label> <span> dollar per hour</span>
                                </p>

                                <p class="card-text"><small class="text-muted">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                        </svg>
                                        <label>123 Main Street, New York, NY 10030</label>

                                    </small>
                                </p>


                                <p class="card-text"><small class="text-muted">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z" />
                                        </svg>

                                        &starf; &starf; &starf; &starf;&star;


                                    </small>
                                </p>




                                <p class="card-text">

                                </p>

                                <!-- <button class="btn btn-primary" onclick="requestForm()">Send Teaching Request
                                    &RightArrow; </button> -->
                                <a class="btn btn-primary" href="{{ url('/DBTeachingRequests/create') }}">Send Teaching Request
                                    &RightArrow;
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- col 3 -->
            <div class="col-md-2 "></div>

        </div>

    </div>


    <br>

    <footer class="text-center text-white" style="background-color: #f1f1f1;">

        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="#">All RIghts Reserved</a>
        </div>
        <!-- Copyright -->
    </footer>



    <!-- Optional JavaScript -->
    <script src="js/tutorPage/tutorPage.js"></script>
    <script src="main.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>