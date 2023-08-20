<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Css files -->

    <link rel="stylesheet" href="css/teachingRequestForm/teachingRequestForm.css">

    <!-- Js files -->
    <script src="js/teachingRequestForm/teachingRequestForm.js"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>



@include('Home.navBar');


    <div class="container">

        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{ asset('css/teachingRequestForm/images/tutorPicture.png') }}" alt="" width="200" height="200">
            <h2>Teaching Request Form</h2>
            <p class="lead">
                Make a request to your desired Tutor for teaching you according to your demand.
            </p>
        </div>

        <div class="row">


        

        <div class="col-md-8 order-md-1">
        @include('Alert.messages')
                <h4 class="mb-3">Student Details</h4>

                <form class="needs-validation" method="POST" action="{{ url('/DBTeachingRequests/store') }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input name="fname" type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback"> Valid first name is required. </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input name="lname" type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                            <div class="invalid-feedback"> Valid last name is required. </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="username">Student Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input name="email" type="email" class="form-control" id="username" placeholder="Enter Your Email i.e. you@example.com" required="">
                            <div class="invalid-feedback" style="width: 100%;"> Your email is required. </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Student Contact Number</label>
                        <input name="number" type="number" class="form-control" id="email" placeholder="033xxxxxxxx" required>
                        <div class="invalid-feedback"> Please enter contact number. </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input name="address" type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                        <div class="invalid-feedback"> Please enter your complete address. </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="City">City</label>
                            <select name="city" class="custom-select d-block w-100" id="City" required="">
                                <option value="">Choose...</option>
                                <option>Rawalpindi</option>
                                <option>Islamabad</option>
                                <option>Peshawar</option>
                                <option>Lahore</option>
                                <option>Multan</option>
                                <option>Bahalphur</option>
                            </select>
                            <div class="invalid-feedback"> Please select a valid City. </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">Enter Course/Subject to Study</label>
                            <input name="course" type="text" class="form-control" id="course" placeholder="i.e. Physics" required>



                            <!-- <select class="custom-select d-block w-100" id="state" required="">
                                <option value="">Choose...</option>
                                <option>California</option>
                            </select> -->

                            <div class="invalid-feedback"> Please Select Course/Subject to Study. </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="">Teaching Hours</label>
                            <input name="hours" type="number" class="form-control" id="hours" placeholder="i.e. 2" required="">
                            <div class="invalid-feedback"> Teaching Hours required. </div>
                        </div>
                    </div>

                    <br>

                    <h4 class="mb-3">Tutor Details</h4>

                    <div class="mb-3">
                        <label for="address">Tutor ID</label>
                        <input name="Tid" type="text" class="form-control" id="address" placeholder="Enter Tutor ID i.e. 2341" required="">
                        <div class="invalid-feedback"> Please enter Tutor ID. </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Tutor Name</label>
                        <input name="Tname" type="text" class="form-control" id="address" placeholder="Enter Tutor Name" required="">
                        <div class="invalid-feedback"> Please enter Tutor Name. </div>
                    </div>


                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Enter Short Description
                        </label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>




                    <hr class="mb-4">
                    <h4 class="mb-3">Payment Method</h4>
                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" required="" value="Credit Card">
                            <label class="custom-control-label" for="credit">Credit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="" value="Debit Card">
                            <label class="custom-control-label" for="debit">Debit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="EasyPaisa" name="paymentMethod" type="radio" class="custom-control-input" required="" value="Easy Paisa">
                            <label class="custom-control-label" for="EasyPaisa">EasyPaisa</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="Jazzcash" name="paymentMethod" type="radio" class="custom-control-input" required="" value="Jazz Cash">
                            <label class="custom-control-label" for="Jazzcash">Jazzcash</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="onDelivery" name="paymentMethod" type="radio" class="custom-control-input" required="" value="Payment on Delivery">
                            <label class="custom-control-label" for="onDelivery">Payment on Delivery</label>
                        </div>
                    </div>



                    <h4 class="mb-3">Teaching Mode</h4>
                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="physical" name="teachingMode" type="radio" class="custom-control-input" required="" value="Physical">
                            <label class="custom-control-label" for="physical">Physical</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input id="online" name="teachingMode" type="radio" class="custom-control-input" required="" value="Online">
                            <label class="custom-control-label" for="online">Online</label>
                        </div>
                    </div>



                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="TermsAndCondition" required="">
                        <label class="form-check-label" for="TermsAndCondition">Agree to <a href="#"> Terms and
                                Condition </a></label>
                    </div>

                    <hr class="mb-4">
                    <button name="submit" class="btn btn-primary btn-lg btn-block" type="submit" value="insert">Send Teaching
                        Request
                    </button>
                    <!-- <a href="profile1.php" class="btn btn-primary btn-lg btn-block" type="submit">
                            Send Teaching Request
                        </a> -->
                </form>
            </div>
        </div>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2017-2019 TutoreZ.com</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>