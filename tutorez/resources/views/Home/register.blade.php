<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>

    <title>Registration</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/registerFiles/register.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



    


    <style type="text/css">
        #contain {
            display: none;
        }
    </style>



</head>

<body>
    <div class="container">

    @include('Alert.message2')

        <header>Registration</header>

        <form action="{{ url('DBTutorRegistration') }}" method="post">
           @csrf
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input name="name" type="text" placeholder="i.e. John Elias" value="" required>
                        </div>


                        <div class="input-field">
                            <label>Email</label>
                            <input name="email" type="text" placeholder="i.e. johnElias@gmail.com" value="" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input name="DOB" type="date" placeholder="i.e. Enter birth date" required>
                        </div>


                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input name="mobileNumber" type="number" placeholder="i.e. 03xxxxxxxxx" value="" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field ">
                            <label>Martial Status</label>

                            <select name="martialStatus" required>
                                <option disabled selected>Select Martial Status</option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Divorce</option>
                            </select>

                        </div>

                    </div>
                </div>


                <div class="details address">
                    <span class="title">Address Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Address</label>
                            <input name="address" type="text" placeholder="i.e. House No xxx Street# xx" value="" required>
                        </div>

                        <div class="input-field">
                            <label>Nationality</label>
                            <input name="nationality" type="text" placeholder="i.e. Pakistani" value="" required>
                        </div>

                        <div class="input-field">
                            <label>State</label>
                            <input name="state" type="text" placeholder="i.e. Pakistan" value="" required>
                        </div>

                        <div class="input-field">
                            <label class="form-label">Province</label>

                            <input name="province" type="list" list="time_datalist_0" placeholder="Select Provice" required>
                            <datalist id="time_datalist_0">
                                <option value="Punjab"></option>
                                <option value="Sindh"></option>
                                <option value="KPK"></option>
                                <option value="Balochistan"></option>
                                <option value="Gilgit-Baltistan"></option>
                                <option value="Azad Jammu and Kashmir"></option>
                                <option value="Islamabad Capital Territory"></option>
                            </datalist>

                        </div>

                        <div class="input-field">



                            <label class="form-label">District</label>

                            <input name="district" type="list" list="time_datalist_1" placeholder="Select District" required>
                            <datalist id="time_datalist_1">
                                <option value="Rawalpindi"></option>
                                <option value="Attock"></option>
                                <option value="Bahawalpur"></option>
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

                            </datalist>
                        </div>

                        <div class="input-field">


                            <label class="form-label">City</label>
                            <input name="city" type="list" list="time_datalist_2" placeholder="Select City" required>
                            <datalist id="time_datalist_2">
                                <option value="Rawalpindi"></option>
                                <option value="Attock"></option>
                                <option value="Bahawalpur"></option>
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
                                <option value="Upper Chitral"></option>
                                <option value="Jhang"></option>
                                <option value="Kasur"></option>
                                <option value="Jhelum"></option>
                                <option value="Layyah"></option>
                                <option value="Multan"></option>
                                <option value="Okara"></option>
                                <option value="Sahiwal"></option>
                                <option value="Vehari"></option>
                                <option value="Sialkot"></option>
                                <option value="Dadu"></option>
                                <option value="Jamshoro"></option>
                                <option value="DI Khan"></option>
                                <option value="Jacobabad"></option>
                            </datalist>


                        </div>

                    </div>
                </div>

                <button id="nxtbtn" class="nextBtn">
                    <span class="btnText">Next</span>
                    <i class="uil uil-navigator"></i>
                </button>

            </div>

            <div class="form second">
                <div class="details family">
                    <span class="title">Family Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Father Name</label>
                            <input name="fatherName" type="text" placeholder="Enter father name" value="" required>
                        </div>

                        <div class="input-field">
                            <label>Mother Name</label>
                            <input name="motherName" type="text" placeholder="Enter mother name" value="" required>
                        </div>

                        <div class="input-field">
                            <label>Father's Occupation </label>
                            <input name="fatherOccupation" type="text" placeholder="i.e. Bussinessman" value="" required>
                        </div>

                        <!-- <div class="input-field">

                        </div> -->

                        <!-- <div class="input-field">

                        </div> -->

                        <div class="input-field">

                        </div>
                    </div>


                    <span class="title">Bank Account Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Bank Name</label>
                            <input name="bankName" type="list" list="time_datalist_4" placeholder="i.e. Bank Al Habib " required>
                            <datalist id="time_datalist_4">
                                <option value="HBL Bank"></option>
                                <option value="Bank Al Habib"></option>
                                <option value="UBL Bank"></option>
                                <option value="Alfalah Bank"></option>
                                <option value="Askari Bank"></option>
                                <option value="Allied Bank"></option>
                                <option value="Faisal Bank"></option>
                                <option value="Easypaisa Micro-Finance Bank"></option>
                                <option value="Meezan Bank"></option>
                                <option value="Dubai Islamic Bank"></option>
                                <option value="JazzCash Micro-Finance Bank"></option>

                            </datalist>
                        </div>

                        <div class="input-field">
                            <label>IBAN Number</label>
                            <input name="iban" type="number" placeholder="xxxx-xxxxx-xxxx" value="" required>
                        </div>

                        <div class="input-field">
                            <label>Registered CNIC </label>
                            <input name="cnic" type="number" placeholder="xxxxx-xxxxxxx-x" value="" required>
                        </div>

                        <div class="title">Account Security</div>

                        <div class="input-field">
                            <label>Password </label>
                            <input id="pass" name="password" type="password" placeholder="Password" value="" required>
                        </div>
                    </div>





                    <div class="form-check d-flex justify-content-center">
                        &nbsp;
                        <label class="form-check-label">
                            <label>Join as:</label> &nbsp; &nbsp;

                            <?php


                            echo "
                                <input  name='category' type='radio' class='form-check-input' value='Tutor'
                                onclick = 'show()'   required> Tutor ";

                                ?>
          

                        </label>
                        <label>
                            &nbsp; &nbsp;
                            <?php
                            echo 
                            '
                            <input id="student" name="category" type="radio" class="form-check-input" value="Student"
                                onclick="hide()" required>
                            Student 
                            ';
                            ?>




                        </label>
                    </div>



                    <div id="contain">



                        <label class="form-check-label">Select Main Course to Teach</label>


                        &nbsp; &nbsp;


                        <input name="courses" id="Maincourses" type="list" list="time_datalist_10" placeholder="Select Main Subject/Course">
                        <datalist id="time_datalist_10">
                            <option value="Physic"></option>
                            <option value="Mathematics"></option>
                            <option value="English"></option>
                            <option value="Chemistry"></option>
                            <option value="Biology"></option>
                            <option value="Computer Science"></option>
                            <option value="Islamaic Studies"></option>
                            <option value="Pakistan Studies"></option>
                            <option value="General Knowledge"></option>
                            <option value="Graphic Designing"></option>
                            <option value="App Development"></option>
                            <option value="Software Engineering"></option>
                            <option value="Machine Learning"></option>
                            <option value="Basics of Ai"></option>
                            <option value="BlockChain"></option>
                        </datalist>

                        &nbsp;





                        <label class="form-check-label">Select Teaching Mode</label>

                        <!-- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -->

                        &nbsp; &nbsp;

                        <input name="teachingMode" id="teachingMode" type="list" list="time_datalist_12" placeholder="Select teaching mode">
                        <datalist id="time_datalist_12">
                            <option value="Physical"></option>
                            <option value="Online"></option>
                            <option value="Both"></option>
                        </datalist>



                        <label class="form-check-label">Choose teaching per hour rate (in dollar)<label>

                                &nbsp; &nbsp; &nbsp; &nbsp;
                                <input name="rate" id="Maincourses" type="number" placeholder="i.e. 500">
                                <br>


                    </div>


                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>

                        <!-- <button style="text-decoration:none; color:white;" name="signup" class="sumbit">
                            Signup
                        </button> -->

                        <button name="submit" class="btn btn-primary btn-lg btn-block" type="submit" value="insert">Signup
                        </button>




                    </div>
                </div>


            </div>
        </form>
    </div>

    <!-- Js file -->
    <script src="js/registerFiles/register.js"></script>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



</body>

</html>