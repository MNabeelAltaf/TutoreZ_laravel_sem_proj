// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation')

        // Loop over them and prevent submission
        Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    }, false)
}())



//   open profile.html after validating

function profile1() {


    // const inputFeilds = document.querySelectorAll("input");

    // const validInputs = Array.from(inputFeilds).filter(input => input.value != "");

    // if (validInputs == true)
    // {

    //     alert('Your Request has been Sended Sucessfully!');
    // }
    // else{
    //     alert('Please Fill all Fields');
    //     return;
    // }


    alert("Your Request has been submitted sucessfully!");

    window.open('profile1.php');



}