function openAdmin() {


    const email = document.getElementById('typeEmailX').value;

    const pass = document.getElementById('typePasswordX').value;




    if ((pass != "" && email != "")) {
        if (pass == "admin" && email == "admin@gmail.com") {

            window.open('adminPanelIndex.html');
            window.close();
        }
        else if (pass != "admin" && email != "admin@gmail.com") {
            alert('Wrong Email and Password');
            return;
        }
    }
    else if (pass == "" && email == "") {

        alert('Please Enter Correct Email and Password');
        return;
    }
    else if (pass == "") {
        alert('Please Enter Correct Email and Password');
        return;
    }
    else if (email == "") {
        alert('Please Enter Correct Email and Password');
        return;
    }

}




function logout()
{
    window.open('login.html');
    window.close();
}