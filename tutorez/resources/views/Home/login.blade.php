<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/login/login.css">


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <title>Login</title>
</head>

<body>



    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form name="loginForm" method="POST" action="connection.php">
                    <div class="input-field">
                        <input name="email" type="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input name="password" type="password" value="" class="password"
                            placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <br>
                    <div class="container ">

                        <div class="form-check d-flex justify-content-center">
                            &nbsp;
                            <label class="form-check-label">
                                <label>Login as:</label> &nbsp; &nbsp;
                                <input  id="tutor" name="category" type="radio" class="form-check-input" value="tutor"
                                    required>
                                Tutor
                            </label>
                            <label>
                                &nbsp; &nbsp;
                                <input id="student" name="category" type="radio" class="form-check-input"
                                    value="student" required>
                                Student
                            </label>
                        </div>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>

                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button" 
                    style="background-color:#137beb;
                    display: flex;
                    justify-content:center;
                    align-content:center;
                    font-size:30px;" >               


                        <button name="login" type="submit"
                        style="background-color:#137beb;
                        color:white;
                        border:none;
                        font-size:30px;">
                            Login
                        </button>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="register.php" class="text signup-link">Signup now</a>
                    </span>
                </div>
            </div>

        </div>

        <script src="js/login/login.js"></script>
        <!-- jQuery  -->
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