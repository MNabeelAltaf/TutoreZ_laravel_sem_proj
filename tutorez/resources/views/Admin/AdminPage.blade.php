<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TutoreZ Admin Panel</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ url('/css/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ url('/css/assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ url('/css/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
  <link rel="stylesheet" href="{{ url('/css/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
  <link rel="stylesheet" href=" {{ url('/css/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ url('/css/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href='{{ url("css/assets/css/style.css") }}'>

  <link rel="stylesheet" href='{{ url("/css/adminCss/Styling.css") }}'>

  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{ url('/css/assets/images/favicon.png') }}" />

  <!-- JS -->
  <script src="{{url('/css/adminJs/script.js') }}"></script>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


  <div class="container-scroller">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo bg-secondary" href="#">
          TutoreZ
        </a>
      </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <img class="img-xs rounded-circle " src="{{ url('/css/assets/images/faces/face15.jpg')}}" alt="">
                <span class="count bg-success"></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal">M.Nabeel ALtaf</h5>
                <span>Admin</span>
              </div>
            </div>

          </div>
        </li>
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="#">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">Tutors Enrolled</span>
            <i class="menu-arrow"></i>
          </a>

        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="#">
            <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title">Students Joined</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="#">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Courses</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="#">
            <span class="menu-icon">
              <i class="mdi mdi-file-document"></i>
            </span>
            <span class="menu-title">Subjects</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="#">
            <span class="menu-icon">
              <i class="mdi mdi-contacts"></i>
            </span>
            <span class="menu-title">Communities</span>
          </a>
        </li>


      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav w-100">
            <li class="nav-item w-100">

            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">


            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                <div class="navbar-profile">
                  <img class="img-xs rounded-circle" src="{{ asset('/css/assets/images/faces/face15.jpg') }}" alt="">
                  <p class="mb-0 d-none d-sm-block navbar-profile-name">M.Nabeel Altaf</p>
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                <h6 class="p-3 mb-0">Profile</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">
                      <button class="btn btn-danger" onclick="logout()"> Log out </button>
                    </p>
                  </div>
                </a>

              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card corona-gradient-card">
                <div class="card-body py-0 px-0 px-sm-3">

                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h5 class="mb-0">Tutors enrolled</h5> &nbsp;
                        <h3 class="text">142</h3>
                      </div>
                    </div>
                    <div class="col-3">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h5 class="mb-0">Students Joined</h5> &nbsp;
                        <h3 class="text">341</h3>
                      </div>
                    </div>
                    <div class="col-3">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h5 class="mb-0">Teaching Request Approved</h5>
                        &nbsp;
                        <h3 class="mb-0">542</h3>

                      </div>
                    </div>
                    <div class="col-3">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h5 class="mb-0">Teaching Request Rejected</h5>
                        <h3 class="mb-0">230</h3>
                      </div>
                    </div>
                    <div class="col-3">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Summary</h4>
                  <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                    <div class="text-md-center text-xl-left">
                      <h6 class="mb-1">Online Tutors Enrolled</h6>
                    </div>
                    <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                      <h6 class="font-weight-bold mb-0">100</h6>
                    </div>
                  </div>

                  <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                    <div class="text-md-center text-xl-left">
                      <h6 class="mb-1">Physical Tutors Enrolled</h6>
                    </div>
                    <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                      <h6 class="font-weight-bold mb-0">42</h6>
                    </div>
                  </div>
                  <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                    <div class="text-md-center text-xl-left">
                      <h6 class="mb-1">Students Enrolled</h6>
                    </div>
                    <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                      <h6 class="font-weight-bold mb-0">341</h6>
                    </div>
                  </div>

                  <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                    <div class="text-md-center text-xl-left">
                      <h6 class="mb-1">Total Communities</h6>
                    </div>
                    <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                      <h6 class="font-weight-bold mb-0">31</h6>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-row justify-content-between">
                    <h4 class="card-title mb-1">Top Courses/Subjects</h4>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="preview-list">
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-primary">
                              <i class="mdi mdi-file-document"></i>
                            </div>
                          </div>
                          <div class="preview-item-content d-sm-flex flex-grow">
                            <div class="flex-grow">
                              <h6 class="preview-subject">Machine Learning</h6>
                            </div>

                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                              <i class="mdi mdi-cloud-download"></i>
                            </div>
                          </div>
                          <div class="preview-item-content d-sm-flex flex-grow">
                            <div class="flex-grow">
                              <h6 class="preview-subject">Wordpress Development</h6>
                            </div>

                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-info">
                              <i class="mdi mdi-clock"></i>
                            </div>
                          </div>
                          <div class="preview-item-content d-sm-flex flex-grow">
                            <div class="flex-grow">
                              <h6 class="preview-subject">Artificial Intelligence</h6>
                            </div>

                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-danger">
                              <i class="mdi mdi-file-document"></i>
                            </div>
                          </div>
                          <div class="preview-item-content d-sm-flex flex-grow">
                            <div class="flex-grow">
                              <h6 class="preview-subject">Physics</h6>
                            </div>

                          </div>
                        </div>
                        <div class="preview-item">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-warning">
                              <i class="mdi mdi-chart-pie"></i>
                            </div>
                          </div>
                          <div class="preview-item-content d-sm-flex flex-grow">
                            <div class="flex-grow">
                              <h6 class="preview-subject">UI/UX Design</h6>
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
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Admin Panel <a href="#" target="_blank"></a> from</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


  <!-- plugins:js -->
  <script src="{{ asset('/css/assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('/css/assets/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('/css/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
  <script src="{{asset('/css/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
  <script src="{{ asset('/css/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <script src="{{ asset('/css/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('/css/assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('/css/assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('/css/assets/js/misc.js') }}"></script>
  <script src="{{ asset('/css/assets/js/settings.js') }}"></script>
  <script src="{{ asset('/css/assets/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="{{ asset('/css/assets/js/dashboard.js') }}"></script>
  <!-- End custom js for this page -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>