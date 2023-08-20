const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");


nextBtn.addEventListener("click", ()=> {
    allInput.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
        }
    })
})

backBtn.addEventListener("click", () => form.classList.remove('secActive'));


// open login after registered

function openlogin()
{



    // validating registered form

    alert('Sucessfully registered!');
    window.open('login.php');
    window.close();
}



//  validating pass must be match with confirm password


// function match_password()
// {
//     var pass = document.getElementById('#pass').value;
//     var c_pass = document.querySelector('#c_pass').value;
//     console.log(pass, c_pass);

//     if(pass != c_pass)
//     {
//         alert("Password must be match");
//         return;
//     }

// }



function moreDetails()
{

   var courses = 
      '<input name="courses" id="Maincourses" type="list" list="time_datalist_10" placeholder="Select Main Subject/Course" required>'+
      ' <datalist id="time_datalist_10">' +
      ' <option value="Physic"></option> '+
      ' <option value="Mathematics"></option>'+
      ' <option value="English"></option>'+
      ' <option value="Chemistry"></option>'+
      ' <option value="Biology"></option>'+
      ' <option value="Computer Science"></option>'+
      ' <option value="Islamaic Studies"></option>'+
      ' <option value="Pakistan Studies"></option>'+
      ' <option value="General Knowledge"></option>'+
      ' <option value="Graphic Designing"></option>'+
      ' <option value="App Development"></option>'+
      ' <option value="Software Engineering"></option>'+
      '<option value="Machine Learning"></option>'+
      ' <option value="Basics of Ai"></option>'+
      ' <option value="BlockChain"></option>'+
      '  </datalist>';


     var education = '<input name="education" id="educationLevel" type="list" list="time_datalist_11" placeholder="Select Education Level" required>'+
     '<datalist id="time_datalist_11">'+
     ' <option value="Phd"></option> '+
     ' <option value="Masters"></option> '+
     ' <option value="Bachelors"></option> '+
     ' <option value="Intermediate"></option> '+
     ' <option value="Matriculation"></option> '+
     ' <option value="Diploma"></option> '+
     ' <option value="Course"></option> '+
     
     '  </datalist>';



     var teachingMode = '<input name="teachingMode" id="teachingMode" type="list" list="time_datalist_12" placeholder="Select teaching mode" required>'+
     '<datalist id="time_datalist_12">'+
     '<option value="Physical"></option>'+
     '<option value="Online"></option>'+
     '<option value="Both"></option>'+
     '</datalist>';
   


$(document).ready(function() {
  
    $('#contain').append('<label  class="form-check-label">Select One Subject/Course to Teach <label>');
    $("#contain").append('<br>');
    $('#contain').append(courses);

    $('#contain').append('<label class="form-check-label">Choose teaching per hour rate (in dollar)</label>');
    $("#contain").append('<br>');
    $('#contain').append('<input name = "rate" id="Maincourses" type="number" placeholder = "i.e. 500" required>')

    // $('#contain').append('<label class="form-check-label">Select Education level</label>');
    // $("#contain").append('<br>');
    // $('#contain').append(education);

    $('#contain').append('<label class="form-check-label">Select Teaching Mode</label>');
    $("#contain").append('<br>');
    $('#contain').append(teachingMode);

    // $('#contain').append('<label class="form-check-label">Description about yourself!</label>');
    // $('#contain').append('<br>')
    // $('#contain').append('<textarea><textarea>')

});

}


function removeDetails()
{
    $(document).ready(function(){
        // $('#contain').remove();
        $('#contain').empty();
    })
}



function profile1()
{


    window.open('profile1.php');
}





function show()
{
    $("#contain").show();  
}

function hide()
{
    $("#contain").hide();  
}