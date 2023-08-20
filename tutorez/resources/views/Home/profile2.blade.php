<!doctype html>
<html lang="en">

<head>
  <title>Tutor Profile</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- external css file -->
  <link rel="stylesheet" href={{ asset ('css/profile2/profile2.css') }}>

  <!-- JS file -->

  <script src="css/profile2/profile2.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



  <style>
    #ShowPending {
      display: none;
    }

    #ShowApproved {
      display: none;
    }
  </style>


</head>

<body>





  <div class="container">
    <div class="main-body">

      <!-- Breadcrumb -->
      <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/Home') }}">Home</a></li>
          <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li> -->
          <li class="breadcrumb-item active" aria-current="page">Tutor Profile</li>
        </ol>
      </nav>
      <!-- /Breadcrumb -->

      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                <div class="mt-3">
                <!-- @foreach( $requests as $r)  
                <h4>{{ $r['TName'] }}</h4>
                @endforeach -->
                  <span>Join as:</span>
                  <p class="text-secondary mb-1">Tutor</p>

                </div>
              </div>
            </div>
          </div>

          <!--  -->
        </div>

        <div class="col-md-8">

          <!-- Personal infor -->
          <!-- <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  <p>Kenneth Valdez</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  fip@jukmuh.al
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  (239) 816-9029
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Mobile</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  (320) 380-4539
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  Bay Area, San Francisco, CA
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-12">
                  <a class="btn btn-info " href="">Edit</a>
                </div>
              </div>
            </div>
          </div> -->



          <div class="row gutters-sm">

            <div class="col-sm-6 mb-3 ">
              <?php
              echo '
              <button id="pending" class="pendingRequest">Pending Requests</button>
              
              <script>
              var btn = document.getElementById("pending");
              btn.addEventListener("click", function() {
               $("#ShowPending").show();
               $("#pending").prop("disable",true);
              }, false);
              </script>
              ';
              ?>
            </div>


            <div class="col-sm-6 mb-3 ">
              <?php
              echo '
            <button id="approved" class="approvedRequest">Approved Requests</button>
            <script>
            var btn2 = document.getElementById("approved");
              btn2.addEventListener("click",function(){
                $("#ShowApproved").show();
                $("approved").prop("disable",true);
              }, false);


            </script>
            
            ';
              ?>
            </div>
          </div>




          <!-- table row to be added when pending / approved request btn clicked -->
          <div id="ShowPending" class="row ">

            <h4>Pending Requests</h4>

            <table class="table table-bordered table-striped table-hover text-center">

              <thead>
                <tr>
                  <th scope="col">Request #</th>
                  <th scope="col">Student Name</th>
                  <th scope="col">Student Email</th>
                  <th scope="col">Course/Subject Name</th>
                  <th scope="col">Address</th>
                  <th scope="col">Teaching Mode</th>
                  <th scope="col">Teaching Hours</th>
                  <th scope="col">Description</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>

              <tbody>


              @foreach($requests as $r)

                <tr>
                  <th scope="row"> {{ $r['id'] }} </th>
                  <td> {{ $r['SFirstName'] }} {{ $r['SLastName'] }} </td>
                  <td> {{ $r['SEmail'] }} </td>
                  <td> {{ $r['SCourse'] }} </td>
                  <td> {{ $r['SAddress'] }}  </td>
                  <td> {{ $r['TeachingMode'] }} </td>
                  <td> {{ $r['STeachingHour'] }} </td>
                  <td> {{ $r['Description'] }} </td>
                  <td><input type="button" class="btn btn-primary" value="Accept">
                    <input type="button" class="btn btn-danger" value="Delete">
                  </td>


                </tr>

              @endforeach


              </tbody>
            </table>
          </div>

        </div>

        <br>

        <div id="ShowApproved" class="row gutters-sm ">

          <h4>Approved Requests</h4>

          <table class="table">

            <thead>
              <tr>
                <th scope="col">Request #</th>
                <th scope="col">Student Name</th>
                <th scope="col">Student Email</th>
                <th scope="col">Course/Subject Name</th>
                <th scope="col">Address</th>
                <th scope="col">Teaching Mode</th>
                <th scope="col">Teaching Hours</th>
                <th scope="col">Description</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th scope="row"> </th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

              </tr>
            </tbody>
          </table>
        </div>


      </div>
    </div>

  </div>
  </div>






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
  <script src="profile2/profile2.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>